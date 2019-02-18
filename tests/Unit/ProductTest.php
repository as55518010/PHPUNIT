<?php

namespace Tests\Unit;

use App\Product;

class ProductTest extends \PHPUnit\Framework\TestCase
{

	/** @test */
    public function a_product_has_a_name()
    {
    	$product = new Product('iPhone 7',6000);

        $this->assertEquals('iPhone 7',$product->name());
    }

    /** @test */
    public function a_product_has_a_price()
    {
    	$product = new Product('Macbook',10000);

        $this->assertEquals(10000,$product->price());
    }

    /** @test */
    public function a_product_can_be_sold_with_discount()
    {
    	$product = new Product('Macbook',10000);

        $product->setDiscount(8);

        $this->assertEquals(8000,$product->price());
    }
}
