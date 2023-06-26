<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\Contacts\IndexContact;

// Inventary
use App\Http\Livewire\Inventary\Products\IndexProducts;
use App\Http\Livewire\Inventary\Products\CreateProduct;
use App\Http\Livewire\Inventary\Entries\IndexEntries;
use App\Http\Livewire\Inventary\Outputs\IndexOutputs;
use App\Http\Livewire\Inventary\Categories\IndexCategories;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/posts', ShowPosts::class)->name('posts');
    Route::get('/contacts', IndexContact::class)->name('contacts');

    Route::get('/categories', IndexCategories::class)->name('categories');
    Route::get('/products', IndexProducts::class)->name('products');
    Route::get('/products/create', CreateProduct::class)->name('products.create');
    Route::get('/entries', IndexEntries::class)->name('entries');
    Route::get('/outputs', IndexOutputs::class)->name('outputs');
});
