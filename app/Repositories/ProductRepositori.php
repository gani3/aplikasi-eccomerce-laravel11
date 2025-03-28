<?php

namespace App\Repositories;

use App\Models\Products;
use App\Repositories\Contracts\ProductRepositoriInterface;

class ProductRepositori implements ProductRepositoriInterface
{
    public function getPopularProduct($limit = 5)
    {
        return Products::where('is_popular',true)->take($limit)->get();
    }
    public function getAllNewProduct()
    {
        return Products::latest()->get();
    }
    public function find($id)
    {
        return Products::find($id);
    }
    public function getPrice($prodId)
    {
        $prod = $this->find($prodId);
        return $prod ? $prod->price : 0;
    }
}