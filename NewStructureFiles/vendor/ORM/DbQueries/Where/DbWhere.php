<?php

	namespace ORM\DbQueries\Where;
	
	class DbWhere
	{
		protected $clause = "";
	
		public function __construct($clause)
		{
			$this->clause = "WHERE " . $clause;
		}
	
		public function GetWhereClause()
		{
			return $this->clause;
		}
	
		public function AndWhere($clause)
		{
			$this->clause .= " AND " . $clause;
				
			return $this;
		}
		
		public function OrWhere($clause)
		{
			$this->clause .= " OR " . $clause;
		
			return $this;
		}
	}
