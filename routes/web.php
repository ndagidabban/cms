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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lga/{state?}', function(Request $request){

	return $request->get('state');

});
// Capital Budget links
Route::get('/capitalbudget', 'CapitalBudgetController@index');
Route::post('/capitalbudget', 'CapitalBudgetController@register')->name('capitalbudget');
Route::post('/capitalbudget/search', 'CapitalBudgetController@search')->name('capitalbudgetsearch');

Route::get('/contractor', 'ContractorController@index');

//Recurrent Budget

Route::get('/recurrentbudget', 'RecurrentBudgetController@index');
Route::post('/recurrentbudget', 'RecurrentBudgetController@register')->name('recurrentbudget');
Route::post('/recurrent/search', 'RecurrentBudgetController@search')->name('recurrentsearch');


//Overhead links
Route::get('/overheadbudget', 'OverHeadBudgetController@index');
Route::post('/overheadbudget', 'OverHeadBudgetController@register')->name('overheadbudget');
Route::post('/overheadbduget/search', 'OverHeadBudgetController@search')->name('overheadbudgetsearch');


//Personnel Budget Links
Route::get('/personnelbudget', 'PersonnelBudgetController@index');
Route::post('/personnelbudget', 'PersonnelBudgetController@register')->name('personnelbudget');
Route::post('/personnelbudget/search', 'PersonnelBudgetController@search')->name('personnelbudgetsearch');

//Contractor Links
Route::get('/contractorlist', 'ContractorListController@index');
Route::post('/contratorlist', 'ContractorListController@register')->name('contractorlist');
Route::post('/contractorlist/search', 'ContractorListController@search')->name('contractorlistsearch');

//Awarded Contracts Links
Route::get('/awardedcontractlist', 'AwardedContractListController@index');
Route::post('/awardedcontractlist', 'AwardedContractListController@register')->name('awardedcontractlist');
Route::post('/awardedcontractlist/search', 'AwardedContractListController@search')->name('awardedcontractlistsearch');

//Capital Fin Record Links
Route::get('/capitalfinrec', 'CapitalFinRecController@index');
Route::post('/capitalfinrec', 'CapitalFinRecController@register')->name('capitalfinrec');
Route::post('/capitalfinrec/search', 'CapitalFinRecController@search')->name('capitalfinrecsearch');

//Recurrent Fin Record Links
Route::get('/recurrentfinrec', 'RecurrentFinRecController@index');
Route::post('/recurrentfinrec', 'RecurrentFinRecController@register')->name('recurrentfinrec');
Route::post('/recurrentfinrec/search', 'RecurrentFinRecController@search')->name('recurrentfinrecsearch');

//Capital Fin Record Cat 2 Links
Route::get('/capitalfinreccat', 'CapitalFinRecCatController@index');
Route::post('/capitalfinreccat', 'CapitalFinRecCatController@register')->name('capitalfinreccat');
Route::post('/capitalfinreccat/search', 'CapitalFinRecCatController@search')->name('capitalfinreccatsearch');

//LOGOUT
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// Approved Capital Budget links
Route::get('/acapitalbudget', 'ACapitalBudgetController@index');
Route::post('/acapitalbudget', 'ACapitalBudgetController@register')->name('acapitalbudget');
Route::post('/acapitalbudget/search', 'ACapitalBudgetController@search')->name('acapitalbudgetsearch');


//Approved Recurrent Budget

Route::get('/arecurrentbudget', 'ARecurrentBudgetController@index');
Route::post('/arecurrentbudget', 'ARecurrentBudgetController@register')->name('arecurrentbudget');
Route::post('/arecurrent/search', 'ARecurrentBudgetController@search')->name('arecurrentsearch');


//Approved Overhead links
Route::get('/aoverheadbudget', 'AOverHeadBudgetController@index');
Route::post('/aoverheadbudget', 'AOverHeadBudgetController@register')->name('aoverheadbudget');
Route::post('/aoverheadbduget/search', 'AOverHeadBudgetController@search')->name('aoverheadbudgetsearch');


//Approved Personnel Budget Links
Route::get('/apersonnelbudget', 'APersonnelBudgetController@index');
Route::post('/apersonnelbudget', 'APersonnelBudgetController@register')->name('apersonnelbudget');
Route::post('/apersonnelbudget/search', 'APersonnelBudgetController@search')->name('apersonnelbudgetsearch');