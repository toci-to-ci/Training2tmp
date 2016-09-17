<?php

	namespace ORM\DbModel;
	
	use ORM\Interfaces\IDbField;
	use ORM\DbQueries\Where\DbWhere;

	class DbField implements IDbField // kolumna tabelki w bazie danych
	{
		protected $fieldName;
		protected $fieldValue;
		protected $isAutomatic; // add
		
		public function __construct($fieldName, $isAutomatic = false) // add
		{
			$this->fieldName = $fieldName;
			$this->isAutomatic = $isAutomatic; // add
		}
		
		public function Set($fieldName, $fieldValue) // add
		{
			$this->fieldName = $fieldName;
			$this->fieldValue = $fieldValue;
		}
		
		public function GetType() // string/text
		{
			return gettype($this->fieldValue);
		}
		
		public function GetValue() // beatka
		{
			return $this->fieldValue;
		}
		
		public function GetFieldName()
		{
			return $this->fieldName;
		}
		
		public function HasValue()
		{
			return !is_null($this->fieldValue);
		}
		
		public function IsAutomatic()
		{
			return $this->isAutomatic; // add
		}
	}