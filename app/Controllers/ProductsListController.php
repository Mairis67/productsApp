<?php

namespace App\Controllers;

use App\Database;
use App\Models\Book;
use App\Models\Dvd;
use App\Models\Furniture;
use App\View;

class ProductsListController
{
    public function list(): View
    {
        $dvdsQuery = Database::connection()
            ->createQueryBuilder()
            ->select('*')
            ->from('dvd')
            ->executeQuery()
            ->fetchAllAssociative();

        $dvds = [];

        foreach ($dvdsQuery as $dvdData) {
            $dvds[] = new Dvd(
                $dvdData['sku'],
                $dvdData['name'],
                $dvdData['price'],
                $dvdData['size'],
                $dvdData['id']
            );
        }

        $booksQuery = Database::connection()
            ->createQueryBuilder()
            ->select('*')
            ->from('books')
            ->executeQuery()
            ->fetchAllAssociative();

        $books = [];

        foreach ($booksQuery as $bookData) {
            $books[] = new Book(
                $bookData['sku'],
                $bookData['name'],
                $bookData['price'],
                $bookData['weight'],
                $bookData['id']
            );
        }

        $furnituresQuery = Database::connection()
            ->createQueryBuilder()
            ->select('*')
            ->from('furniture')
            ->executeQuery()
            ->fetchAllAssociative();

        $furniture = [];

        foreach ($furnituresQuery as $furnitureData) {
            $furniture[] = new Furniture(
                $furnitureData['sku'],
                $furnitureData['name'],
                $furnitureData['price'],
                $furnitureData['height'],
                $furnitureData['width'],
                $furnitureData['length'],
                $furnitureData['id']
            );
        }

        return new View('/products-list', [
            'dvds' => $dvds,
            'books' => $books,
            'furnitures' => $furniture
        ]);
    }
}