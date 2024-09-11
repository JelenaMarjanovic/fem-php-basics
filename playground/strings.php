<?php

$title = 'PHP Fundamentals';

$message = 'Welcome to ' . $title;
echo $message;

echo "\n";

$message2 = "Welcome to $title";
echo $message2;

echo "\n";

$json = <<<PRETTYJSON
{
  "menu": {
    "id": "file",
    "value": "File",
    "popup": {
      "menuitem": [
        {"value": "New", "onclick": "CreateNewDoc()"},
        {"value": "Open", "onclick": "OpenDoc()"},
        {"value": "Close", "onclick": "CloseDoc()"}
      ]
    },
    "message": $title;
  }
}
PRETTYJSON;

echo $json;

echo "\n";

$json2 = <<<'JSON'
{
  "menu": {
    "id": "file",
    "value": "File",
    "popup": {
      "menuitem": [
        {"value": "New", "onclick": "CreateNewDoc()"},
        {"value": "Open", "onclick": "OpenDoc()"},
        {"value": "Close", "onclick": "CloseDoc()"}
      ]
    }
  }
}
JSON;

echo $json2;

echo "\n";

$year = 2024;

$message3 = 'Welcome to the future, it\'s a year: ' . ($year + 1);
echo $message3;
