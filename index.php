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
            $factorial = $factorial * ($counter + 1);

            // increment the counter
            $counter = $counter + 1;
           } while ($counter < $userInteger);
      // define the numbers statement
      $numbers = $userInteger . "! = " . $factorial;
    }
    // display the factorial
    echo $numbers;
    ?>
    </iframe>
      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </center>
  </body>
</html>