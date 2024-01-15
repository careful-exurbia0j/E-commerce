<?php

// Customer.php
class Customer {
    private $customerId;
    private $name;
    private $email;

    public function __construct($customerId, $name, $email) {
        $this->customerId = $customerId;
        $this->name = $name;
        $this->email = $email;
    }

    // Getters and setters
    // ...
}
?>
