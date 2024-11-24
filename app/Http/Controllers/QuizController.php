<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserTest;
use App\Models\Quiz;
class QuizController extends Controller
{
    public function fetchRandomQuiz(Request $request)
{
    $userId = auth()->id();
    $testSession = $request->session()->get('test_session', uniqid()); // Unique session ID

    // Store the session ID
    $request->session()->put('test_session', $testSession);

    // Fetch already answered question IDs
    $answeredQuestions = UserTest::where('user_id', $userId)
                                //   ->where('test_session', $testSession)
                                  ->pluck('quiz_id')
                                  ->toArray();

    // Stop if the user has answered 30 questions
    if (count($answeredQuestions) >= 30) {
        return response()->json(['message' => 'Test completed'], 200);
    }

    // Get a random question not yet answered
    $quiz = Quiz::whereNotIn('id', $answeredQuestions)->inRandomOrder()->first();

    if (!$quiz) {
        return response()->json(['message' => 'No more questions available'], 200);
    }

    // dd( 30 - count($answeredQuestions), count($answeredQuestions) + 1 ,
    //  [
    //     'id' => $quiz->id,
    //     'question' => $quiz->question,
    //     'options' => [
    //         $quiz->option_one,
    //         $quiz->option_two,
    //         $quiz->option_three,
    //         $quiz->option_four,
    //     ],
    // ],  );
    // Return the quiz with options as an array
    return response()->json([
        'quiz' => [
            'id' => $quiz->id,
            'question' => $quiz->question,
            
            'options' => [
                $quiz->option_one,
                $quiz->option_two,
                $quiz->option_three,
                $quiz->option_four,
            ],
        ], 
        'progress' => count($answeredQuestions) + 1,
        'remaining' => 30 - count($answeredQuestions),
    ]);
}

public function submitAnswer(Request $request)
{
    $userId = auth()->id();
    $quizId = $request->quiz_id;
    $userAnswer = $request->user_answer;
    $testSession = $request->session()->get('test_session');

    // Get the quiz and check if the answer is correct
    $quiz = Quiz::find($quizId);
    $isCorrect = $quiz->answer === $userAnswer;

    // Save the user's response
    UserTest::updateOrCreate(
        ['user_id' => $userId, 'quiz_id' => $quizId, 'test_session' => $testSession],
        ['user_answer' => $userAnswer, 'is_correct' => $isCorrect]
    );

    return response()->json(['success' => true, 'is_correct' => $isCorrect]);
}


public function calculateResults(Request $request)
{
    $userId = auth()->id();
    $testSession = $request->session()->get('test_session');

    // Get user's answers for this session
    $userAnswers = UserTest::where('user_id', $userId)
                           ->where('test_session', $testSession);

    $totalQuestions = $userAnswers->count();
    $correctAnswers = $userAnswers->where('is_correct', true)->count();

    $percentage = $totalQuestions > 0 ? ($correctAnswers / $totalQuestions) * 100 : 0;

    // Compare to others
    $averageScore = UserTest::where('test_session', $testSession)
                            ->groupBy('user_id')
                            ->selectRaw('AVG(is_correct) as avg_correct')
                            ->pluck('avg_correct')
                            ->first() * 100;

    return response()->json([
        'total_questions' => $totalQuestions,
        'correct_answers' => $correctAnswers,
        'percentage' => round($percentage, 2),
        'comparison' => round($percentage - $averageScore, 2), // Comparison
    ]);
}

public function getResults()
{
    $userId = auth()->id();

    // Get all user test data
    $totalQuestions = UserTest::where('user_id', $userId)->count();
    $correctAnswers = UserTest::where('user_id', $userId)->where('is_correct', true)->count();

    $percentage = $totalQuestions > 0 ? ($correctAnswers / $totalQuestions) * 100 : 0;

    return response()->json([
        'total_questions' => $totalQuestions,
        'correct_answers' => $correctAnswers,
        'percentage' => round($percentage, 2),
    ]);
}

}
