<?php

// CREDIT CARD
trait CreditCard
{
    public $c;

    public function insertCreditCard($c)
    {
        $this->c = $c;
    }
}


// PRODUCT
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


// USER
class User
{
    use CreditCard;

    public $name;
    public $surname;
    public $age;


    public function __construct($name, $surname, $c)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->c = $c;
    }
}


// EMPLOYEE EXTENDS USER
class Employee extends User
{
    use CreditCard;

    public $level;

    public function __construct($name, $surname, $level, $c)
    {
        parent::__construct($name, $surname, $c);
        $this->level = $level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }
}


// CUSTOMER EXTENDS USER
class Customer extends User
{
    use CreditCard;

    public $discount = 0;

    public function __construct($name, $surname, $c, $discount = 0)
    {
        parent::__construct($name, $surname, $c);

        $this->discount = $discount;
    }


    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}
