<?php
include_once "base.php";

echo $User->find(['acc'=>$_POST['acc']]);
?>