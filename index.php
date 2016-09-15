<?php


    require_once './Database/Interfaces/DbInterfaces.php';

    require_once './Database/DbModel.php';
    require_once './Database/UsersModel.php';

    require_once './Database/DbField.php';
    require_once './Database/Queries/DbInsert.php';

    require_once './Database/DbHandlers/DbHandle.php';
    require_once './Database/DbHandlers/PostgreSqlDbHandle.php';

    require_once './Database/PostgreSqlInsert.php';

//
    require_once './Front/Controls.php';
    require_once './Front/CrudGenerator.php';

//echo 'dziala';


$crudGenerator = new CrudGenerator();
echo $crudGenerator->GenerateForm(new UsersModel());
echo $crudGenerator->SaveData();