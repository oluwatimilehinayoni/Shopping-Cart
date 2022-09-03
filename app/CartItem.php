<?php

class CartItem
{
    private $product;
    private int $quantity;

    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getId()
    {
        return $this->getProduct()->getId();
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function increaseQuantity($amount = 1)
    {
        if ($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity()) {
            throw new Exception($message = "You can't add more than " . $this->getProduct()->getAvailableQuantity());
        }
        return $this->quantity += $amount;
    }

    public function decreaseQuantity($amount = 1)
    {
        if ($this->getQuantity() - $amount < 1) {
            throw new Exception("Product can not be less than 1");
        }
        return $this->quantity -= $amount;
    }

    public function removeFromCart($cart)
    {
        return $cart->removeProduct($this);
    }
}
