<?php

	namespace ORM\DbQueries\Insert;

	class PostgreSqlInsert extends DbInsert
	{
		public function Insert($model)
		{
			$fields = $model->GetFields();
			//insert into users (name, login, password) values ('beatka', 'becioszek', 'haslo');
			$names = $this->GetNames($model); // 
			$valuesInSurroundings = $this->GetValues($model);
			
			$insert = $this->insertCommand . $model->GetTableName() . 
			' (' . implode(', ', $names) . ') values (' .implode(', ', $valuesInSurroundings). ');';
			//var_dump($insert);
			
			return $insert;
		}
	}