<?php

$list = array("id" => 4, 0, 10, "limit" => 24, 50);
$countries = ["Argentina", "Brazil", "Canada", "Denmark"];

echo $list[0];
echo "\n";
echo $list["id"];
echo "\n";
echo $countries[2];

echo "\n";

echo 'The number of elements in the array $list is: ' . count($list);

echo "\n" . 'loops' . "\n" . '-----' . "\n";

$i = 0;

echo 'while loop' . "\n";
while ($i < count($countries)) {
  echo "\n";
  echo $countries[$i];
  $i++;
}

echo "\n\n";

$j = 0;

echo 'do-while loop' . "\n";
do {
  echo "\n";
  echo $countries[$j];
  $j++;
} while ($j < count($countries));

echo "\n\n";

echo 'for loop' . "\n";
for ($i = 0; $i < count($countries); $i++) {
  echo "\n";
  echo $countries[$i];
}

echo "\n\n";

echo 'foreach loop' . "\n";
foreach ($countries as $country) {
  echo "\n";
  echo $country;
}

echo "\n\n";
echo 'foreach loop with key/index' . "\n";
foreach ($countries as $i => $country) {
  echo "\n";
  echo "$i: $country";
}
