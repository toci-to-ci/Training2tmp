<?php
header('Content-Type: text/html; charset=utf-8');

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

            //if(isset($this->dblist['dbName']['db_toci']['users']))
            if(isset($this->dblist['dbName'][$this->activeDb][$this->activeTable]))
            {

                return $this->activeFields = $this->dblist['dbName'][$this->activeDb][$this->activeTable];
            }
            else
            {
                echo "dupa";
            }


//
//
//            foreach ($this->dblist as $item => $val) {
//
//                foreach ($val as $item => $val) {
//                    //echo ' - ' . $item . '<br>';
//
//                    if($item === 'db_toci') {
//                        echo '- '.$item.'<br>';
//
//                        foreach ($val as $item => $val) {
//                             echo ' -- ' . $item . '<br>';
//
//                            if ($item === 'users') {
//
//                                foreach ($val as $item => $val) {
//                                    echo ' --- ' . $item . ' => ' . $val . '<br>';
//
//
//                                }
//                            }
//
//                        }
//
//
//                    }
//                }
//
//                echo "-------------------------------------<br>";
//
//                foreach ($this->dblist as $key => $value)
//                {
//                    foreach ($value as $key => $value)
//                    {
//                        if($key == "db_toci") //??
//                        {
//                            foreach ($value as $key => $value)
//                            {
//                                if($key == "users")
//                                {
//                                    echo $key;
//                                }
//                            }
//                        }
//
//                    }
//                 }




            /*
                if ($item == 'db_toci') {
                    echo "<br>";
                    print_r ($val);
                    echo "<br>";
                    print_r ($item);
                }else
                {
                    echo "<br>""<br>".'poza';
                }*/

         //   }


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
            echo print_r($this->GetTableFieldsList());
            echo '<pre>';
        }


    }