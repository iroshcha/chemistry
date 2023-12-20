<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
\Illuminate\Support\Facades\Auth::routes();
// Админка
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)
        ->name('admin.index');
    // Темы
    Route::prefix('topics')->group(function () {
        Route::get('/', \App\Http\Controllers\Admin\Topics\IndexController::class)
            ->name('admin.topics');
        Route::get('/add', \App\Http\Controllers\Admin\Topics\ShowFormAddController::class)
            ->name('admin.topic.showFormAdd');
        Route::post('/', \App\Http\Controllers\Admin\Topics\AddController::class)
            ->name('admin.topic.add');
        Route::delete('/{topic}', \App\Http\Controllers\Admin\Topics\DeleteController::class)
            ->name('admin.topic.delete');
        Route::get('/{topic}/update', \App\Http\Controllers\Admin\Topics\ShowFormUpdateController::class)
            ->name('admin.topic.showFormUpdate');
        Route::patch('/{topic}', \App\Http\Controllers\Admin\Topics\UpdateController::class)
            ->name('admin.topic.update');
    //~Темы

        // Подтемы
        Route::prefix('{topic}/subtopics')->group(function () {
            Route::get('/', \App\Http\Controllers\Admin\Topics\Subtopics\IndexController::class)
                ->name('admin.subtopics');
            Route::get('/add', \App\Http\Controllers\Admin\Topics\Subtopics\ShowFormAddController::class)
                ->name('admin.subtopic.showFormAdd');
            Route::post('/', \App\Http\Controllers\Admin\Topics\Subtopics\AddController::class)
                ->name('admin.subtopic.add');
            Route::get('/{subtopic}/update', \App\Http\Controllers\Admin\Topics\Subtopics\ShowFormUpdateController::class)
                ->name('admin.subtopic.showFormUpdate');
            Route::patch('/{subtopic}', \App\Http\Controllers\Admin\Topics\Subtopics\UpdateController::class)
                ->name('admin.subtopic.update');
            Route::delete('/{subtopic}', \App\Http\Controllers\Admin\Topics\Subtopics\DeleteController::class)
                ->name('admin.subtopic.delete');
        //~Подтемы

            // Вопросы и ответы
            Route::prefix('{subtopic}/quests')->group(function () {
                Route::get('/', \App\Http\Controllers\Admin\Topics\Subtopics\Quests\IndexController::class)
                    ->name('admin.quests');
                Route::get('/add', \App\Http\Controllers\Admin\Topics\Subtopics\Quests\ShowFormAddController::class)
                    ->name('admin.quest.showFormAdd');
                Route::post('/', \App\Http\Controllers\Admin\Topics\Subtopics\Quests\AddController::class)
                    ->name('admin.quest.add');
                Route::get('/{quest}', \App\Http\Controllers\Admin\Topics\Subtopics\Quests\DetailController::class)
                    ->name('admin.quest.detail');
                Route::get('/{quest}/update', \App\Http\Controllers\Admin\Topics\Subtopics\Quests\ShowFormUpdateController::class)
                    ->name('admin.quest.showFormUpdate');
                Route::patch('/{quest}', \App\Http\Controllers\Admin\Topics\Subtopics\Quests\UpdateController::class)
                    ->name('admin.quest.update');
                Route::delete('/{quest}', \App\Http\Controllers\Admin\Topics\Subtopics\Quests\DeleteController::class)
                    ->name('admin.quest.delete');
            });
            //~Вопросы и ответы
        });
    });
    Route::get('/{user}', \App\Http\Controllers\Admin\Users\DetailController::class)
        ->name('user.detail');
});
//Route::post('ckeditor/image_upload', '\App\Http\Controllers\CKEditorController@upload')->name('upload');
Route::middleware(['auth'])->group(function () {
    Route::get('/', [Test::class, 'downTown']);
});
