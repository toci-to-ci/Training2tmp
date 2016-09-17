<?php
	
	require_once 'vendor/autoload.php';
	
	use Front\CrudGenerator;
	use Models\UsersModel;
	
	$crudGnerator = new CrudGenerator();
	
	echo $crudGnerator->GenerateForm(new UsersModel());
	
	$crudGnerator->SaveData();
	
	/*
	
		$model
			->IsWhere("x > y")
			->AndWhere("a > b")
			->OrWhere("x = c")))
			->SetParameters(array()); <---- ??????
		
		Result:
		
		'WHERE x > y AND a > b OR x = c';
	
	*/
	
	$model = new UsersModel();
	
	echo	$model
				->IsWhere("x > y")
				->AndWhere("a > b")
				->OrWhere("x = c")
				->GetWhereClause();
	
	
	
	
	