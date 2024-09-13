<?php

class CryptoConverter
{
  // properties
  public string $currencyCode;

  // constructor
  function __construct(string $currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }

  // another way to use the constructor by replacing everything from the above
  // function __construct(public string $currencyCode) {}

  // methods
  public function convert(float $value): void {}
}

$c = new CryptoConverter(currencyCode: 'BTC');
