<?php

	namespace ORM\DbHandle;
	
	use ORM\Interfaces\IDbHandle;

	abstract class DbHandle implements IDbHandle
	{
		protected $connectionString;
		
		protected $user;
		
		protected $db;
		
		protected $password;
		
		protected $host;
		
		protected function __construct()
		{
			//uzupelniamy te pola
			
			$data = include __DIR__ . '/../../../src/config.php';
			$data = $data["database"];
			
			$this->user = $data["user"];
			$this->db = $data["db"];
			$this->password = $data["password"];
			$this->host = $data["host"];
		}
	}