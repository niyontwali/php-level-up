<?php

declare(strict_types=1);
// function sum(int $x, int $y)
// {
//   $z = $x + $y;
//   return $z; // without the return the value of z would be null, this shows that when a function doesn't return a clear value it return null
// }

// echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4);

// type declaration for function's return value
function addNumbers(float $a, float $b): float // when you replace it with int, it will throw an fatal error
{
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
