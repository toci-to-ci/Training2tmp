<?php
	
	require_once 'vendor/autoload.php';
	
	use Front\CrudGenerator;
	use ORM\DbModel\DbList;
	//use Models\UsersModel;
	
	
	$crudGnerator = new CrudGenerator();
	
	$dbList = new DbList("db_toci", "users");
	
	
	echo $crudGnerator->GenerateForm($dbList->GetModel());
	
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
	/*
	$model = new UsersModel();
	
	echo	$model
				->IsWhere("x > y")
				->AndWhere("a > b")
				->OrWhere("x = c")
				->GetWhereClause();
	
				
	$json = json_decode('{

  "dbName" :
  {
    "db_toci" : {
      "users" : {
        "id" : "hidden",
        "creationdate" : "hidden",
        "name" : "",
        "login" : "",
        "poassword" : "protected"
      },

      "actions" : {
        "act_id" : "hidden",
        "act_CrDate" : "hidden",
        "act_rodzaj" : "",
        "act_opis" : "",
        "act_uwagi" : "protected",
        "act_lastUpdate" : "protected"
      },

      "zadania" : {
        "zad_id" : "hidden",
        "zad_CreationDate" : "hidden",
        "zad_rodzaj" : "",
        "zad_opis" : "",
        "zad_uwagi" : "protected"
      }

    },


    "db_aktywa" : {
      "users" : {
        "id" : "hidden",
        "creationdate" : "hidden",
        "name" : "",
        "login" : "",
        "poassword" : "protected"
      }
    }


  }





}', true);
	



	
//var_dump($json);
	*/
	
	
	