<?php

function printHello()
{
  echo 'Hello World!';
}

printHello();

echo "\n";

// adding the data types for the arguments is optional but available
function calculateTax(float $price, float $tax = 0.2, string $taxName = 'Tax')
{
  echo "$taxName:\n";
  return $price * $tax;
}

echo calculateTax(100);
echo "\n";
echo calculateTax(200, 0.05);
echo "\n";
echo calculateTax(300, taxName: 'PDV');
