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
  $amount = $_GET['amount'];
  $crypto = $_GET['crypto'];

  echo "<p>You want to convert $amount $crypto.</p>"
  ?>
</body>

</html>