<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    // This class will handle product-related database operations.
    // It can include methods for creating, updating, deleting, and retrieving products.
    
    public function getAllProducts()
    {
        return Product::all();
    }

    public function findProductById($id)
    {
        return Product::findOrFail($id);
    }

    public function createProduct(array $data)
    {
        return Product::create($data);
    }

    public function updateProduct(Product $product, array $data)
    {
        $product->update($data);
        return $product;
    }

    public function deleteProduct($id)
    {
        return Product::destroy($id);
    }
}