<?php

class DbField implements IDbField //kolumna tabelki w db
{
    protected $fieldName; //przechowuje nazwę pola
    protected $fieldValue; //przechowuje wartość pola

    public function __construct($fieldName)
    {
        $this->fieldName = $fieldName;
    }


    public function Set($fieldName, $fieldValue)
    {
        $this->fieldName = $fieldName;
        $this->fieldValue = $fieldValue;

    }

    public function GetType() //string / text / int //przechowuje typ pola
    {
        return gettype($this->fieldValue);

    }

    public function GetValue() //beatka
    {
        return $this->fieldValue;

    }

    public function GetFieldName() // name    - nazwa pola bazy danych
    {
        return $this->fieldName;

    }

    public function HasValue()
    {
        return !is_null($this->fieldValue);
    }

    public function IsAutomatic()
    {
        //zadanie domowe
        return false;

        //? ?? jakieś $field value == null ?

    }

}
