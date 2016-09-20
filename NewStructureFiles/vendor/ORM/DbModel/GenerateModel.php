<?php

	namespace ORM\DbModel;
	
	use ORM\DbModel\DbField;
	
	class GenerateModel
	{
		protected $activeFields;
		protected $filds = array();
		
		public function __construct($activeFields)
		{
			$this->activeFields = $activeFields;
		}
		
		protected function GnerateConst()
        {
          	foreach ($this->activeFields as $key => $value)
           	{
           		$this->filds[$key] = new DbField($key); // czy jest automatic, dodatkowa metoda  
           	}
        }
		
        public function GetFilds()
        {
        	$this->GnerateConst();
        	
        	return $this->filds;
        }
	}