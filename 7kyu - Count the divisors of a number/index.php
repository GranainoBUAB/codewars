<?php

function divisors($n) {
    // your code here
    
    $result = 0;
    
    for ($index = 1; $index < $n+1; $index++)
    {
        if ($n % $index === 0)
        {
        $result += 1;
        }
    }
    return ($result);
    
}

echo (divisors(1));
echo "<br>";
echo (divisors(10));
echo "<br>";
echo (divisors(11));
echo "<br>";
echo (divisors(54));
echo "<br>";
echo (divisors(64));
