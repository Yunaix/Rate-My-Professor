<?php
include './TX22971_member.php';
// Show MyGuests Data

require './TX22971_dbcon.php';

// define variables and set to empty values
$catname = "";

$pname = $_POST['pname'];


  $sql = "INSERT INTO TX22971_tblpname (pname) 
  VALUES 
  ('$pname' )";
  
  echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: ./TX22971_displayprofessor.php');
?>