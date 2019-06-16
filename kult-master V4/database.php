<?php

define("SQL_HOST","localhost");
define("SQL_LOGIN","root");
define("SQL_PASS","root");
define("SQL_BASE","Kult");

$connect = new mysqli(SQL_HOST, SQL_LOGIN, SQL_PASS, SQL_BASE);

if (mysqli_connect_error()){
    die('Erreur de connexion('. mysqli_connect_errno(). ')'.mysqli_connect_error() );
}
mysqli_query($connect, 'SET NAMES UT8')

 ?>
