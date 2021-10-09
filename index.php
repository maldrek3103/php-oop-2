<?php

// CREDIT CARD
trait CreditCard
{
    public $creditcard;

    public function insertCreditCard($creditcard)
    {
        $this->c = $creditcard;
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


    public $name;
    public $surname;
    public $age;


    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}


// EMPLOYEE EXTENDS USER
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


// CUSTOMER EXTENDS USER
class Customer extends User
{
    use CreditCard;

    public $discount = 0;
    public $creditcard;

    public function __construct($name, $surname, $creditcard, $discount = 0)
    {
        parent::__construct($name, $surname);

        $this->discount = $discount;
        $this->creditcard = $creditcard;
    }

    public function insertCreditCard($creditcard)
    {
        $this->creditcard = $creditcard;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}


$customer = new Customer('Federe', 'Fora', '121412434123');
$customer->insertCreditCard('2435235423');
var_dump($customer);
