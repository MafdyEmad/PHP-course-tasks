<?php 

function fibonacci($n) {
  if ($n <= 1) {
      return $n;
  } else {
      return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

$number = 10;
$result = fibonacci($number);
echo "Fibonacci($number) = $result";

?>