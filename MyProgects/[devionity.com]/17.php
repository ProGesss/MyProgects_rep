<?php
/* Создать алгоритм для определения количества найденных простых чисел в промежутке от 200 до 400.
 */

    $max = 400;

    $primesFound = 0;
    $probablePrimes = 0;

    for ($x = 200; $x <= $max; $x++) {
        $primeStatus = gmp_prob_prime($x);
        if ($primeStatus == 1) {
            $probablePrimes++;
        } else if ($primeStatus == 2) {
            $primesFound++;
        }
    }
    echo "Total primes found: " . $primesFound . " between 1 and " . $max . ". Probable primes in this interval: " . $probablePrimes;
?>