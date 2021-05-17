<?php
//Shembulli permes te cilit mund te hapet dhe lidhet PHP
session_start();

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "bizdatabase"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Lidhja deshtoi: " . mysqli_connect_error());
}

?>