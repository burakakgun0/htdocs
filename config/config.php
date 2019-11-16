<?php

try {

$db=new PDO("mysql:host=localhost;dbname=hayvan;charset=utf8",'root','');

}

catch (PDOException $e) {

echo $e->getMessage();

}

?>