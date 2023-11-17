<?php
include 'TX22971_member.php';
// Show MyGuests Data

require 'TX22971_dbcon.php';

// define variables and set to empty values
$catname = "";

$puniversity = $_POST['puniversity'];


  $sql = "INSERT INTO TX22971_tblpuniversity (puniversity) 
  VALUES 
  ('$puniversity' )";
  
  echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: TX22971_displayprofessor.php');
?>