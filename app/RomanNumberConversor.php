<?php
namespace App;
class RomanNumberConversor {
  protected $numTable = array(
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000
  );

  public function convert($symbol) {
    $ac = 0;
    $last_right = 0;

    for ( $i = strlen($symbol) - 1; $i >= 0; $i--) {
      $current = 0;
      $currentNumber = $symbol[$i];
      if(array_key_exists($currentNumber, $this->numTable)) {
        $current = $this->numTable[$currentNumber];
      }

      $mult = 1;
      if($current < $last_right) {
        $mult = -1;
      }

      $ac += ($current * $mult);

      $last_right = $current;
    }
    return $ac;
  }
}