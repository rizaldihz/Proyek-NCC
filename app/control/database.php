<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = "CAMIN";

$konek = mysqli_connect($servername, $username, $password, $name);

if ($konek->connect_error) {
    return false;
}
else return $konek;