<?php
//tabelka w bazie danych
class DbModel implements IDbModel
    {
        protected $tableName;
        protected $values;
        protected $fields = array ();



        public function GetFields()
        {
            return $this -> fields;
        }


        public function GetTableName()
        {
            return $this->tableName;
        }

        public function GetValues()
        {
            return $this->values;
        }

        public function Set($fieldName, $fieldValue)
        {
            $this -> fields[$fieldName]->Set($fieldName, $fieldValue);


        }


        public function HasField($fieldName)
        {
            return isset($this->fields[$fieldName]);
        }

    }
