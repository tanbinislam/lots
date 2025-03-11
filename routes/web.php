<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // return 'hello';
    // Heavy CPU task - Fibonacci Sequence
    function fibonacci($n) {
        if ($n < 2) return $n;
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
    
    $fib = fibonacci(40); // Change number for more load

    // Heavy RAM task - Large Array
    $memoryHog = [];
    for ($i = 0; $i < 5000000; $i++) {
        $memoryHog[] = str_repeat('X', 100); // Allocate memory
    }

    return response()->json([
        'fibonacci_40' => $fib,
        'memory_allocated' => count($memoryHog)
    ]);
});