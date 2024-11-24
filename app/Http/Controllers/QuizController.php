<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserTest;
use App\Models\Quiz;
class QuizController extends Controller
{

public function submitAnswer(Request $request)
{
    $userId = auth()->id();
    $quizId = $request->quiz_id;
    $userAnswer = $request->user_answer;

    // Find the correct answer
    $quiz = Quiz::find($quizId);
    $isCorrect = $quiz->answer === $userAnswer;

    // Save progress
    UserTest::updateOrCreate(
        ['user_id' => $userId, 'quiz_id' => $quizId],
        ['user_answer' => $userAnswer, 'is_correct' => $isCorrect]
    );

    return response()->json(['success' => true, 'is_correct' => $isCorrect]);
}

}
