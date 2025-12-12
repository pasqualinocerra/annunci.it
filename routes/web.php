<?php

use App\Http\Controllers\AnnunciController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RevisorController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',[AnnunciController::class,'index'])->name('annunci.index');

Route::get('/home', [AnnunciController::class, 'index'])->name('home');


Route::get('/listaCategorie', function () {
    return view('categorie.index');
});

Route::get('/nuovaCategoria', function () {
    return view('categorie.create');
})->middleware('auth');

Route::post('/categorie/tore', [CategorieController::class,'store'])->name('categorie.store');

Route::get('/listaAnnunci', function () {
    return view('annunci.index');
});

//Route::get('/creaAnnuncio', function () {
   // return view('annunci.create');
//});

Route::get('/creaAnnuncio', [CategorieController::class,'index'])->name('categorie.index')->middleware('auth');
Route::post('/annunci/store', [AnnunciController::class,'store'])->name('annunci.store');

Route::get('nuovoRevisore', function(){
    return view('auth.revisore');
})->name('nuovoRevisore')->middleware('auth');

Route::post('/richiestarevisore', [MailController::class,'invioRichiestaRevisore'])->name('richiesta.revisore')->middleware('auth');
Route::get('/abilitarevisore/{user}', [RevisorController::class,'abilitaRevisore'])->name('abilita.revisore')->middleware('auth');
Route::get('/annuncidarevisionare/{user}', [AnnunciController::class,'annunciDaRevisionare'])->name('annunci.revisore')->middleware('auth');
Route::post('/pubblicaannuncio/{id}', [AnnunciController::class,'pubblicaAnnuncio'])->name('pubblica.annuncio')->middleware('auth');

Route::get('/2FA', function(){
    return view ('auth.2FA');
})->middleware('auth');
