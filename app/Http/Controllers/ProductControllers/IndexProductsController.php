<?php


namespace App\Http\Controllers\ProductControllers;


use App\Infraestructure\Persistence\Eloquent\Repositories\ProductRepository;
use App\Services\ProductService;

class IndexProductsController
{
    private ProductRepository $repository;
    public function __construct
    (
        ProductRepository $productRepository
    )
    {
        $this->repository = $productRepository;
    }

    public function execute() {
        return view('products')->with(['products'=>  $this->repository->showAll() ]);
    }
}