<!DOCTYPE html>
<!-- Unit5-03-PHP-Factorial -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="The factorial of a positive integer">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Julien L.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index_php/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index_php/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index_php/favicon-16x16.png">
    <link rel="manifest" href="./fav_index_php/site.webmanifest">
    <!--Link to MDL-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>The factorial of a positive integer</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Header and Text-->
    <center>
      <?php echo "<h1>The factorial of a positive integer</h1>" ?>
      <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
      <?php echo "<h4>Course: ICS20 Programming</h4>" ?>
      <br>
      <!--User Input-->
      <?php echo "<h3>Please enter the following:</h3>" ?>
      <form action="./results.php" method="post" target="result">
        <label for="first-int">Enter your first integer</label>
          <input type="number" id="first-int" step="1" placeholder="Eg. 4" name="first-int">
           <br><br>
        <input type="submit" value="Calculate Product"><br><br>	
      </form>
      <!--Display Statement for Museum Admission-->
      <iframe id="result" name="result">
 <?php
    // Created by: Julien Lamoureux
    // Created on: May 2023
    // This file contains the JS functions for index.html, Unit5-02-PHP-ProductOfNumbers

    // intialize product to 0
    $product = 0;

    // initialize numbers to an empty string
    $numbers = "";

    // get first integer
    $firstInt = $_POST["first-int"];
    $int1 = intval($firstInt);
    $absFirstInt = abs($int1);

    // get second integer
    $secondInt = $_POST["second-int"];
    $int2 = intval($secondInt);
    $absSecondInt = abs($int2);

    // if the user enters nothing, tell them to enter two integers
    if (($firstInt == "") || ($secondInt == "")) {
        echo "Please enter two integers.";
    } else {
    // use a for loop to calculate the product from the two integers
        for ($counter = 0; $counter < $absSecondInt; $counter++) {
            $product += $absFirstInt;
        }

    // if the firstInt is less than 0 and the secondInt is greater than 0, then make the product negative
        if (($firstInt < 0) && ($secondInt > 0)) {
            $product = $product * -1;
        } elseif (($secondInt < 0) && ($firstInt > 0)) {
    // otherwise, if firstInt is greater than 0 and secondInt is less than 0, then make the product negative
            $product = $product * -1;
        }
    // redefine calculation statement
        $numbers = $firstInt . "*" . $secondInt . "=" . $product;
    }

    // display the product
    echo $numbers;
    ?>
    </iframe>
      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </center>
  </body>
</html>