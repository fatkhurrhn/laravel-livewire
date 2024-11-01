<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowService;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicesPage');
Route::get('/service/{id}', ShowService::class)->name('servicePage'); 