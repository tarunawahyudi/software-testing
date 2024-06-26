<?php

namespace App\Sesi2\services;

use App\Sesi2\models\Product;
use App\Sesi2\repository\ProductRepository;

class ProductService
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function register(Product $product): Product
    {
        if ($this->productRepository->findById($product->getId()) != null) {
            throw new \Exception("product already exist");
        }

        return $this->productRepository->save($product);
    }

    public function delete(string $id): void
    {
        $product = $this->productRepository->findById($id);
        if ($product == null) {
            throw new \Exception("product not found");
        }

        $this->productRepository->delete($product);
    }
}
