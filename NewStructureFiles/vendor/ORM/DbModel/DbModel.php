<?php

	namespace ORM\DbModel;
	
	use ORM\Interfaces\IDbModel;
	use ORM\DbQueries\Where\DbWhere;

	class DbModel implements IDbModel // tabelka w bazie danych
	{
		protected $tableName;
		protected $dbWhere; // add
		protected $fields = array();
		
		public function GetFields()
		{
			return $this->fields;
		}
		
		public function GetTableName()
		{
			return $this->tableName;
		}
		
		public function Set($fieldName, $fieldValue)
		{
			$this->fields[$fieldName]->Set($fieldName, $fieldValue);
		}
		
		public function HasField($fieldName)
		{
			return isset($this->fields[$fieldName]);
		}
		
		public function IsWhere($clause) // add  
		{
			$this->dbWhere = new DbWhere($clause);
			
			return $this->dbWhere;
		}
	}