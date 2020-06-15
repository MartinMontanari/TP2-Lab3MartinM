<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @param string $productName
     */
    public function setProductName(string $productName)
    {
        $this->productName = $productName;
    }

    /**
     * @param string $productDescription
     */
    public function setProductDescription(string $productDescription)
    {
        $this->productDescription = $productDescription;
    }

    /**
     * @param float $productPrice
     */
    public function setProductprice(float $productPrice)
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @param int $productStock
     */
    public function setProductStock(int $productStock)
    {
        $this->productStock = $productStock;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getProductName() : string
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
