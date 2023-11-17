<head><title> Display Data </title> 
<link rel=stylesheet href= './css/TX22971_style.css'> 
</head>

<?php
include './TX22971_member.php';


require './TX22971_dbcon.php';

$sql = "SELECT pcid, pcourse
FROM  TX22971_tblpcourse";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
<a href= ./TX22971_ncourse.php > Add New Course         ---     <A Href= ./TX22971_page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Course table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> ID </TD> <TD> Name </TD> <TD> </TD> <TD> Edit </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["pcid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["pcourse"];
		echo "</TD>";
		echo "<TD>";
        echo "";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=> <img src=image/edit.gif width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "";
		echo "<A href= TX22971_delcourse.php?pcid=$row[pcid]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
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
