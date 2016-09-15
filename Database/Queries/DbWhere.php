<?php
    abstract class DbWhere implements ISqlWhere
    {
        protected $whereCommand = '';

        public abstract function Where(IDbModel $model);

    }