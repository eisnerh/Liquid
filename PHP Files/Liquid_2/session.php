<?php
include('controller/connection.php');
session_start();

$user_check = $_SESSION['camion'];

$ses_sql = mysqli_query($mysqli,"select n_Guia from inicio where camion = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['camion'];

if(!isset($_SESSION['camion'])){
    header("Location: index.php");
}
?>