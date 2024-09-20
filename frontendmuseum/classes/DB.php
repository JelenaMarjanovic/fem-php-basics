<?php
// Databases in PHP: 1) custom providers, 2) PDO
// SQLite

class DB
{
  function execute($query)
  {
    $db = new SQLite3('./data/data.db');
    $result = $db->query($query);

    if ($result) {
      $all = [];

      while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        array_push($all, $row);
      }

      return $all;
    }
  }
}
