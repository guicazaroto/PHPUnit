<?php
namespace App\Store\HR;
class WageCalculator {
  public function makeCalc($developer){
    if($developer->getWage() < 3000) {
      return 1350.0;
    } 
      return 3200.0;
  }
}