<?php

	namespace Models;
	
	use ORM\DbModel\DbModel;
	use ORM\DbModel\DbField;

	class UsersModel extends DbModel
	{
		const ID = 'id';
		const CREATIONDATE = 'creationDate';
		const NAME = 'name';
		const LOGIN = 'login';
		const PASSWORD = 'password';
		
		public function __construct()
		{	// typowanie string/int
			$this->fields = array(
				self::ID => new DbField(self::ID, true), // add
				self::CREATIONDATE => new DbField(self::CREATIONDATE), // add
				self::NAME => new DbField(self::NAME),
				self::LOGIN => new DbField(self::LOGIN),
				self::PASSWORD => new DbField(self::PASSWORD),
			);
			
			$this->tableName = 'users';
		}
	}