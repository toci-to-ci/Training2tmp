<?php

//require_once './Databases/DbLists.json';
//require_once '../Interfaces/DbInterfaces.php';

    class DbList implements IDBlist
    {

        protected $dblist = array(); //ogólna tab baz, tabel i pól z jsona

        protected $activeDb = '';
        protected $activeTable = ''; //working tab
        protected $activeFields = array (); //working tab fields



        public function __construct()
        {
            $this->dblist = $this->GetDbList();
        }

        public function GetDbList()
        {
            $string = file_get_contents(__DIR__."/Databases/DbLists.json");
            $this->dblist = json_decode($string, true);

            return $this->dblist;
        }


        public function SetActiveDb_DbTab($activeDbName, $activeTable)
        {
            $this->activeDb = $activeDbName;
            $this->activeTable = $activeTable;
        }

        public function GetTableFieldsList()
        {


//            searchForId($this->activeDb ,$this->activeTable, $this->dblist);
//
//            function searchForId($id, $array)
//            {
//                foreach ($array as $key => $val)
//                {
//                    if ($val['uid'] === $id)
//                    {
//                        return $key;
//                    }
//                }
//                return null;
//            }

//            foreach ($this->dblist as $item) {
//                echo $item.'<br>';
//
//            }



        }






        public function GetActiveSet()
        {
            echo 'activeDb: '.$this->activeDb.'<br>';
            echo 'activeTable: '.$this->activeTable.'<br>';
            echo 'listOfTableFields: '.'<pre>';
            echo print_r($this->activeFields);
            echo '<pre>';
        }


    }