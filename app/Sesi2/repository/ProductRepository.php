<?php

namespace App\Sesi2\repository;

use App\Sesi2\models\Product;

interface ProductRepository
{
    function save(Product $product): Product;
    function delete(Product $product): void;
    function findById(string $id): ?Product;
    function findAll(): array;
}
