<?php
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\WalletController;
use App\Http\Controllers\BidhistoryController;
use App\Http\Controllers\WinhistoryController;
use App\Http\Controllers\BanjaccountController;
use App\Http\Controllers\GamerateController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OnlinemattakaController;
use App\Http\Controllers\AboutmattakaController;
use App\Http\Controllers\MattakagameController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WalletsbalController;
use App\Http\Controllers\WithdrawControllerer;
use App\Http\Controllers\FoundControllerer;
use App\Http\Controllers\FundhistoryControllerer;
use App\Http\Controllers\TransferpointControllerer;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MattakaresultController;
use App\Http\Controllers\FundrequestController;
use App\Http\Controllers\JodichartController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/wallets', 'WalletController');
Route::resource('/bidhistorys', 'BidhistoryController');
Route::resource('/winhistorys', 'WinhistoryController');
Route::resource('/banjaccounts', 'BanjaccountController');
Route::resource('/gamerates', 'GamerateController');
Route::resource('/notices', 'NoticeController');
Route::resource('/onlinemattakas', 'OnlinemattakaController');
Route::resource('/aboutmattakas', 'AboutmattakaController');
Route::resource('/mattakagames', 'MattakagameController');
Route::resource('/customers', 'CustomerController');
Route::resource('/walletsbals', 'WalletsbalController');
Route::resource('/withdraws', 'WithdrawControllerer');
Route::resource('/funds', 'FoundControllerer');
Route::resource('/fundhistorys', 'FundhistoryControllerer');
Route::resource('/transferpoints', 'TransferpointControllerer');
Route::resource('/categories', 'CategoryController');
Route::resource('/mattakaresults', 'MattakaresultController');
Route::resource('/fundrequests', 'FundrequestController');
Route::resource('/jodicharts', 'JodichartController');

// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
	Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});