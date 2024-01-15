<?php

// Product.php
class Product {
    private $productId;
    private $productName;
    private $price;

    public function __construct($productId, $productName, $price) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->price = $price;
    }

    // Getters and setters
    // ...
}
?>
