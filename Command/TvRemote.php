<?php
include("Television.php");
class TvRemote
{
    public static  function getDevice()
    {
        return new Television();
    }
}