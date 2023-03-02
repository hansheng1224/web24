<?php
include_once "base.php";

$chk=$User->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($chk>0){
    $_SESSION['login']=$_POST['acc'];
}
echo $chk;
?>