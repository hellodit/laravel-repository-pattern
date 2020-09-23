<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
* Route for task
*/
Route::get('/tasks', [TaskController::class, 'tasks']);
Route::post('/task', [TaskController::class, 'store']);
Route::put('/task/{task_id}/finish', [TaskController::class, 'setTaskFinish']);
Route::get('/task/{task_id}/comments', [TaskController::class, 'getTaskWithComments']);
Route::post('/task/{task_id}/comment', [CommentController::class,'storeComment']);
Route::get('/task/{task_id}', [TaskController::class, 'getTasksById']);
Route::put('/task/{task_id}', [TaskController::class, 'update']);


/*
 * Route for comment
 */
