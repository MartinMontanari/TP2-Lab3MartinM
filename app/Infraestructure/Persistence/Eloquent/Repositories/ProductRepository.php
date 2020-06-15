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
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function showAll()
    {
        return Product::all();
    }
}