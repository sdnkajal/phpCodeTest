<?php

class Product {
    private int $id;
    private string $name;
    private float $price;

    public function __construct(
        int $id,
        string $name,
        float $price
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice(): string {
        return '$' . number_format($this->price, 2);
    }

    public function showDetails(): void {
        echo "Product Details:\n";
        echo "- ID: " . $this->id . "\n";
        echo "- Name: " . $this->name . "\n";
        echo "- Price: " . $this->getFormattedPrice() . "\n";
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();