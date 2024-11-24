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
    $testSession = $request->session()->get('test_session', uniqid()); // Unique test session

    // Store the session for tracking
    $request->session()->put('test_session', $testSession);

    // Check how many questions the user has already answered
    $answeredQuestions = UserTest::where('user_id', $userId)
                                  ->where('test_session', $testSession)
                                  ->pluck('quiz_id')
                                  ->toArray();

    // Stop after 30 questions
    if (count($answeredQuestions) >= 30) {
        return response()->json(['message' => 'Test completed'], 200);
    }

    // Fetch a random question not yet answered
    $quiz = Quiz::whereNotIn('id', $answeredQuestions)->inRandomOrder()->first();

    if (!$quiz) {
        return response()->json(['message' => 'No more questions available'], 200);
    }

    return response()->json([
        'quiz' => $quiz,
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

    $quiz = Quiz::find($quizId);
    $isCorrect = $quiz->answer === $userAnswer;

    // Save the user's answer
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

    // Get user's test data
    $userAnswers = UserTest::where('user_id', $userId)
                           ->where('test_session', $testSession);

    $totalQuestions = $userAnswers->count();
    $correctAnswers = $userAnswers->where('is_correct', true)->count();

    $percentage = $totalQuestions > 0 ? ($correctAnswers / $totalQuestions) * 100 : 0;

    // Compare to others
    $allUsersAverage = UserTest::selectRaw('AVG(is_correct) as avg_correct')
                               ->where('test_session', $testSession)
                               ->pluck('avg_correct')
                               ->first() * 100;

    return response()->json([
        'total_questions' => $totalQuestions,
        'correct_answers' => $correctAnswers,
        'percentage' => round($percentage, 2),
        'comparison' => round($percentage - $allUsersAverage, 2), // How much better
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
