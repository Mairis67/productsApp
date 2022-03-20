<?php

namespace App\Controllers;

use App\Database;
use App\Models\Dvd;
use App\View;

class ProductsListController
{
    public function list(): View
    {
        $productsQuery = Database::connection()
            ->createQueryBuilder()
            ->select('*')
            ->from('dvd')
            ->executeQuery()
            ->fetchAllAssociative();

        $products = [];

        foreach ($productsQuery as $productData) {
            $products[] = new Dvd(
                $productData['sku'],
                $productData['name'],
                $productData['price'],
                $productData['size'],
                $productData['id'],
            );
        }

        return new View('/products-list', [
            'dvds' => $products
        ]);
    }
}