<?php
	/*
	 * ITC216 - Tanya Sweeney - names.php - part of lab 11, chore list - submited 8/16/2011
	 */
	
	class Person
	{
		/* Attributes */
		public $firstName;
		public $lastName;
		public $choreArray;
		
		/*
		 * Person constructor
		 * TODO - Ask Portia whether $choreArray goes within parens (not so in demo file)
		 */
		public function __construct($firstName,$lastName)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->choreArray = array();
		}
		
		public function getName()
		{
			return $this->firstName . " " . $this->lastName;
		}
		
		public function addChore($chore)
		{
			array_push ($this->choreArray, $chore);
		}
		
		public function getChores()
		{
			if(sizeof($this->choreArray)<0) return false;
			
			$result = "";
			
			foreach($this->choreArray as $chore)
			{
				$result .= $chore . "<br />";
			}
			return $result;
		}
	}
	
	
	

?>