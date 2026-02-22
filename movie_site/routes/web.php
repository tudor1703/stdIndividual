<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', MovieController::class);

Route::view('/about', 'movies.about')->name('about');

Route::view('/contact', 'movies.contact')->name('contact');

Route::post('/contact/send', function(Request $request) {
    // Validate the form
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Here you can handle the data, e.g., send an email or save to DB
    // For now, we just redirect back with success
    return back()->with('success', 'Your message has been sent!');
})->name('contact.send');