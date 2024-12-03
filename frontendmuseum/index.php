<?php include "header_inc.php" ?>
<ul>
  <?php
  include("classes.php");
  $db = new DB();
  $exhibits = $db->execute('SELECT * FROM exhibits');

  foreach ($exhibits as $exhibit):
  ?>
    <li></li>
  <?php endforeach; ?>
</ul>
<?php include "footer_inc.php" ?>