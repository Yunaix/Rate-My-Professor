<?php
include 'TX22971_member.php';
// Show MyGuests Data

require 'TX22971_dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['pcid'];
$sql = "Delete FROM TX22971_tblpcourse Where pcid=$id";

//echo $sql;

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: TX22971_displaycourse.php');

?>