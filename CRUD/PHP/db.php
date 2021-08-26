<?php

function Createdb(){

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="Tasks";

    //create connection
    $con=mysqli_connect($servername,$username,$password);

    //check connection
    if(!$con)
    {
        die("connection failed:" .mysqli_connect_error());
    }

    //create database
    $sql= "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con,$sql))
    {
        $con=mysqli_connect($servername,$username,$password,$dbname);

        $sql="CREATE TABLE IF NOT EXISTS tasks(
    ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    URL varchar (25) NOT NULL,
    Des varchar(20),
    Price float,
    Status varchar(15)
    );
";
        if(mysqli_query($con,$sql))
        {
           return $con;
        }else
        {
            echo ("cant create table");
        }

    }
    else
    {
        echo ("error occured  :".mysqli_error($con));
    }
}return(0);