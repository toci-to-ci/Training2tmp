<?php

    require_once './Database/Interfaces/DbInterfaces.php';

    require_once './Database/DbModel.php';
    require_once './Database/UsersModel.php';

    require_once './Database/DbField.php';
    require_once './Database/DbQueries.php';

    require_once './Database/DbHandle.php';
    require_once './Database/PostgreSqlDbHandle.php';

    require_once './Database/PostgreSqlInsert.php';


//to kopiujemy do Crudgeneratora
$insert = new PostgreSqlInsert();
$model = new UsersModel();

$handle = new PostgreSqlDbHandle();

$model->Set(UsersModel::LOGIN,'piotrek login');
$model->Set(UsersModel::PASSWORD,'piotrek 100 pass');
$model->Set(UsersModel::NAME,'piołtrek 1000 name');


$insertCommand = $insert->Insert($model);

//$insert->Insert($model);
$handle->Connect();
$handle->RunQuery($insertCommand);
//dotąd