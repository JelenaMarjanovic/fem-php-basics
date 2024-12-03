<?php include "header_inc.php" ?>
<?php
include("classes.php");
$db = new DB();
$exhibits = $db->execute('SELECT * FROM exhibits');

$exhibit = $exhibits[$_GET['index'] ?? 0];
?>
<article>
  <h2><?= $exhibit['title'] ?></h2>
  <p>
    <?= $exhibit['description'] ?>
  </p>
  <img
    src="gallery/<?= $exhibit['image'] ?>"
    fetchpriority="high"
    decoding="sync" />
</article>
<?php include "footer_inc.php" ?>