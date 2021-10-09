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
    public $c;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
    public function insertCreditCard($c)
    {
        $this->c = $c;
    }
}

class Employee extends User
{
    public $level;

    public function __construct($name, $surname, $level)
    {
        parent::__construct($name, $surname);
        $this->level = $level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }
}

class Customer extends User
{

    public $discount = 0;

    public function __construct($name, $surname, $discount = 0)
    {
        parent::__construct($name, $surname);

        $this->discount = $discount;
    }


    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}

class CreditCard extends User
{
    public $c;

    public function __construct($name, $surname, $c)
    {
        parent::__construct($name, $surname);
        $this->c = $c;
    }
    public function insertCreditCard($c)
    {
        $user = parent::insertCreditCard($c);
        return $user;
    }
}


$c = new CreditCard('Antonio', 'Rossi', '123231231231');

var_dump($c);
