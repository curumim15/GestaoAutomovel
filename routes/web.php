<?php
use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/',[FrontendController::class, 'index']);
Route::get('/welcome',[FrontendController::class, 'welcome'])->name('welcome');
Route::get('/agendas',[FrontendController::class, 'agendas'])->name('agendas');
Route::get('/produtos',[FrontendController::class, 'produtos'])->name('produtos');
Route::get('/contacto',[FrontendController::class, 'contacto'])->name('contacto');

Route::get('contact', 'FrontendController@contact');
Route::post('/submitform',[FrontendController::class, 'contactPost'])->name('contactPost');

Route::get('agenda', 'FrontendController@agenda');
Route::post('/submitform1',[FrontendController::class, 'agendaPost'])->name('agendaPost');

