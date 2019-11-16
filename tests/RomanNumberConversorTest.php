<?php
namespace Tests;
require './vendor/autoload.php';

use App\RomanNumberConversor;
use PHPUnit\Framework\TestCase;

class RomanNumberConversorTest extends TestCase {
  
  public function testShouldUnderstandSymbolI () {
    $roman = new RomanNumberConversor();
    $num = $roman->convert('I');
    $this->assertEquals(1, $num);
  }

  public function testShouldUnderstandSymbolV () {
    $roman = new RomanNumberConversor();
    $num = $roman->convert('V');
    $this->assertEquals(5, $num);
  }

  public function testShouldUnderstandSymbolRepeated () {
    $roman = new RomanNumberConversor();
    $num = $roman->convert('XX');
    $this->assertEquals(20, $num);
  }
}