<?php

	namespace ORM\DbHandle\MySql;
	
	use ORM\DbHandle\DbHandle;

	class MySqlDbHandle extends DbHandle
	{
		protected $connectionHandle;
		
		public function __construct()
		{
			parent::__construct();
				
			$this->connectionString = 'mysql:hoost='. $this->host .';dbname='. $this->db .';charset=utf8';
		}
		
		public function Connect()
		{
			$this->connectionHandle =  new \mysqli('localhost', 'root', '', 'testy');
		}
		
		public function RunQuery($query)
		{
			//$resource = $this->connectionHandle->prepare($query);
			$resource = mysqli_query($this->connectionHandle, $query);
			echo $query;
			//return mysqli_fetch_assoc($resource); 
		}
	}