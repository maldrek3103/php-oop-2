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

    public function __construct($name, $surname, $email, $level)
    {
        parent::__construct($name, $surname, $email);
        $this->level = $level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }
}

class Customer extends User
{
    public $c;
    public $discount = 0;

    public function __construct($name, $surname, $email, $c, $discount = 0)
    {
        parent::__construct($name, $surname, $email);
        $this->c = $c;
        $this->discount = $discount;
    }

    public function setCredit($c)
    {
        $this->c = $c;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}


$product1 = new Product('Spaghetti', '1.50', '10');

$customer1 = new User('Antonio', 'Rossi', 'antonio.rossi@neri.net');

var_dump($product1);
