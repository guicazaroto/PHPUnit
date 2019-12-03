<?php
namespace App\Store\HR;

class Employee {
  protected $name;
  protected $wage;
  protected $jobRole;

  public function __construct($name, $wage, $jobRole)
  {
      $this->name = $name;
      $this->wage = $wage;
      $this->jobRole = $jobRole;
  }
  public function getName(){
    return $this->name;
  }
  public function getWage(){
    return $this->wage;
  } 
  public function getJobRole(){
    return $this->jobRole;
  }  
}