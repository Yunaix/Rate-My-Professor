<?php
include 'TX22971_member.php';
// Show MyGuests Data

require 'TX22971_dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['pid'];
$sql = "Delete FROM TX22971_tblrating Where rid=$id";

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: TX22971_displayrating.php');

?>