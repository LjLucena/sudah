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
Route::get('user/activation/{token}', 'Auth\LoginController@userActivation');
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@attemptLogin')->name('AttempLogin');
Route::get('/forget-password', 'Auth\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
Route::post('/forget-password', 'Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post'); 
Route::get('/reset-password/{token}', 'Auth\ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
Route::post('/reset-password', 'Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');
Route::get('/sms','SmsController@index');

Route::get('/superadmin', 'AccountController@superadmin')->middleware('auth');
Route::post('/add/new/admin', 'AccountController@save_admin')->middleware('auth');
Route::get('/admin/deact/{id}', 'AccountController@admin_deact')->middleware('auth');
Route::get('/admin/act/{id}', 'AccountController@admin_act')->middleware('auth');
Route::get('/admin/changepass/{id}', 'AccountController@admin_changepass')->middleware('auth');
Route::post('/admin/changepass', 'AccountController@admin_changepass_save')->middleware('auth');
Route::get('/branches', 'BranchController@branches')->middleware('auth');
Route::get('/patient', 'PetController@pets')->middleware('auth');
Route::get('/schedules', 'SchedulesController@schedules')->middleware('auth');

//Schedules
Route::get('/view/branch_schedules/{id}', 'SchedulesController@branch_schedules')->middleware('auth');
Route::get('/edit/branch_sched/{id}', 'SchedulesController@sched_edit')->middleware('auth');
Route::post('/edit/branch_sched/{id}', 'SchedulesController@sched_update')->middleware('auth');
Route::get('/new/sched/{id}', 'SchedulesController@add_sched')->middleware('auth');
Route::post('/new/sched/{id}', 'SchedulesController@save_sched')->middleware('auth');


//Inventory
Route::post('/edit/branch_inventory', 'InventoryController@branchInventory_update')->middleware('auth');
Route::get('/outOfStock/branch_inventory/list', 'InventoryController@branchOutOfStock_list');
Route::post('/addstock/branch_inventory', 'InventoryController@add_stock')->middleware('auth');
Route::get('/add/new/branch_inventory', 'InventoryController@add_branchInventory')->middleware('auth');
Route::post('/add/new/branch_inventory', 'InventoryController@save_branchInventory')->middleware('auth');

//Main Inventory
Route::get('/inventory', 'InventoryController@main_list')->middleware('auth');
Route::get('/category/list', 'InventoryController@category_list')->middleware('auth');
Route::get('/edit/inventory/{id}', 'InventoryController@inventory_edit')->middleware('auth');
Route::post('/edit/inventory/{id}', 'InventoryController@inventory_update')->middleware('auth');
Route::get('/outOfStock/inventory', 'InventoryController@outOfStock')->middleware('auth');
Route::get('/activate/inventory/{id}', 'InventoryController@activate')->middleware('auth');
Route::get('/archive/inventory/{id}', 'InventoryController@archive')->middleware('auth');
Route::get('/archives/inventory', 'InventoryController@archive_list')->middleware('auth');
Route::post('/addstock/inventory', 'InventoryController@stock')->middleware('auth');
Route::get('/add/new/inventory', 'InventoryController@addInventory')->middleware('auth');
Route::post('/add/new/inventory', 'InventoryController@saveInventory')->middleware('auth');
Route::post('/add/new/category', 'InventoryController@saveCategory')->middleware('auth');
Route::post('/update/category', 'InventoryController@updateCategory')->middleware('auth');

// Accounts
Route::get('/accounts/{role}', 'AccountController@accounts')->middleware('auth');
Route::get('/add/new/account/{role}', 'AccountController@account_form');
Route::post('/add/new/account/{role}', 'AccountController@account_save');
Route::get('/add/new/account/client/new', 'AccountController@account_form')->middleware('auth');
Route::get('/assign/account/{id}/branch', 'AccountController@assign_branch_form')->middleware('auth');
Route::post('/assign/account/', 'AccountController@assign_branch')->middleware('auth');
Route::get('/update/account/', 'AccountController@account_update')->middleware('auth');
Route::post('/update/account/', 'AccountController@account_update_save')->middleware('auth');
Route::get('/update/pass/{id}', 'AccountController@pass_edit')->middleware('auth');
Route::post('/update/pass/{id}', 'AccountController@update_pass')->middleware('auth');

//branch
Route::get('/new/branch', 'BranchController@form_branch')->middleware('auth');
Route::post('/new/branch', 'BranchController@store_branch')->middleware('auth');
Route::get('/edit/branch/{id}', 'BranchController@branch_edit')->middleware('auth');
Route::post('/edit/branch/{id}', 'BranchController@branch_update')->middleware('auth');

// site
Route::get('/services', 'PagesController@services');
Route::get('/list/pets', 'PagesController@list_pets')->middleware('auth');
Route::get('/new/pet', 'PagesController@new_pet')->middleware('auth');
Route::post('/new/pet', 'PagesController@save_new_pet')->middleware('auth');
Route::get('/diagnostic_services', 'PagesController@d_services');
Route::get('/general_wellness_services', 'PagesController@gw_services');
Route::get('/other_services', 'PagesController@other_services');
Route::get('/findBreed','TestController@findBreed')->middleware('auth');
Route::get('/my-account', 'AccountController@myAccount_profile')->middleware('auth');
Route::get('/show/appointment/form/{id}', 'PagesController@show_form')->middleware('auth');
Route::get('/cancel/appt/{id}', 'AppointmentController@cancel_appt')->middleware('auth');
Route::get('/edit/appt/{id}', 'PagesController@edit_appt')->middleware('auth');
Route::post('/edit/appt/{id}', 'PagesController@save_appt')->middleware('auth');
Route::get('/edit/pet/{id}', 'PagesController@pet_edit')->middleware('auth');
Route::post('/edit/pet/{id}', 'PagesController@pet_update')->middleware('auth');
Route::post('/change/pet/photo', 'PagesController@pet_photo_update')->middleware('auth');
Route::get('/show/time/{id}/{branch}/{date}', 'PagesController@show_time')->middleware('auth');
Route::get('/show/pet/{date}', 'PagesController@show_pet')->middleware('auth');
Route::get('/show/avail/{date}/{branch}', 'PagesController@available')->middleware('auth');
Route::get('/show/slot/{id}/{branch}/{date}', 'PagesController@showAvailSlot')->middleware('auth');
Route::get('/show/vet/{date}/{branch}', 'PagesController@showAvailVet')->middleware('auth');
Route::post('/edit/apptDate', 'PagesController@updateApptDate')->middleware('auth');
Route::get('/edit/apptTime/{id}', 'PagesController@editApptTime')->middleware('auth');
Route::post('/edit/apptTime/{id}', 'PagesController@updateApptTime')->middleware('auth');
Route::post('/update/reason', 'PagesController@updateApptReason')->middleware('auth');
Route::post('/update/services', 'PagesController@updateApptServices')->middleware('auth');


Route::get('/pet/{id}', 'PetController@pet_profile')->middleware('auth');
Route::get('/teams', 'PagesController@teams');

//appointment
Route::get('/set/appointment', 'PagesController@appointment')->middleware('auth');
Route::post('/set/appointment', 'PagesController@save_appointment')->middleware('auth');
Route::get('/list/appointments', 'PagesController@list_appointment')->middleware('auth');
Route::get('/appointment/{id}', 'AppointmentController@view_appointment')->middleware('auth');

Route::get('/portal/branch', 'BranchController@appointments')->middleware('auth');
Route::get('/portal/vet', 'AppointmentController@vet_calendar')->middleware('auth');


// secretary
Route::get('/approve/appoitment/{id}', 'AppointmentController@approve')->middleware('auth');
Route::get('/view/appt/{id}', 'AppointmentController@view')->middleware('auth');
Route::get('/branch/inventory', 'InventoryController@branch_list')->middleware('auth');
Route::get('/branch/appt', 'AppointmentController@all_appt')->middleware('auth');
Route::get('/branch/appt/{status}', 'AppointmentController@appt_list')->middleware('auth');
Route::get('/view/pet/{id}', 'BranchController@view_pet')->middleware('auth');
Route::get('/branch/cancel/appt', 'AppointmentController@cancel')->middleware('auth');
Route::get('/set/appt/{id}', 'AppointmentController@add_appt')->middleware('auth');
Route::post('/set/appt/{id}', 'AppointmentController@save_appt')->middleware('auth');
Route::get('/add/new/clients', 'BranchController@account_form')->middleware('auth');
Route::post('/add/new/clients', 'BranchController@client_save')->middleware('auth');



//vet
Route::get('/view/appointment/{id}', 'AppointmentController@view_appintment')->middleware('auth');
Route::post('/view/appointment/{id}', 'MedicalController@save_assessment')->middleware('auth');
Route::get('/medical_history/{id}', 'MedicalController@medical_history')->middleware('auth');

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
Route::get('/archive/list/{role}', 'AccountController@archive_list')->middleware('auth');
Route::get('/userlog', 'UserLogController@list')->middleware('auth');
Route::get('/activity_log', 'ActivityLogController@activity_list')->middleware('auth');

//Products
Route::get('/products', 'PagesController@products');
Route::get('/jerhigh', 'PagesController@jerhigh');
Route::get('/kittycrunch', 'PagesController@kittycrunch');
Route::get('/monello', 'PagesController@monello');
Route::get('/pedigree_adult', 'PagesController@pedigree_adult');
Route::get('/pedigree_puppy', 'PagesController@pedigree_puppy');
Route::get('/royal_puppy', 'PagesController@royal_puppy');
Route::get('/royal_mini', 'PagesController@royal_mini');
Route::get('/royal_kitten', 'PagesController@royal_kitten');
Route::get('/royal_adult', 'PagesController@royal_adult');

Route::get('/products_others', 'PagesController@products_others');
Route::get('/carrier', 'PagesController@carrier');
Route::get('/gallon', 'PagesController@gallon');
Route::get('/collar', 'PagesController@collar');
Route::get('/pet_leash', 'PagesController@pet_leash');
Route::get('/bowl', 'PagesController@bowl');
Route::get('/bed', 'PagesController@bed');
Route::get('/litter_box', 'PagesController@litter_box');
Route::get('/pet_comb', 'PagesController@pet_comb');
Route::get('/cat_condo', 'PagesController@cat_condo');


Route::get('/products_health', 'PagesController@products_health');
Route::get('/product_bioline_earmite', 'PagesController@product_bioline_earmite');
Route::get('/product_bearing', 'PagesController@product_bearing');
Route::get('/product_calcium', 'PagesController@product_calcium');
Route::get('/product_dental', 'PagesController@product_dental');
Route::get('/product_furmagic', 'PagesController@product_furmagic');
Route::get('/product_lcvit', 'PagesController@product_lcvit');
Route::get('/product_mondex', 'PagesController@product_mondex');
Route::get('/product_nutrivet', 'PagesController@product_nutrivet');
Route::get('/product_papimvp', 'PagesController@papimvp');