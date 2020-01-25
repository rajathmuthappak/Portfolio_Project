<?php

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

Route::get('/', 'HomeController@route');

Route::get('/home', 'HomeController@route');

Route::post('/login', 'MainController@login');

Route::post('/contact', 'ValidateAndSendEmail@sendMail');

Route::get('/logout', 'MainController@logout');

Route::get('/about', 'AboutMeController@route');

Route::get('/skills', 'SkillController@route');

Route::get('/resume', 'ResumeController@route');

Route::get('/references', 'ReferenceController@route');

Route::get('/portfolio', 'PortfolioController@route');

Route::get('/all', 'PortfolioController@all');

Route::get('/website', 'PortfolioController@website');

Route::get('/apps', 'PortfolioController@apps');

Route::get('/design', 'PortfolioController@design');

Route::get('/photography', 'PortfolioController@photography');

Route::get('/hireme', 'HireMeController@route');

Route::get('/contact', 'ContactController@route');

Route::post('/sendmail', 'ContactController@sendmail');

Route::get('/mailconfirm', function () {
    return view('mailconfirmation');
});

Route::get('/blogs', 'BlogController@route');

Route::get('/edit', 'EditDetailsController@route');

Route::post('/signUp', 'MainController@signUp');

Route::post('/addSkill', 'AddData@addSkill');

Route::post('/addResume', 'AddData@addResume');

Route::post('/addReference', 'AddData@addReference');

Route::post('/contactInfo', 'UpdateData@updateContactInfo');

Route::post('/updateJobSeeker', 'UpdateData@updateJobSeeker');

Route::get('/updateSkill', 'UpdateData@updateSkill');

Route::get('/updateResume', 'UpdateData@updateResume');

Route::get('/updateReference', 'UpdateData@updateReference');

Route::get('/updateHireMe', 'UpdateData@updateHireMe');

Route::get('/addSuccess', function () {
    return view('addSuccess');
});

Route::get('/updteSuccess', function () {
    return view('updteSuccess');
});
