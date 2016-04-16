<?php
//Fibonacci & Iteration & Excellent &simple
    function fib1($n)
        {
            return $n < 3 ? 1 : fib1($n - 1) + fib1($n - 2);
        }
        $n=3;
        echo (fib1($n));