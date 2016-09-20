<?php

	namespace ORM\DbModel;
	
	use ORM\DbModel\DbModel;
	use ORM\DbModel\GenerateModel;
	
	class DbList extends DbModel
	{
		protected $dblist = array(); //ogólna tab baz, tabel i pól z jsona
		protected $activeDb = '';
		protected $activeTable = ''; //working tab
		protected $activeFields = array (); //working tab fields
		
		public function __construct($activeDb, $activeTable)
		{
			$this->activeDb = $activeDb;
			$this->activeTable = $activeTable;
		}
		
		protected function GetTableFieldsList()
		{
			$this->GetDbList();
			
			if(isset($this->dblist['dbName'][$this->activeDb][$this->activeTable]))
			{
				$this->activeFields = $this->dblist['dbName'][$this->activeDb][$this->activeTable];
			}
			else
			{
				echo "dupa";
			}
		}
		
		public function GetDbList()
		{
			$string = file_get_contents(__DIR__."/DbLists.json");
			$this->dblist = json_decode($string, true);
		}
		
		public  function GetModel()
		{
			$this->GetTableFieldsList();
			//var_dump($this->activeFields);
			
			$gnerateModel = new GenerateModel($this->activeFields);
			
			//var_dump($gnerateModel->GetFilds());
			
			$this->fields = $gnerateModel->GetFilds();
			$this->tableName = $this->activeTable;
			
			return $this;
		}
	}