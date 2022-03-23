<?php

namespace App\Models;

class Dvd extends Product
{
    private int $size;

    public function __construct(string $sku, string $name, int $price, int $id, int $size)
    {
        parent::__construct($sku, $name, $price, $id);
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}

//class Dvd
//{
//    private string $sku;
//    private string $name;
//    private int $price;
//    private int $id;
//    private int $size;
//
//    public function __construct(string $sku, string $name, int $price, int $id, int $size)
//    {
//        $this->sku = $sku;
//        $this->name = $name;
//        $this->price = $price;
//        $this->size = $size;
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
//    public function getId(): int
//    {
//        return $this->id;
//    }
//
//    public function getSize(): int
//    {
//        return $this->size;
//    }
//}