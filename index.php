<?php

include_once 'vendor\autoload.php';

// include_once './app/cart.php';
// include_once './app/cartItem.php';
// include_once './app/Product.php';

$product1 =  new Product(1, 'iPhone 11', 300, 10);
$product2 = new Product(2, 'iPhone 12', 500, 10);
$product3 = new Product(3, 'samsung s21', 700, 10);


$cart = new Cart;
$cartItem1 = $cart->addProduct($product1, 1);
$cartItem2 = $product2->addToCart($cart, 1);

echo 'There are ' . $cart->getTotalQuantity() . ' products in carts'  . PHP_EOL;   // This must print 2
echo 'The total price is $' . $cart->getTotalPrice() . PHP_EOL;      // This must print 800

$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();

echo 'There are ' . $cart->getTotalQuantity() . ' products in carts' . PHP_EOL;  // Thius must print 4
echo 'The total price is $' . $cart->getTotalPrice() . PHP_EOL;     // Thius must print 1800

// $cart->removeProduct($product1);
$cartItem1->removeFromCart($cart);

echo 'There are ' . $cart->getTotalQuantity() . ' products in carts' . PHP_EOL;  // Thius must print 3
echo 'The total price is $' . $cart->getTotalPrice() . PHP_EOL;     // Thius must print 1500