<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  var_dump($_SERVER);

  $browserUA = $_SERVER['HTTP_USER_AGENT'];
  echo "<p>Browser User Agent: $browserUA</p>";
  ?>
</body>

</html>