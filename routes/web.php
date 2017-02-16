<?php
use App\Mail\approvedmail;

use Illuminate\Http\UploadedFile;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Mobile;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('chairman', 'chairmanController@home');
Route::get('chairman/scores', 'chairmanController@scores');
Route::get('chairman/calculatescores', 'chairmanController@calculatescores');


Route::get('chairman/{id}/posterscoresheetsdelete', 'chairmanController@posterscoresheetsdelete');
Route::get('chairman/{id}/platformscoresheetsdelete', 'chairmanController@platformscoresheetsdelete');

Route::get('chairman/{id}/posterscoresheetsedit', 'chairmanController@posterscoresheetsedit');
Route::get('chairman/{id}/platformscoresheetsedit', 'chairmanController@platformscoresheetsedit');

Route::get('coordinator', 'coordinatorController@index');
Route::get('roomcoordinator', 'roomcoordinatorController@home');
Route::get('judge', 'judgeController@home');
Route::get('student', 'studentController@home');
Route::get('coordinator/{id}/reject', 'coordinatorController@reject');
Route::get('coordinator/{id}/approve', 'coordinatorController@approve');



Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('categories/index', 'CategoriesController@index');
Route::get('categories/create', 'CategoriesController@create');
Route::get('categories/{id}', 'CategoriesController@show');
Route::post('categories', 'CategoriesController@store');


Route::get('departments/index', 'DepartmentController@index');
Route::get('departments/create', 'DepartmentController@create');
Route::post('departments', 'DepartmentController@store');

Route::get('students/index', 'StudentController@index');
Route::get('students/create', 'StudentController@create');
Route::post('students', 'StudentController@store');


Route::get('platformScoreSheets/index', 'PlatformScoreSheetController@index');
Route::get('platformScoreSheets/{id}/evaluate', 'PlatformScoreSheetController@evaluate');
Route::post('platformScoreSheets/{id}/update', 'PlatformScoreSheetController@update');
Route::get('platformScoreSheets/{id}/edit', 'PlatformScoreSheetController@edit');
Route::post('platformScoreSheets/{id}/storeEdit', 'PlatformScoreSheetController@storeEdit');

Route::get('posterScoreSheets/index', 'PosterScoreSheetController@index');
Route::get('posterScoreSheets/{id}/evaluate', 'PosterScoreSheetController@evaluate');
Route::post('posterScoreSheets/{id}/update', 'PosterScoreSheetController@update');
Route::get('posterScoreSheets/{id}/edit', 'PosterScoreSheetController@edit');
Route::post('posterScoreSheets/{id}/storeEdit', 'PosterScoreSheetController@storeEdit');


Route::post('files',function(Request $request){
       

    $imageName = "1.".$request->file('image')->getClientOriginalExtension();

    $request->file('image')->move(base_path().'/storage/app/files/',$imageName);

    return redirect('students\index');
   });


Route::get('{id}','coordinatorController@download');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
