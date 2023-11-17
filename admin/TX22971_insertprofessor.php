<?php
include './TX22971_member.php';
// Show MyGuests Data

require './TX22971_dbcon.php';

// define variables and set to empty values
$catname = "";

$pprofessor = $_POST['professor'];
$pemail = $_POST['email'];
$puniversity = $_POST['university'];
$pcourse = $_POST['course'];

  $sql = "INSERT INTO TX22971_tblprofessor (pname, pemail, pcourse, puniversity) 
  VALUES 
  ('$pprofessor', '$pemail', '$pcourse', '$puniversity' )";
  
//echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: ./TX22971_displayprofessor.php');
?>