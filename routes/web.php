<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Simulate CPU load with a small computation
for ($i = 0; $i < 1000000; $i++) {
    sqrt($i); // Perform a small computation
}

// Simulate RAM usage by creating a small array
$memoryHog = [];
for ($i = 0; $i < 10000; $i++) {
    $memoryHog[] = str_repeat('X', 100); // Allocate some memory
}

// Sleep for exactly 1 second to control execution time
sleep(1);

    return 'done';
});

Route::get('loaderio-839bb121a19f1d9a599297511d1d7386', function(){
    return 'loaderio-839bb121a19f1d9a599297511d1d7386';
});