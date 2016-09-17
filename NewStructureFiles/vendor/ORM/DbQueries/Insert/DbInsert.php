<?php

	namespace ORM\DbQueries\Insert;
	
	use ORM\Interfaces\ISqlInsert;
	
	abstract class DbInsert implements ISqlInsert
	{
		protected $insertCommand = 'insert into ';
	
		protected $surroundings = array(
				'string' => "'",
				'int' => '',
		);
	
		public abstract function Insert($model);
	
		protected function GetNames($model)
		{
			$fields = $model->GetFields();
			$names = array();
				
			foreach ($fields as $fieldKey => $fieldValue)
			{
				if ($fieldValue->HasValue() && strlen($fieldValue->GetValue()) > 0) // add strlen($fieldValue->GetValue()) > 0
				{
					$names[] = $fieldValue->GetFieldName();
				}
			}
				
			return $names;
		}
	
		protected function GetValues($model)
		{
			$fields = $model->GetFields();
			$values = array();
				
			foreach ($fields as $fieldKey => $fieldValue)
			{
				if ($fieldValue->HasValue() && strlen($fieldValue->GetValue()) > 0) // add strlen($fieldValue->GetValue()) > 0
				{
					//var_dump($fieldValue->GetType());
					$values[] = $this->surroundings[$fieldValue->GetType()] . $fieldValue->GetValue() . $this->surroundings[$fieldValue->GetType()];
				}
			}
				
			return $values;
		}
	}