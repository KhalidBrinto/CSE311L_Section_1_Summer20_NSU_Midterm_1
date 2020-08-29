<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = "Mid_Term_Su";


$link = mysqli_connect($servername,$username,$password,$database);

if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}
$query = "CREATE TABLE Student(
    snum int(9) PRIMARY KEY NOT NULL,
    sname VARCHAR(30),
    major VARCHAR(25),
    level VARCHAR(2),
    age int(3));

CREATE TABLE Department(
    fid int(9) PRIMARY KEY NOT NULL,
    fname VARCHAR(30),
    deptid int(2));
    
CREATE TABLE Course(
    snum int(9) PRIMARY KEY NOT NULL,
    cname VARCHAR(40) NOT NULL);

CREATE TABLE Class(
    name VARCHAR(40) PRIMARY KEY NOT NULL,
    meets_at VARCHAR(20),
    room VARCHAR(10),
    fid int(9),
    FOREIGN KEY(fid) REFERENCES Department(fid));";

if(mysqli_query($link,$query)){
    echo "Table Created.\n";
}
else{
    echo "Table could not be created";
}
?>