<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     // Method to show all products
     public function index()
     {
         $products = Product::all();
         return view('products.index', compact('products'));
     }
 
     // Method to show a single product by ID
    //  public function show($id)
    //  {
    //      $product = Product::find($id);
    //      return view('products.show', compact('product'));
    //  }
}
