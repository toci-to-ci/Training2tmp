<?php

	namespace ORM\Interfaces; 

	interface IDbModel
	{
		/**
		 * returns array of idbfield
		 */
		public function GetFields();
	
		public function GetTableName();
	
		public function Set($fieldName, $fieldValue);
	
		public function HasField($fieldName);
	}