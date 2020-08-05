<?php

require __DIR__ . "/vendor/autoload.php";

class BasketItem
{
    private $item;
    private $cost;

    public function __construct($item, $cost)
    {
        $this->item = $item;
        $this->cost = $cost;
    }

    public function getItem(){
        return $this->item;
    }

    public function getCost(){
        return $this->cost;
    }


}

class Basket
{
    private $basket = [];
    private $total = 0;
    private $items = [];

    public function add($basket)
    {
        $this->basket[] = $basket;
    }

    public function total()
    {
        foreach($this->basket as $basket)
        {
            $total += $basket->getCost();

        }

        return "£" . number_format($total,2);
    
    }

    public function items()
    {
        foreach ($this->basket as $basket)
        {
            $items[] = $basket->getItem();
        }

        return $items;
    }
}




$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

dump($basket->total()); // £6.00
dump($basket->items()); // ["coffee","tea"]