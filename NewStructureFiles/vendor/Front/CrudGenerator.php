<?php

	namespace Front;
	
	use ORM\DbHandle\MySql\MySqlDbHandle;
	use ORM\DbQueries\Insert\PostgreSqlInsert;
	use ORM\DbModel\DbList;

	class CrudGenerator
	{
		const MODEL_TYPE = 'ModelType';
		
		public function GenerateForm($model)
		{
			$fields = $model->GetFields();
			
			//var_dump($fields);
			
			$result = '<form method="POST" action="'.$_SERVER['PHP_SELF'].'"><div>';
			$result .= Controls::AddHidden(self::MODEL_TYPE, get_class($model));
			
			foreach ($fields as $fieldKey => $field)
			{
				if (!$field->IsAutomatic())
				{
					$result .= '<div>'.Controls::AddTextBox($field->GetFieldName(), $field->GetFieldName(), $field->GetValue()).'</div>';
				}
			}
			
			$result .= '</div>';
			$result .= Controls::AddSubmitButton('zatwierdü', 'confirm');
			$result .= '</form>';
			
			return $result;
		}
		
		public function SaveData()
		{
			if ($_SERVER['REQUEST_METHOD'] == "POST")
			{
				//$model = new $_POST[self::MODEL_TYPE];
				
				//var_dump($model);
				
				$dbList = new DbList("db_toci", "users");
				
				$model = $dbList->GetModel();
				
				
				
				foreach ($_POST as $key => $value)
				{
					if ($model->HasField($key))
					{
						$model->Set($key, $value);
					}
				}
				
				$insert = new PostgreSqlInsert();
	
				//$handle = new PostgreSqlDbHandle();
				$handle = new MySqlDbHandle();
				
				$insertCommand = $insert->Insert($model);
				
				//var_dump($insertCommand);
				
				$handle->Connect();
				
				$handle->RunQuery($insertCommand);
			}
		}
	}