<?php include "header_inc.php" ?>
<?php
// ini_set("display_errors", 1);
// ini_set("display_startup_errors", 1);
// error_reporting(E_ALL);

include("classes.php");
$db = new DB();

try {
  $exhibits = $db->execute('SELECT * FROM exhibits');

  $index = $_GET['index'] ?? 0;
  if ($index < count($exhibits)) {
    $exhibit = $exhibits[$index];
  } else {
    throw new Exception("Exhibit not found");
    exit();
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>

<?php
if (!$e) { ?>
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
<?php }
?>
<?php include "footer_inc.php" ?>