<?php

class Product
{
    public $name;
    public $description;
    public $price;
    public $quantity;
    public $category;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

class User
{
    public $name;
    public $surname;
    public $age;
    public $email;



    public function __construct($name, $surname, $email)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }
}

class Employee extends User
{
    public $level;

    public function setLevel($level)
    {
        $this->level = $level;
    }
}



$product1 = new Product('Spaghetti', '1.50', '10');

$customer1 = new User('Antonio', 'Rossi', 'antonio.rossi@neri.net');

var_dump($product1);
