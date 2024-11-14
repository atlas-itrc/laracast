<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {

    // $job = Job::all();
    // dd($job);

    return view('welcome', [
        'greeting' => 'Hello',
        'name' => 'Saim'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/job_listing/{id}', function ($id) {

    $job = Job::find($id);
    // dd($job);
    return view('job', ['job' => $job]);
});
