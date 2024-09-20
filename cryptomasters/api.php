<?php
include_once("classes/converter.php");

// Export a JSON to the client
header('Content-Type: application/json');

// Allow cross-origin requests
header('Access-Control-Allow-Origin: *');

// if (!isset($_GET['code'])) {
//   $code = 'BTC';
// } else {
//   $code = $_GET['code'];
// }

$code = $_GET['code'] ?? 'BTC';

$converter = new CryptoConverter($code);
$rateInUSD = $converter?->convert();

echo "{\"rate\": $rateInUSD}";
