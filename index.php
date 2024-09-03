<?php
// Product Class
class Product {
    //Adding properties
    private $title;
    private $image;
    private $price;

    // Constructor
    public function __construct($title, $image, $price) {
        $this->title = $title;
        $this->image = (string)"assets\\". $image;
        $this->price = $price;
    }

    // Getter methods
    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Store Class
class Store {
    //Adding properties
    private $name;
    private $description;
    private $image;
    private $products = [];

    // Constructor
    public function __construct($name, $description, $image) {
        $this->name = $name;
        $this->description = $description;
        $this->image = (string)"assets\\".$image;
    }

    // Add product to store
    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }

    public function getProducts() {
        return $this->products;
    }
}

// Create Store object
$store = new Store("My Tech Store", "Your one-stop shop for all tech products.", "store_image.png");

// Create Product objects
$product1 = new Product("Laptop", "laptop.jpg", 1500);
$product2 = new Product("Smartphone", "smartphone.jpg", 800);
$product3 = new Product("Headphones", "headphone.jpg", 200);

// Add products to store
$store->addProduct($product1);
$store->addProduct($product2);
$store->addProduct($product3);

// Pass store object to the front-end
include 'home.php';
