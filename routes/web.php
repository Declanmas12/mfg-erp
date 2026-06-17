<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job-card', function () {
    // This simulates grabbing data from a database
    $jobData = [
        'job_id' => 'WO-2026-004',
        'part_name' => 'Aerospace Bracket - Titanium',
        'quantity' => 45,
        'status' => 'In Progress'
    ];

    // Pass the data to a view file named "job_card"
    return view('job_card', $jobData);
});