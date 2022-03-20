<?php

namespace App\Controllers;

use App\Database;
use App\Redirect;
use App\View;

class ProductsAddController
{
    public function add(): View
    {
        return new View('/products-add');
    }

    public function store(): Redirect
    {
        Database::connection()
            ->insert('dvd' , [
                'id' => $_POST['id'],
                'sku' => $_POST['sku'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'size' => $_POST['size']
            ]);

        return new Redirect('/');
    }
}