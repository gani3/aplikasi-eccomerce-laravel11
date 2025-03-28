<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Services\FrontService;
use Illuminate\Http\Request;

class FrontControllers extends Controller
{

    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        $data = $this->frontService->getFrontPage();
        return view('front.index',$data);
    }

    public function details(Products $prod){
        // pengambilan data menggunakan method model binding
        return view('front.details',compact('prod'));
    }

    public function category(Categories $cat){
        return view('front.category',compact('cat'));
    }
}
