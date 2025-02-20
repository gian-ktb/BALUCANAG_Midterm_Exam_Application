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
            ["title" => "Tenet", "genre" => "Sci-Fi", "rating" => 7.3],
            ["title" => "Dunkirk", "genre" => "War", "rating" => 7.9],
            ["title" => "The Prestige", "genre" => "Drama", "rating" => 8.5],
            ["title" => "Batman Begins", "genre" => "Action", "rating" => 8.2],
            ["title" => "Oppenheimer", "genre" => "Biography", "rating" => 8.4],
            ["title" => "Memento", "genre" => "Thriller", "rating" => 8.4],
            ["title" => "Insomnia", "genre" => "Thriller", "rating" => 7.2]
        ];

        return view('products.index', compact('products'));
    }
}