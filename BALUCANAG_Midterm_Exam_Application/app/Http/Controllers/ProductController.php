<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ["title" => "Inception", "genre" => "Sci-Fi", "rating" => 8.8],
            ["title" => "The Dark Knight", "genre" => "Action", "rating" => 9.0],
            ["title" => "Interstellar", "genre" => "Sci-Fi", "rating" => 8.6],
        ];

        return view('products.index', compact('products'));
    }
}