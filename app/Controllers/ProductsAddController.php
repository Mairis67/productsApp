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

        if($_POST['size']) {
            Database::connection()
                ->insert('dvd', [
//                    'id' => $_POST['id'],
                    'sku' => $_POST['sku'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'size' => $_POST['size']
                ]);
        } elseif ($_POST['weight']) {
            Database::connection()
                ->insert('books', [
//                    'id' => $_POST['id'],
                    'sku' => $_POST['sku'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'weight' => $_POST['weight']
                ]);
        } elseif($_POST['height'] && $_POST['width'] && $_POST['length']) {
            Database::connection()
                ->insert('furniture', [
//                    'id' => $_POST['id'],
                    'sku' => $_POST['sku'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'height' => $_POST['height'],
                    'width' => $_POST['width'],
                    'length' => $_POST['length'],
                ]);
        }

        return new Redirect('/');
    }
}