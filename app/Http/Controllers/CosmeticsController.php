<?php

namespace App\Http\Controllers;

use App\Models\Cosmetics;
use Illuminate\Http\Request;

class CosmeticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return Cosmetics::all();
    }
    
    public function store(Request $request) {
        return Cosmetics::create($request->all());
    }
    
    public function show(Cosmetics $product) {
        return $product;
    }
    
    public function update(Request $request, Cosmetics $product) {
        $product->update($request->all());
        return $product;
    }
    
    public function destroy(Cosmetics $product) {
        $product->delete();
        return response()->noContent();
    }
}
