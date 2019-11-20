<?php
namespace App\Store;

use App\Store\Product;
use ArrayObject;

class ShoppingCart {
  private $products;

  public function __construct()
  {
    $this->products = new ArrayObject();
  }
  public function add (Product $product) {
    $this->products->append($product);
    return $this;
  }
  public function getProducts () {
    return $this->products;
  }
}