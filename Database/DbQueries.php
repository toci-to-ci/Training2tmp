<?php
    abstract class DbInsert implements ISqlInsert
    {
        protected  $insertCommand = 'INSERT INTO ';
        protected  $surroundings = array(
            'string' => "'",
            'int' => '',

        );

        /**
         * @param IDbModel $model
         * @return mixed
         */
        public abstract function Insert (IDbModel $model);

        protected function GetNames(IDbModel $model)
        {
            $fields = $model->GetFields();
            $names = array ();

            foreach ($fields as $fieldKey => $fieldValue) //$fieldValue to nasz IDbField
            {
                if ($fieldValue->HasValue()) {
                    $names[] =  $fieldValue->GetFieldName();
                }

            }

          //  var_dump($names);
            return $names;

        }

        protected function GetValues(IDbModel $model)
        {
            $fields = $model->GetFields();
            $values = array ();

            foreach ($fields as $fieldKey => $fieldValue) //$fieldValue to nasz IDbField
            {
                if ($fieldValue->HasValue()) {

                  //  var_dump($fieldValue->GetType());
                    $values[] = $this->surroundings[$fieldValue->GetType()] . $fieldValue->GetValue() . $this->surroundings[$fieldValue->GetType()];
                }

            }

              var_dump($values);
            return $values;

        }



    }