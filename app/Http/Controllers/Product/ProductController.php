<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductPostRequest;
use App\Http\Requests\Product\ProductPutRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->getAllProducts();

        return response()->json([
            'success' => true,
            'message' => 'Products retrieved successfully',
            'data' => [
                'products' => $products,
            ],
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductPostRequest $request):JsonResponse
    {
        $validatedData = $request->validated();

        $product = $this->productService->createProduct($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Product created successfully',
            'data' => [
                'product' => $product,
            ],
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = $this->productService->getProductById($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Product retrieved successfully',
            'data' => [
                'product' => $product,
            ],
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductPutRequest $request, Product $product): JsonResponse
    {
        $validatedData = $request->validated();

        $updatedProduct =  $this->productService->updateProduct($product, $validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Product updated successfully',
            'data' => [
                'product' => $updatedProduct,
            ],
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = $this->productService->deleteProduct($id);

        if (!$deleted) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully',
        ], 200);
    }
}
