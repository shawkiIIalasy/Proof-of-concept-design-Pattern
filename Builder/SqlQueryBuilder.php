<?php
interface  SqlQueryBuilder
{
    public function select($tableName, $fields);
    public function where($filed,$value,$operator='=');
    public function limit($start,$offset);
    public function getSql();
}