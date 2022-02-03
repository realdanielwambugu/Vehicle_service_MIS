<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Route::view('/', 'home');

Route::get('/home', 'HomeController@show');

Route::get('/services', 'ServicesController@show');

Route::get('/about', 'MechanicsController@show');

Group::middleware('guest')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');

    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('auth')->members(function ()
{
    Route::get('/dashboard', 'DashboardController@show');

    // clients
    Route::get('/profile', 'ProfileController@show');

    Route::get('/clients', 'ProfileController@show');

    Route::post('/update_profile', 'ProfileController@update');

   // Mechanics
   Route::view('/mechanic', 'admin/mechanic_form');

   Route::post('/mechanic', 'MechanicsController@create');

   Route::get('/mechanics', 'MechanicsController@show');

   Route::get('/mechanic/{mechanic_id}', 'MechanicsController@show');

   Route::post('/update_mechanic', 'MechanicsController@update');

   Route::get('/delete_mechanic/{mechanic_id}', 'MechanicsController@delete');

    // appointment
    Route::view('/appointment', 'client/appointment_form');

    Route::post('/appointment', 'AppointmentsController@create');

    Route::get('/appointments', 'AppointmentsController@show');

    Route::get('/appointment/{appointment_id}', 'AppointmentsController@show');

    Route::post('/update_appointment', 'AppointmentsController@update');

    // enquiries
    Route::view('/enquiry', 'client/enquiry_form');

    Route::post('/enquiry', 'EnquiryController@create');

    Route::get('/enquiries', 'EnquiryController@show');

    Route::get('/enquiry/{enquiry_id}', 'EnquiryController@show');

    Route::post('/update_enquiry', 'EnquiryController@update');

    // services
    Route::view('/service', 'admin/service_form');

    Route::post('/service', 'ServicesController@create');

    Route::get('/service/{service_id}', 'ServicesController@show');

    Route::post('/update_service', 'ServicesController@update');

    Route::get('/delete_service/{service_id}', 'ServicesController@delete');

    // sign Out
    Route::get('/signout', 'LogoutController@logout');

    Route::post('/signout', 'LogoutController@logout');
});

Route::fallback(function (Response $response)
{
    return $response->withView('404');
});
