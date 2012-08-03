<?php
	/*
	 * This is our car class. It's basically a blueprint
	 * that lists properties of every car.
	 */
	class Car
	{
		//attributes of the car class
		public $model;
		public $make;
		public $color;
		public $year;
		public $numDoors;
		public $features;
		
		//constructor is called when you first create your object.
		//Constructor must exist in order for short-form syntax to work.
		//Short form allows you to pass parameters in via the parens.
		public function __construct($model, $make, $color, $year, $numDoors)
		{
			$this->model = $model;
			$this->make = $make;
			$this->color = $color;
			$this->year = $year;
			$this->numDoors = $numDoors;
			$this->features = array();
		}
		
		public function getDescription()
		{
			return  $this->year . " " . $this->color . " " . $this->numDoors
			 . "-door " . $this->make . " " . $this->model . "<br />" .$this->getFeatures() . "<br />";
		}
		
		public function paintCar($color)
		{
			$this->color = $color;
		}
		
		public function addFeature($feature)
		{
			array_push($this->features, $feature);
		}
		
		public function getFeatures()
		{
			//stop if no features exist for this car.
			if(sizeof($this->features)<=0) return false;
			
			//Start list with the phrase "Features: "
			$result = "Features: ";
			
			foreach($this->features as $feature)//add each feature, followed by ", "
			{
				$result .= $feature . ", ";
			}
			
			return $result;//output list
		}
	}
	
	
?>