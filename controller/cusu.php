<?php 
require_once('model/musu.php');
$musu = new Musu();

$idusu = isset($_REQUEST['idusu'])?$_REQUEST['idusu'] :NULL;