<?php


namespace App\Application\Commands\ProductCommands;


class CreateProductCommand
{
    private string $productName;
    private string $productDescription;
    private float $productPrice;
    private int $productStock;

    public function __construct(string $productName, string $productDescription, float $productPrice, int $productStock)
    {
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->productPrice = $productPrice;
        $this->productStock = $productStock;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return string
     */
    public function getProductDescription() : string
    {
        return $this->productDescription;
    }

    /**
     * @return float
     */
    public function getProductPrice() : float
    {
        return $this->productPrice;
    }

    /**
     * @return int
     */
    public function getProductStock() : int
    {
        return $this->productStock;
    }
}