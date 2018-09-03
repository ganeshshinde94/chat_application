<?php

//echo 'Test Admin';
include '../setting.php';
$uname = $_REQUEST['adminUsername'];
$upass = $_REQUEST['adminPassword'];
if(isset($_REQUEST['adminUsername']) && isset($_REQUEST['adminPassword'])){
    if(ADMINUSER == $uname && ADMINPASS == $upass){
        header("Location: dashboardAdmin.php");
        exit;
    }else{
        header("Location: index.php");
    }
}
