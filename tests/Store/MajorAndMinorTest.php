<?php
namespace Tests\Store;

use App\Store\Product;
use App\Store\ShoppingCart;
use App\Store\MajorAndMinor;
use PHPUnit\Framework\TestCase;

class MajorAndMinorTest extends TestCase {
  public function testDescOrderReturnMinorAndMinor () {
      $shoppingCart = new ShoppingCart();
    
      $shoppingCart->add(
        new Product('Refrigerator', 450.00)
      );
    
      $shoppingCart->add(
        new Product('Wardrove', 150.00)
      );

      $shoppingCart->add(
        new Product('Air Frier', 100.00)
      );

      $MajorMinor = new MajorAndMinor();
      $MajorMinor->search($shoppingCart);

      $this->assertEquals('Air Frier', $MajorMinor->getMinor()->getName());
      $this->assertEquals('Refrigerator', $MajorMinor->getMajor()->getName());

  }
  
}