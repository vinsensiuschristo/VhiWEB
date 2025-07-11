<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorPostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function store(VendorPostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        
        $vendor = Vendor::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'website' => $validatedData['website'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Vendor created successfully',
            'data' => [
                'vendor' => $vendor,
            ],
        ], 201);
    }
}
