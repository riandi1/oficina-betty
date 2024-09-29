<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        ['id' => 1, 'name' => "Producto 1", 'price' => 10.99, 'category' => "Categoría A", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 2, 'name' => "Producto 2", 'price' => 15.99, 'category' => "Categoría B", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 3, 'name' => "Producto 3", 'price' => 20.99, 'category' => "Categoría A", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 4, 'name' => "Producto 4", 'price' => 25.99, 'category' => "Categoría C", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 1, 'name' => "Producto 1", 'price' => 10.99, 'category' => "Categoría A", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 2, 'name' => "Producto 2", 'price' => 15.99, 'category' => "Categoría B", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 3, 'name' => "Producto 3", 'price' => 20.99, 'category' => "Categoría A", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 4, 'name' => "Producto 4", 'price' => 25.99, 'category' => "Categoría C", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 1, 'name' => "Producto 1", 'price' => 10.99, 'category' => "Categoría A", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 2, 'name' => "Producto 2", 'price' => 15.99, 'category' => "Categoría B", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 3, 'name' => "Producto 3", 'price' => 20.99, 'category' => "Categoría A", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
        ['id' => 4, 'name' => "Producto 4", 'price' => 25.99, 'category' => "Categoría C", 'image' => "BOM-BOM-BUM-1-removebg-preview.png"],
    ];
    return view('welcome',compact('products'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
