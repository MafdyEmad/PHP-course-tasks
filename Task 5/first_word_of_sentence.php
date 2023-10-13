<?php 
function getFirstWord($sentence) {
  $words = explode(' ', $sentence);
  if (!empty($words)) {
      return $words[0];
  }
  return "";
}

$sentence = "Hellow world";
$firstWord = getFirstWord($sentence);
echo "The first word is: $firstWord";


?>