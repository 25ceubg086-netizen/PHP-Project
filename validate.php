<?php 
require_once('config.php');
ADMIN_NAME = 'ADMIN';
ADMIN_PWD = '@ADMIN';
if(!isset($_GET['login'])){
    if($_COOKIE['utype'] == 'user'){
        //CODE
    }
    elseif($_COOKIE['utype'] == 'admin'){
        if($_COOKIE['uname'] == ADMIN_NAME && $_COOKIE['pwd'] == ADMIN_PWD){
            setcookie('admin','true',time() + 3600);
        }
        else{
            header();
        }
    }
    else
    {

    }
}
?>