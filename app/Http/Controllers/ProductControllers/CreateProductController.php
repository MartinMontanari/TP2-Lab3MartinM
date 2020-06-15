<?php

namespace App\Http\Controllers\ProductControllers;

use App\Exceptions\InvalidBodyException;
use App\Http\Adapters\CreateProductAdapter;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    private CreateProductAdapter $adapter;
    private ProductService $service;

    public function __construct
    (
        CreateProductAdapter $createProductAdapter,
        ProductService $productService
    )
    {
        $this->adapter = $createProductAdapter;
        $this->service = $productService;
    }


    public function execute(Request $request){

        try{
            $command = $this->adapter->adapt($request);
            $this->service->CreateProduct($command);
        }catch (InvalidBodyException $errors){
            return redirect()->back()->withErrors($errors->getMessages());
        }

    }
}
