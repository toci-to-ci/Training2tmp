<?php
      class PostgreSqlInsert extends DbInsert
    {

//        {
//         parent::__construct($model);
//        }

    // public abstract function SqlCommon (IDbModel $model);

    public function SqlCommon(IDbModel $model)
    {
        parent::__construct($model);
        //TODO: do jakiego konstruktora się odwołuje w DbInsert nie ma konstruktora
        //TODO: PYTANIE: parent skacze wyżej niż 1 poziom ?
    }

    public function Insert(IDbModel $model)
        {
            $fields = $model->GetFields();

            //insert into users (name, login, password)
            // Values ('myname', 'mylogin' , 'mypassword');
            $names = $this -> GetNames($model);
            $valuesInSurroundings = $this->GetValues($model);

            $insert = $this->insertCommand . $model->GetTableName() .
                ' (' . implode(', ', $names) .
                ') values(' .
                implode(', ',$valuesInSurroundings).
                ');'
            ;

            var_dump($insert);
            return $insert;

        }

    }