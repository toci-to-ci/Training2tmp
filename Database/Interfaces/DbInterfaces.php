<?php

//połaczenie i uruchomienie zapytania
interface IDbHandle
{
    public function Connect();

    public function RunQuery($query);

}

interface IDbField  //z DbQueries.php foreach ($fields as $fieldKey => $fieldValue)
{
    public function GetType(); //string / text

    public function GetValue(); //beatka

    public function GetFieldName(); // name    - nazwa pola bazy danych

    public function Set($fieldName, $fieldValue);

    public function HasValue();

    public function IsAutomatic();


}

interface IDbModel
{
    /**
     * @return array of IDbField
     */
    public function GetFields();
    public function GetTableName();
    public function Set($fieldName, $fieldValue);
    public function GetValues();
    public function HasField($fieldName);

}

interface ISqlInsert
{
    /**
     * @param IDbModel $model
     * @return mixed
     */
    public function Insert(IDbModel $model);
}