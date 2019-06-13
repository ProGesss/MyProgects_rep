<?php
/* Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for.
   Простое число - это число которое делится только на себя и на 1.
 */
    //реализация поиска простых чисел с использованием теста Ферма

    function isPrimeByFerma($number, $max_tests)
    {
        for ($i=1; $i<=$max_tests; $i++){
            $n = mt_rand (1, $number-1);
            if (($n**($number-1))%$number != 1)
                return false;
        }
        // probability of the number being prime is 1/2^max_tests
        return true;
    }


    function getPrimes($max_number, $max_tests)
    {
        $primes = [];
        for ($i=2; $i<=$max_number; $i++){
            if (isPrimeByFerma($i, $max_tests))
                $primes[] = $i;
        }
        return $primes;
    }



?>