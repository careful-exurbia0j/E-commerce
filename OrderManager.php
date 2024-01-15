<?php

// OrderManager.php
class OrderManager {
    private $orders = [];

    public function placeOrder(Customer $customer, Product $product) {
        $order = [
            'customer' => $customer,
            'product' => $product,
            'orderDate' => date('Y-m-d H:i:s'),
        ];

        $this->orders[] = $order;
        echo "Order placed successfully!\n";
    }

    public function displayOrders() {
        echo "Order History:\n";
        foreach ($this->orders as $order) {
            echo "Customer: {$order['customer']->getName()}, Product: {$order['product']->getProductName()}, Date: {$order['orderDate']}\n";
        }
    }
}
?>
