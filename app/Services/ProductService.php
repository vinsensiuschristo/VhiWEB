<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct(array $data)
    {
        return $this->productRepository->createProduct($data);
    }

    public function getAllProducts()
    {
        return $this->productRepository->getAllProducts();
    }

    public function getProductById($id)
    {
        return $this->productRepository->findProductById($id);
    }

    public function updateProduct(Product $product, array $data)
    {
        return $this->productRepository->updateProduct($product, $data);
    }

    public function deleteProduct($id)
    {
        return $this->productRepository->deleteProduct($id);
    }
}