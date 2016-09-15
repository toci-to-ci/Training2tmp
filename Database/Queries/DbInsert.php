<?php
    abstract class DbInsert implements ISqlInsert
    {
        protected  $insertCommand = 'INSERT INTO ';
        protected  $surroundings = array(
            'string' => "'",
            'int' => '',   );

        //TODO: insert, select, update i delete zawsze
        //TODO: będą miały wspólne elementy, jak nazwy pól,
        //TODO: to powinno zostac gdzieś wyżej zaimplementowane
        //TODO: przed klasą specjalizowaną (p: PostgreSqlInsert
        //TODO: jako np SqlCommon.php


        /**
         * @param IDbModel $model
         * @return mixed
         */
        public abstract function Insert (IDbModel $model);

        protected function GetNames(IDbModel $model)
        {
            $fields = $model->GetFields();
            $names = array ();

            //$fieldValue to nasz IDbField
            foreach ($fields as $fieldKey => $fieldValue)
            {
                if ($fieldValue->HasValue()) {
                    $names[] =  $fieldValue->GetFieldName();
                }

            }
            return $names;

        }

        protected function GetValues(IDbModel $model)
        {
            $fields = $model->GetFields();
            $values = array ();

            //$fieldValue to nasz IDbField
            foreach ($fields as $fieldKey => $fieldValue)
            {
                if ($fieldValue->HasValue()) {

                  //  var_dump($fieldValue->GetType());
                    $values[] = $this->surroundings[$fieldValue->GetType()] .
                        $fieldValue->GetValue() .
                        $this->surroundings[$fieldValue->GetType()];
                }

            }

            var_dump($values);
            return $values;

        }



    }