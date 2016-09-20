<?php



    class GenerateModel extends DbList
    {
        protected $autoModelDbList;
        protected $const;
        protected $fieldsArrConstructor;

        public function __construct($dbmodel)
        {
            $this->autoModelDbList = $dbmodel;
            $this->gnerateConst();
        }

        protected function gnerateConst()
        {
            foreach ($this->autoModelDbList->$activeFields as $key => $value)
            {
                $this->const .= "const " . strtoupper($key) . " = " . "'" .$key. "'" . ";";
            }
        }

        protected function generateFieldsArrayConstructor ()
        {
            //$this->fieldsArrConstructor .=
            
        }

        public function test()
        {
            return $this->const;
        }
    }

//
//$users = $this->getDoctrine()
//    ->getRepository('db_toci:users');


