<?php
include "MySqlQueryBuilder.php";
include "PostgresQueryBuilder.php";
function clientCode($queryBuilder)
{
    // ...

    $query = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSql();

    echo $query;

    // ...
}


echo "Testing MySQL query builder:<br>";
clientCode(new MysqlQueryBuilder);

echo "<br><br>";

echo "Testing PostgresSQL query builder:<br>";
clientCode(new PostgresQueryBuilder);