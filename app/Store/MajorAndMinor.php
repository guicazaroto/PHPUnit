<?php
namespace App\Store;
use App\Store;

class MajorAndMinor {
  private $minor;
  private $major;
  
  public function search (ShoppingCart $shoppingCart) {
    foreach($shoppingCart->getProducts() as $product) {
       if (empty($this->minor) || 
          $product->getPrice() < $this->minor->getPrice()) {
          $this->minor = $product;
       } 

       if (empty($this->major) || 
          $product->getPrice() > $this->major->getPrice()) {
          $this->major = $product;
        } 

    }
  }
  public function getMinor() {
    return $this->minor;
  }
  public function getMajor() {
    return $this->major;
  }
}