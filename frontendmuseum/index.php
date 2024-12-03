<?php include "header_inc.php" ?>
<ul id="master">
  <?php
  include("classes.php");
  $db = new DB();
  $exhibits = $db->execute('SELECT * FROM exhibits');

  foreach ($exhibits as $i => $exhibit):
  ?>
    <li><a href="details.php?index=<?= $i ?>">
        <?= $exhibit['title'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
<?php include "footer_inc.php" ?>