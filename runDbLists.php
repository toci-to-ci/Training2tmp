<?php

require_once './functions.php';

require_once './Database/Interfaces/DbInterfaces.php';
require_once './Database/Models/DbList.php';


$ob = new DbList();


//drk ($ob);



$ob ->SetActiveDb_DbTab('db_toci', 'users');

// drk($ob);
echo '<br>'.$ob ->GetActiveSet();

//drk ($ob);

