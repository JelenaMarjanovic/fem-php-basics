<?php include "header_inc.php" ?>
<ul id="master">
  <?php
  include("classes.php");
  $db = new DB();
  $exhibits = $db->execute('SELECT * FROM exhibits');

  foreach ($exhibits as $exhibit):
  ?>
    <li><a href="details.php?index=<?= $exhibit['id'] - 1 ?>">
        <?= $exhibit['title'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
<?php include "footer_inc.php" ?>