<?php
//   // while loop
// $x = 0;
// while ($x < 4) {
//   echo "$x is still less than 4 <br />";

//   // you can still concatenate like this
//   echo $x. ' is still less than 4 <br />';
//   $x++;
// }

// // for loop
// for ($x = 0; $x < 4; $x++) {
//   echo "$x is still less than 4 <br />";
// }

// // foreach loop
// $array = ["John", "Niyontwali"];
// foreach ($array as $x) {
//   echo "$x is still my name <br />";
// }

// applying breaks
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
