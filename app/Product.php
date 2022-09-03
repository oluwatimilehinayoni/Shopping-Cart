<?php

class Product
{
    private int $id;
    private string $product;
    private float $price;
    private int $availableQuantity;

    public function __construct($id, $product, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->product = $product;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }


    public function addToCart($cart, int $quantity)
    {
        return $cart->addProduct($this, $quantity);
    }


    /**
     * GETTERS @var id
     * @var product , @var price, @var availableQuantity
     * 
     */
    public function getId()
    {
        return $this->id;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }


    /**
     * SETTERS FOR @var id , @var price 
     *  @var availableQuantity, @var product
     */
    public function setQuantity($quantity)
    {
        $this->availableQuantity += $quantity;
    }
}
