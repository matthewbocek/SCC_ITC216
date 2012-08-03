<?php

	/*
	 * ITC216, Tanya Sweeney
	 * Lab 13 - product.php - the product class
	 * Submitted 8/18/2011
	 */ 

class Product
{
	public $title;			
	public $description;
	public $price;
	public $src;
	
	public function __construct($title, $description, $price, $src)
	{
		$this->title = $title;
		$this->description = $description;
		$this->price = $price;
		$this->src = $src;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function getSrc()
	{
		return $this->src;
	}
}//end class Product

?>