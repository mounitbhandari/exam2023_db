<?php

use App\Http\Controllers\OptionController;
use Illuminate\Http\Request;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(array('prefix' => 'dev'), function() {

    //Subjects
    Route::get("subjects", [SubjectController::class,'get_subject']);
    Route::get("subjectsWithChapters", [SubjectController::class,'get_all_subjects_with_chapters']);
    Route::post("saveSubject", [SubjectController::class,'save_subject']);
    Route::patch("updateSubject", [SubjectController::class,'update_subject']);

    //chapters
    Route::get("chapters", [ChapterController::class,'index']);
    Route::get("chaptersWithQuestion", [ChapterController::class,'get_all_chapters_with_question']);

    //Question
    Route::get("questions", [QuestionController::class,'index']);
    Route::get("questionsWithOptions", [QuestionController::class,'get_question_with_options']);
    Route::get("questionsByChapterId/{chapterId}", [QuestionController::class,'get_question_by_chapter_id']);

    //Option
    Route::get("options", [OptionController::class,'index']);
    Route::get("options/{question_id}", [OptionController::class,'get_all_option_by_question_id']);

});
