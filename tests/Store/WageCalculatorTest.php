<?php
namespace Tests\Store;

use App\Store\HR\Employee;
use App\Store\HR\JobRole;
use App\Store\HR\WageCalculator;
use PHPUnit\Framework\TestCase;

class WageCalculatorTest extends TestCase {
  public function testDeveloperWithWageLessThan3k () {
    $calculator = new WageCalculator();
    $developer = new Employee("Lucas", 1500.0, JobRole::DEVELOPER);
    $wage = $calculator->makeCalc($developer);

    $this->assertEquals(bcmul(1500.0, 0.9), $wage);
  }
  public function testDeveloperWithWageBiggerThen3k () {
    $calculator = new WageCalculator();
    $developer = new Employee("Jonas", 4000.0, JobRole::DEVELOPER);
    $wage = $calculator->makeCalc($developer);

    $this->assertEquals(bcmul(4000.0, 0.8), $wage);
  }
  public function testDBAWithWageLessThan2_5k() {
    $calculator = new WageCalculator();
    $dba = new Employee("Miguel", 2300.0, JobRole::DBA);
    $wage = $calculator->makeCalc($dba);

    $this->assertEquals(bcmul(2300, 0.85), $wage);
  }
  public function testDBAWithWageBiggerThan2_5k() {
    $calculator = new WageCalculator();
    $dba = new Employee("Fernando", 2800.0, JobRole::DBA);
    $wage = $calculator->makeCalc($dba);

    $this->assertEquals(bcmul(2800, 0.75), $wage);
  }
}
