<?php
// include "classes/converter.php";
// include_once "classes/converter.php";
// require "classes/converter.php";
require_once "classes/converter.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Converted Amount</title>
</head>

<body>
  <h1>Conversion Results</h1>

  <?php
  // Superglobal variables

  // When using GET method, you can access the data using $_GET
  // $amount = $_GET['amount'];
  // $crypto = $_GET['crypto'];

  // Check if the amount field is empty
  if (isset($_POST['amount']) && $_POST['amount'] === '') {
    echo "<p>Please, go back to form and enter the amount.</p>";
  } else if (isset($_POST['amount']) && isset($_POST['crypto'])) { // Check if the form has been submitted
    // When using POST method, you can access the data using $_POST
    $amount = $_POST['amount'];
    $crypto = $_POST['crypto'];

    echo "<p>You want to convert $amount $crypto.</p>";
  } else {
    echo "<p>Ops! Something went wrong. Please, go back to form and try again.</p>";
  }
  ?>
</body>

</html>