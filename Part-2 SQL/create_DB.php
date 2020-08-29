<?php
$servername = 'localhost';
$username = 'root';
$password = '';


$link = mysqli_connect($servername,$username,$password);

if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}
$query = "CREATE DATABASE Mid_Term_Su";

if(mysqli_query($link,$query)){
    echo "DB Created.\n";
}
else{
    echo "Database could not be created";
}
?>