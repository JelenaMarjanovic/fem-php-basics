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
  public function convert(float $value = 1): float|bool
  {
    $code = $this->currencyCode;
    $url = "https://cex.io/api/ticker/$code/USD";
    $json = file_get_contents($url);

    if ($json) {
      $data = json_decode($json);
      $last = $data->last;

      // echo $json;
      // var_dump($data);

      return $value * $last;
    } else {
      return false;
    }
  }
}
