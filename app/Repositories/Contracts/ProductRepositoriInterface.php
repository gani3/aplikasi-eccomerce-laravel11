<?php

namespace App\Repositories\Contracts;

interface ProductRepositoriInterface
{
    
    public function getPopularProduct($limit);
    public function getAllNewProduct();
    public function find($id);
    public function getPrice($prodId);
}