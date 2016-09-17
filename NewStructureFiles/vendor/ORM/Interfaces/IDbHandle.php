<?php

	namespace ORM\Interfaces;
	
	interface IDbHandle
	{
		public function Connect();
	
		public function RunQuery($query);
	}