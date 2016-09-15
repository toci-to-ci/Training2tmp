<?php

    require_once './Database/Interfaces/DbInterfaces.php';
    require_once './Database/DbHandlers/DbHandle.php';
    require_once './Database/DbHandlers/PostgreSqlDbHandle.php';

    require_once './Database/DbModel.php';


require_once './Database/DbField.php';
require_once  './Database/UsersModel.php';


$ob = new PostgreSqlDbHandle(); var_dump($ob);

$DbModel = new DbModel(); var_dump($DbModel);
$model = new  UsersModel(); var_dump($model);
