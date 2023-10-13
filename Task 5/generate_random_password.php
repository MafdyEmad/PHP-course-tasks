<?php 

function generateRandomPassword($length, $characters) {
  $password = '';
  $charLength = strlen($characters);
  for ($i = 0; $i < $length; $i++) {
      $randomChar = $characters[rand(0, $charLength - 1)];
      $password .= $randomChar;
  }
  return $password;
}

$allowedChars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$passwordLength = 8;
$randomPassword = generateRandomPassword($passwordLength, $allowedChars);
echo "Random Password: $randomPassword";


?>