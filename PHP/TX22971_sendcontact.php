 <?php
   
$host = "studentdb-maria.gl.umbc.edu";
$user = "eunicea2";
$pass = "eunicea2";
$db = "eunicea2";

$conn = new mysqli($host, $user, $pass, $db);
if(!$conn){
	echo "There are some problem while connecting the database";
	
}
// there are no errors so let's get data from the form
$cname = $_POST['cname'];
$cemail = $_POST['cemail'];
$csubject = $_POST['csubject'];
$ccomments = $_POST['ccomments'];
// Collects form data into the variables
// lets insert them into the table

$qry = "INSERT INTO `TX22971_tblcontactus`(`cname`, `cemail`, `csubject`, `ccomments`) 
VALUES ('$cname', '$cemail', '$csubject', '$ccomments')";

$insert = mysqli_query($conn,$qry);

if(!$insert){
	echo "There are some problem while inserting data";
}
else{
	echo "Data Inserted";
}

$conn->close();
header('Location: TX22971_contactus.php');
?>