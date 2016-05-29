<?php
use Illuminate\Session\TokenMismatchException;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**
 * extends routes from vendor\jacopo\laravel-authentication-acl\app\Http\routes.php
 */
/**
 * User login and logout
 */
Route::group(['middleware' => ['web']], function ()
{
    /*
      |--------------------------------------------------------------------------
      | Admin side (auth required)
      |--------------------------------------------------------------------------
      |
      */
    Route::group(['middleware' => ['admin_logged', 'can_see']], function ()
    {
        /**
         * List of payrolls
         */
        
        Route::get('/admin/hrm/payrolls', [
                'as'   => 'hrm.payrolls',
                'uses' => '\App\Http\Controllers\HrmController@getPayrolls'
        ]);
        Route::get('/admin/hrm/edit_payroll', [
                'as'   => 'hrm.edit_payroll',
                'uses' => '\App\Http\Controllers\HrmController@editPayroll'
        ]);
        Route::post('/admin/hrm/edit_payroll', [
                'as'   => 'hrm.edit_payroll',
                'uses' => '\App\Http\Controllers\HrmController@postPayroll'
        ]);
        Route::get('/admin/hrm/add_payroll', [
                'as'   => 'hrm.add_payroll',
                'uses' => '\App\Http\Controllers\HrmController@addPayroll'
        ]);
        Route::get('/admin/hrm/delete_payroll', [
                'as'   => 'hrm.delete_payroll',
                'uses' => '\App\Http\Controllers\HrmController@deletePayroll'
        ]);
        
        
    });
});