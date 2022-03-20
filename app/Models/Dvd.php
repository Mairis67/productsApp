<?php

namespace App\Models;

class Dvd
{
    private string $sku;
    private string $name;
    private int $price;
    private int $size;
    private int $id;

    public function __construct(string $sku, string $name, int $price, int $size, int $id)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->id = $id;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getId(): int
    {
        return $this->id;
    }

}