<?php
include ("TvRemote.php");
include ("TurnTvOn.php");
include ("TurnTvOff.php");
include ("DeviceButton.php");
include ("TurnTvUp.php");
$device=TvRemote::getDevice();
$device1=TvRemote::getDevice();

$turnTvOn=new TurnTvOn($device);
$press=new DeviceButton($turnTvOn);
$press->press();

/*-------------------------------------*/
$turnTvOff=new TurnTvOff($device);
$press=new DeviceButton($turnTvOff);
$press->press();

/*-------------------------------------*/
$turnTvUp=new TurnTvUp($device);
$press=new DeviceButton($turnTvUp);
$press->press();
/*-------------------------------------*/
$turnTvUp=new TurnTvUp($device);
$press=new DeviceButton($turnTvUp);
$press->press();
/*-------------------------------------*/
$turnTvUp=new TurnTvUp($device);
$press=new DeviceButton($turnTvUp);
$press->press();
/*-------------------------------------*/

$turnTvUp=new TurnTvUp($device1);
$press=new DeviceButton($turnTvUp);
$press->press();
/*-------------------------------------*/
$turnTvUp=new TurnTvUp($device);
$press=new DeviceButton($turnTvUp);
$press->press();
?>