<?php
    abstract class DbInsert extends SqlCommon
    {
        protected  $insertCommand = 'INSERT INTO ';

        public abstract function Insert (IDbModel $model);



    }