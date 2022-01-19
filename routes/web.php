<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', 'PagesController@homepage')->name('index');
Route::get('/register', 'PagesController@register');
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@attemptLogin')->name('AttempLogin');

Route::get('/branches', 'BranchController@branches');
Route::get('/patient', 'PetController@pets');




// Accounts
Route::get('/accounts/{role}', 'AccountController@accounts');
Route::get('/add/new/account/{role}', 'AccountController@account_form');
Route::post('/add/new/account/{role}', 'AccountController@account_save');
Route::get('/add/new/account/client/new', 'AccountController@account_form');
Route::get('/assign/account/{id}/branch', 'AccountController@assign_branch_form');
Route::post('/assign/account/', 'AccountController@assign_branch');
Route::get('/update/account/', 'AccountController@account_update');
Route::post('/update/account/', 'AccountController@account_update_save');
Route::get('/update/pass/{id}', 'AccountController@pass_edit')->middleware('auth');
Route::post('/update/pass/{id}', 'AccountController@update_pass')->middleware('auth');

//branch
Route::get('/new/branch', 'BranchController@form_branch')->middleware('auth');
Route::post('/new/branch', 'BranchController@store_branch')->middleware('auth');

// site
Route::get('/services', 'PagesController@services')->middleware('auth');
Route::get('/list/pets', 'PagesController@list_pets')->middleware('auth');
Route::get('/new/pet', 'PagesController@new_pet')->middleware('auth');
Route::post('/new/pet', 'PagesController@save_new_pet')->middleware('auth');
Route::get('/diagnostic_services', 'PagesController@d_services')->middleware('auth');
Route::get('/general_wellness_services', 'PagesController@gw_services')->middleware('auth');
Route::get('/other_services', 'PagesController@other_services')->middleware('auth');
Route::get('/findBreed','TestController@findBreed')->middleware('auth');
Route::get('/my-account', 'AccountController@myAccount_profile');
Route::get('/edit/pet/{id}', 'PagesController@pet_edit')->middleware('auth');
Route::post('/edit/pet/{id}', 'PagesController@pet_update')->middleware('auth');

Route::get('/pet/{id}', 'PetController@pet_profile')->middleware('auth');
//appointment
Route::get('/set/appointment', 'PagesController@appointment')->middleware('auth');
Route::post('/set/appointment', 'PagesController@save_appointment')->middleware('auth');
Route::get('/list/appointments', 'PagesController@list_appointment')->middleware('auth');
Route::get('/appointment/{id}', 'AppointmentController@view_appointment')->middleware('auth');


Route::get('/portal/branch', 'BranchController@appointments')->middleware('auth');
Route::get('/portal/vet', 'AppointmentController@vet_calendar')->middleware('auth');


// secretary
Route::get('/approve/appoitnment/{id}', 'AppointmentController@approve')->middleware('auth');
Route::get('/branch/inventory', 'InventoryController@branch_list')->middleware('auth');

//vet
Route::get('/view/appointment/{id}', 'AppointmentController@view_appintment')->middleware('auth');
Route::post('/view/appointment/{id}', 'MedicalController@save_assessment')->middleware('auth');

Route::get('/slot/available/{v}/{d}/{t}', 'AppointmentController@slot')->middleware('auth');
 

//Breed
Route::get('/breed', 'PetController@breed')->middleware('auth');
Route::get('/new/breed', 'BreedController@add')->middleware('auth');
Route::post('/new/breed', 'BreedController@save')->middleware('auth');
Route::get('/update/breed/{id}', 'BreedController@update')->middleware('auth');
Route::post('/update/breed/{id}', 'BreedController@update_save')->middleware('auth');

//Species
Route::get('/species', 'PetController@species')->middleware('auth');
Route::get('/new/species', 'SpeciesController@add')->middleware('auth');
Route::post('/new/species', 'SpeciesController@save')->middleware('auth');
Route::get('/update/species/{id}', 'SpeciesController@update')->middleware('auth');
Route::post('/update/species/{id}', 'SpeciesController@update_save')->middleware('auth');

//Color
Route::get('/color', 'PetController@color')->middleware('auth');
Route::get('/new/color', 'ColorController@add')->middleware('auth');
Route::post('/new/color', 'ColorController@save')->middleware('auth');
Route::get('/update/color/{id}', 'ColorController@update')->middleware('auth');
Route::post('/update/color/{id}', 'ColorController@update_save')->middleware('auth');

//Admin
Route::get('/view/details/{id}', 'AccountController@acc_details')->middleware('auth');
Route::get('/edit/account/{id}', 'AccountController@acc_details_edit')->middleware('auth');
Route::post('/edit/account/{id}', 'AccountController@acc_details_update')->middleware('auth');
Route::get('/archive/{id}', 'AccountController@archive')->middleware('auth');
Route::get('/activate/{id}', 'AccountController@activate')->middleware('auth');
Route::get('/archive/list/{role}', 'AccountController@archive_list');