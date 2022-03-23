<?php

namespace App\Models;

class Book extends Product
{

    private int $weight;

    public function __construct(string $sku, string $name, int $price, int $id, int $weight)
    {
        parent::__construct($sku, $name, $price, $id);
        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}

//class Book extends Product
//{
//    private string $sku;
//    private string $name;
//    private int $price;
//    private int $weight;
//    private int $id;
//
//    public function __construct(string $sku, string $name, int $price, int $weight, int $id)
//    {
//        $this->sku = $sku;
//        $this->name = $name;
//        $this->price = $price;
//        $this->weight = $weight;
//        $this->id = $id;
//    }
//
//    public function getSku(): string
//    {
//        return $this->sku;
//    }
//
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//    public function getPrice(): int
//    {
//        return $this->price;
//    }
//
//    public function getWeight(): int
//    {
//        return $this->weight;
//    }
//
//    public function getId(): int
//    {
//        return $this->id;
//    }
//}