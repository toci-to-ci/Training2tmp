<?php
    abstract class DbSelect implements ISqlSelect
    {
        protected $selectCommand = 'SELECT ';
        protected $fromCommand = 'FROM ';

        public abstract function Select(IDbModel $model);

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