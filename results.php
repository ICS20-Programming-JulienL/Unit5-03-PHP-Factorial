<?php

  // initialize numbers to an empty string
  $numbers = "";

  // initialize counter to 0
  $counter = 0;

  // initialize factorial to 1
  $factorial = 1;

  // get userInteger from user input
  $userInteger = $_POST["first-int"];

  // if userInteger is equal to an empty string or is less than 0, ask them to enter a positive integer
if (($userInteger == "") || ($userInteger < 0)) {
     $numbers = "Please enter a positive integer.";
}
  // otherwise, use a do...while loop to calculate the factorial of userInteger
else {
    do {
       // calculate the factorial by multiplying the factorial variable by the counter plus one
        $factorial = $factorial*($counter+1);

       // increment the counter
        $counter = $counter + 1;
     } while ($counter < $userInteger);

  // define the numbers statement
    $numbers = $userInteger . "! = " . $factorial;
  }
  
// display the factorial
  echo $numbers;