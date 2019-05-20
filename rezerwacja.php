<?php

/* $host="localhost";
$user= "root";
$password="";
$dataBase= "baza"; */

$connect= mysqli_connect("localhost","root","", "baza");

$da= $_POST['da'];
$quanity= $_POST['quanity'];
$tel = $_POST['numberTel'];


$query =  "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ($da, $quanity, $tel)";



if($connect-> query($query) === TRUE)
{
    echo "Dodano rezerwację do bazy";
}
else {
    echo "Error: ". $query . "<br>". $connect->error;
}
$connect-> close();
?>