<?php


namespace App\Services;


use App\Application\Commands\ProductCommands\CreateProductCommand;
use App\Domain\Entities\Product;
use App\Infraestructure\Persistence\Eloquent\Repositories\ProductRepository;


class ProductService
{
    private ProductRepository $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function CreateProduct(CreateProductCommand $command)
    {
        $product = new Product();
        $product->setProductName($command->getProductName());
        $product->setProductDescription($command->getProductDescription());
        $product->setProductprice($command->getProductPrice());
        $product->setProductStock($command->getProductStock());

        $this->productRepository->saveNew($product);

    }
}