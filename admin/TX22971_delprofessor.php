<?php
include './TX22971_member.php';
// Show MyGuests Data

require 'TX22971_dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['pid'];
$sql = "Delete FROM TX22971_tblprofessor Where pid=$id";

//echo $sql;

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: TX22971_displayprofessor.php');

?>