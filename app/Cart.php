<?php

class Cart
{
    private array $items = [];
    private string $product;
    private int $quantity;

    public function addProduct($product, $quantity)
    {

        $cartItem = $this->findCartItem($product->getId());
        //Check to see if Product already exist in $carItem
        if (!$cartItem) {
            $cartItem = new CartItem($product, 0);
            $this->items[$product->getId()] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);

        return $cartItem;
    }

    private function findCartItem(int $productId)
    {
        // foreach ($this->items as $item) {
        //     if ($item->getProduct()->getId() === $productId) {
        //         return $item->getProduct();
        //     }
        // }
        // return null;

        return $this->items[$productId] ?? null;
    }

    public function removeProduct($product)
    {
        foreach ($this->items as $index => $item) {
            if ($product->getId() == $item->getProduct()->getId()) {
                unset($this->items[$index]);
            }
        }
        // return $product->getProduct() . ' removed successfully!' . PHP_EOL;
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    public function getTotalPrice()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity() * $item->getProduct()->getPrice();
        }
        return $sum;
    }
}
