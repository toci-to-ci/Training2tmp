<?php


    require_once './Database/Interfaces/DbInterfaces.php';

    require_once './Database/Models/DbModel.php';
    require_once './Database/Models/Databases/TableModels/UsersModel.php';

    require_once './Database/Models/DbField.php';

    require_once './Database/Queries/SqlCommon.php';
    require_once './Database/Queries/DbInsert.php';

    require_once './Database/DbHandlers/DbHandle.php';
    require_once './Database/DbHandlers/PostgreSqlDbHandle.php';


  require_once './Database/Queries/DbInsert.php';
  require_once './Database/Queries/PostgreSqlInsert.php';


    require_once './Front/Controls.php';
    require_once './Front/CrudGenerator.php';

echo 'dziala';


$crudGenerator = new CrudGenerator();
echo $crudGenerator->GenerateForm(new UsersModel());
echo $crudGenerator->SaveData();