<?php
namespace App\Store\HR;
class WageCalculator {

  public function makeCalc($employee){
    if($employee->getJobRole() == 1) {
      return $this->calcDevWage($employee);
    }
    if ($employee->getJobRole() == 2) {
      return $this->calcDBAWage($employee);
    }
  }

  public function calcDevWage ($dev) {
    if($dev->getWage() < 3000) {
      return 1350.0;
    } 
      return 3200.0;
  }

  public function calcDBAWage ($dba) {
    if($dba->getWage() > 2500) {
      return 2100;
    } 
      return 1955;
  }

}