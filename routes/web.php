<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Facades;
use Jenssegers\Agent\Agent;
use App\Models\Home;
use App\Models\Service;
use App\Models\User;
use App\Models\Organization;
use App\Models\Vacancies;
use App\Models\Contact;

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


Route::get('/test', function () {

    return view('test');
})->name('test');

Route::get('/', function () {
    $home = Home::find(1);
    $agent = new Agent();
    return view('home', compact('agent'), ['home' => $home]);
})->name('home');


Route::get('/services', function () {
    $service = Service::find(1);
    $agent = new Agent();
    return view('services', compact('agent'), ['service' => $service]);
})->name('services');
Route::get('/organization', function () {
    $organization = Organization::find(1);
    $agent = new Agent();
    return view('organization', compact('agent'), ['organization' => $organization]);
})->name('organization');

Route::get('/vacancies', function () {
    $agent = new Agent();
    $vacancie = Vacancies::find(1);
    return view('vacancies', compact('agent'), ['vacancie' => $vacancie]);
})->name('vacancies');

Route::get('/contact', function () {
    $agent = new Agent();
    $contact = Contact::find(1);
    return view('contact', compact('agent'), ['contact' => $contact]);
})->name('contact');


Route::get('/update_organization', [App\Http\Controllers\HomeController::class, 'update_organization'])->name('update_organization');
Route::get('/update_contact', [App\Http\Controllers\HomeController::class, 'update_contact'])->name('update_contact');


Route::get('/update_vacancies', [App\Http\Controllers\HomeController::class, 'update_vacancies'])->name('update_vacancies');
Route::get('/update_home', [App\Http\Controllers\HomeController::class, 'update_home'])->name('update_home');
Route::get('/update_service', [App\Http\Controllers\HomeController::class, 'update_service'])->name('update_service');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
