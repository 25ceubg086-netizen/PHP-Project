<?php 
require_once('config.php');
require_once('admin.php');
require_once('index.php');
$ADMIN_NAME = 'ADMIN';
$ADMIN_PWD = '@ADMIN';
if(isset($_GET['login'])){
    require_once('index.php');
    if($_COOKIE['utype'] == 'user'){
        //CODE
        header("location:index.php?SIGNUP=1");
    }
    elseif($_COOKIE['utype'] == 'admin'){
        require_once('admin.php');
        if($_COOKIE['un'] == $ADMIN_NAME && $_COOKIE['pwd'] == $ADMIN_PWD){
            setcookie('admin','true',time() + 3600);
            header("location:admin_panel.php");
        }
        else{
            header("location:index.php?fail=1");
        }
    }
    else
    {
        header("location:index.php?fail=1");
    }
}
 else
    {
      header("location:index.php?fail=1");
    }
?>