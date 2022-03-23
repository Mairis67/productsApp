<?php

namespace App\Models;

class Furniture extends Product
{
    private int $height;
    private int $width;
    private int $length;

    public function __construct(string $sku, string $name, int $price, int $id, int $height, int $width, int $length)
    {
        parent::__construct($sku, $name, $price, $id);
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}

//class Furniture
//{
//    private string $sku;
//    private string $name;
//    private int $price;
//    private int $height;
//    private int $width;
//    private int $length;
//    private int $id;
//
//    public function __construct(string $sku, string $name, int $price, int $height, int $width, int $length, int $id)
//    {
//        $this->sku = $sku;
//        $this->name = $name;
//        $this->price = $price;
//        $this->height = $height;
//        $this->width = $width;
//        $this->length = $length;
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
//    public function getHeight(): int
//    {
//        return $this->height;
//    }
//
//    public function getWidth(): int
//    {
//        return $this->width;
//    }
//
//    public function getLength(): int
//    {
//        return $this->length;
//    }
//
//    public function getId(): int
//    {
//        return $this->id;
//    }
//}