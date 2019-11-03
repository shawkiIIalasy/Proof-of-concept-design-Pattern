<?php
include "Subject.php";
class RealSubject implements Subject
{
    public function request()
    {
        echo "RealSubject: Handling request.<br>";
    }
}