<?php
namespace Tests\RomanNumber;
require './vendor/autoload.php';

use App\RomanNumber\RomanNumberConversor;
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

  public function testShouldUnderstandSymbolXX () {
    $roman = new RomanNumberConversor();
    $num = $roman->convert('XX');
    $this->assertEquals(20, $num);
  }

  public function testShouldUnderstandSymbolXXII () {
    $roman = new RomanNumberConversor();
    $num = $roman->convert('XXII');
    $this->assertEquals(22, $num);
  }

  public function testShouldUnderstandSymbolIX () {
    $roman = new RomanNumberConversor();
    $num = $roman->convert('IX');
    $this->assertEquals(9, $num);
  }

  public function testShouldUnderstandSymbolXXIV () {
    $roman = new RomanNumberConversor();
    $num = $roman->convert('XXIV');
    $this->assertEquals(24, $num);
  }
}