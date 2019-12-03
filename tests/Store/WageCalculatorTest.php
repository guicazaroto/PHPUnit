<?php
namespace Tests\Store;

use App\Store\HR\Employee;
use App\Store\HR\JobRole;
use App\Store\HR\WageCalculator;
use PHPUnit\Framework\TestCase;

class WageCalculatorTest extends TestCase {
  public function testDeveloperWithLessThan3k () {
    $calculator = new WageCalculator();
    $developer = new Employee("Lucas", 1500.0, JobRole::DEVELOPER);
    $wage = $calculator->makeCalc($developer);

    $this->assertEquals(bcmul(1500.0, 0.9), $wage);
  }
  public function testDeveloperWithBiggerThen3k () {
    $calculator = new WageCalculator();
    $developer = new Employee("Jonas", 4000.0, JobRole::DEVELOPER);
    $wage = $calculator->makeCalc($developer);

    $this->assertEquals(bcmul(4000.0, 0.8), $wage);
  }
}
