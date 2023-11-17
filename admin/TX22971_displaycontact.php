<head><title> Display Data </title> 
<link rel=stylesheet href=css/TX22971_style.css> 
</head>

<?php
include 'TX22971_member.php';
require 'TX22971_dbcon.php';

$sql = "SELECT * FROM  TX22971_tblcontactus order by cid DESC";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
Contact Us         ---     <A Href= TX22971_page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Contact Us Table</h2> <Br>";

echo "<Table border=0 width=80%>";
echo "<TR bgcolor=#85e085>";
echo "<TD>ID </TD><TD> Name </TD><TD> Email </TD> <TD> Subject </TD> <TD> Comments </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["cid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["cname"];
		echo "</TD>";
		echo "<TD>";
        echo $row["cemail"];
		echo "</TD>";
		echo "<TD>";
		echo $row["csubject"];
		echo "</TD>";
		echo "<TD>";
		echo $row["ccomments"] ;
		echo "</TD>";
		echo "</TR>";
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

$conn->close();



?>
