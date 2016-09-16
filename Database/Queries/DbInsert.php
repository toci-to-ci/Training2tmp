<?php
abstract class DbInsert extends SqlCommon
    {
        protected  $insertCommand = 'INSERT INTO ';


//public function SqlCommon(IDbModel $model)
//{
//    parent::__construct($model);
//}

     public abstract function Insert (IDbModel $model);


        public function __construct()
        {
            echo 'dupa'.__CLASS__; echo getcwd() . "\n";
        }


        /**
         * @param IDbModel $model
         * @return mixed
         */

    }