<?php
namespace App;
class RomanNumberConversor {
  // public function convert ($num) {
  //   if ($num == 'I') return 1;
  //   if ($num == 'V') return 5;
  // }
  
  protected $numTable = array(
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000
  );

  public function convert ($symbol) {
    if(array_key_exists($symbol, $this->numTable )) {
      return $this->numTable[$symbol];
    }
    return 0;
  }
}