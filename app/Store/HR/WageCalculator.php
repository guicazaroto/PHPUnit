<?php
namespace App\Store\HR;
class WageCalculator {

  public function makeCalc(Employee $employee) : float {
    if($employee->getJobRole() == 1) {
      return $this->calcDevWage($employee);
    }
    if ($employee->getJobRole() == 2) {
      return $this->calcDBAWage($employee);
    }
  }

  public function calcDevWage (Employee $dev) : float{
    if($dev->getWage() > 3000) {
      return bcmul($dev->getWage(), 0.8);
    } 
      return bcmul($dev->getWage(), 0.9);;
  }

  public function calcDBAWage (Employee $dba) : float {
    if($dba->getWage() > 2500) {
      return bcmul($dba->getWage(), 0.75);
    } 
      return bcmul($dba->getWage(), 0.85);
  }

}