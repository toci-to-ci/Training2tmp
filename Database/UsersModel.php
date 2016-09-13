<?php
    class UsersModel extends DbModel
    {
        const ID = 'id';
        const CREATIONDATE = 'creationDate';
        const NAME = 'name';
        const LOGIN = 'login';
        const PASSWORD = 'password';

        public function __construct()
        {
            $this -> fields = array(
                self::ID => new DbField(self::ID),
                self::CREATIONDATE => new DbField(self::CREATIONDATE),
                self::NAME => new DbField(self::NAME),
                self::LOGIN => new DbField(self::LOGIN),
                self::PASSWORD => new DbField(self::PASSWORD),
            );

            $this->tableName = 'users'; 
        }

    }