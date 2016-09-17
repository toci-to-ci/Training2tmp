<?php

	namespace ORM\Interfaces;

	interface IDbField
	{
		public function Set($fieldName, $fieldValue);
	
		public function GetType(); // string/text
	
		public function GetValue(); // beatka
	
		public function GetFieldName(); // name
	
		public function HasValue();
	
		public function IsAutomatic();
	}