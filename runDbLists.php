<?php

require_once './functions.php';

require_once './Database/Interfaces/DbInterfaces.php';
require_once './Database/Models/DbList.php';
require_once './Database/Models/Databases/TableModels/GenerateModel.php';


$ob = new DbList();


$ob ->SetActiveDb_DbTab('db_toci', 'users');



//echo $ob->GetTableFieldsList();

$ob->GetTableFieldsList();



echo '<br>'.$ob ->GetActiveSet();

 $test = new GenerateModel($ob);

     echo $test->test();

drk($test);
