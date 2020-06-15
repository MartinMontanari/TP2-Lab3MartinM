<?php


namespace App\Infraestructure\Persistence\Eloquent\Repositories;

use App\Domain\Entities\Product;

class ProductRepository
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @param Product $product
     */
    public function saveNew(Product $product): void
    {
        $product->save();
    }

    /**
     * @return array
     */
    public function showAll() : array
    {
        return Product::all();
    }
}