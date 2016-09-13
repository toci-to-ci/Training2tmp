<?php

    require_once './Database/Interfaces/DbInterfaces.php';
    require_once './Database/DbHandle.php';
    require_once './Database/PostgreSqlDbHandle.php';



$ob = new PostgreSqlDbHandle();

var_dump($ob);