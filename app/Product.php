<?php

namespace App;

class Product
{
	public function __construct($name,$price)
	{
		$this->name=$name;
		$this->price=$price;
	} 

	public function name()
	{
		return $this->name;
	}

	public function price()
	{
		return $this->price;
	}

	public function setDiscount($dicount)
	{
		$this->price *= $dicount/10;
	}
}