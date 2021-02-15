<?php
use App\Http\Controllers\apiCharactersController;

Route::apiResource('characters', 'App\Http\Controllers\apiCharactersController');

Route::get('characters/{id}/comics',  [apiCharactersController::class, "comics"])->name('comics');

Route::get('characters/{id}/events',  [apiCharactersController::class, "events"])->name('events');

Route::get('characters/{id}/stories',  [apiCharactersController::class, "stories"])->name('stories');

Route::get('characters/{id}/series',  [apiCharactersController::class, "series"])->name('series');
