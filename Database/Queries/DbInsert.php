<?php
    abstract class DbInsert extends SqlCommon
    {
        protected  $insertCommand = 'INSERT INTO ';





        public abstract function Insert (IDbModel $model);


        public function __construct()
        {
            echo 'dupa'.__CLASS__; echo getcwd() . "\n";
        }


    }