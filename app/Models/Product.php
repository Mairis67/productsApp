<?php

namespace App\Models;

abstract class Product
{
    protected string $sku;
    protected string $name;
    protected int $price;
    protected int $id;

    public function __construct(string $sku, string $name, int $price, int $id)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
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

    public function getId(): int
    {
        return $this->id;
    }
}

