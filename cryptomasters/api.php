<?php
include_once("classes/converter.php");

// if (!isset($_GET['code'])) {
//   $code = 'BTC';
// } else {
//   $code = $_GET['code'];
// }

$code = $_GET['code'] ?? 'BTC';

$converter = new CryptoConverter($code);
$rateInUSD = $converter?->convert();

echo "{'rate': $rateInUSD}";
