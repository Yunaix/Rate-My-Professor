<?php
include './TX22971_member.php';
require './TX22971_dbcon.php';

//$sql = "SELECT * from tblnews LEFT JOIN tblcategory ON tblnews.newscatid = tblcategory.catid";
//$result = $conn->query($sql);

echo "<HTML>";
echo "<Title> Add Professor </Title>";
echo "<Center>";
echo "<H1> Insert New Professor Data        ---     <A Href= ./TX22971_page1.php> Home </A></H1>";
echo "<Form action= ./TX22971_insertprofessor.php method=post>";
echo "<Table border=1>";
echo "<Tr><Td>";
echo "<H3> Professor Name ";
echo "</Td><Td>";
echo "<select name=professor>";
$sql1 = "SELECT * from TX22971_tblpname";
$result1 = $conn->query($sql1);
    while($row1 = $result1->fetch_assoc()) 
	{
		echo "<option value='$row1[pname]'>$row1[pname]</option>";
	}
echo "</select>";
echo "</Td></Tr>";
echo "<Tr><Td>";
echo "<H3> Professor Email ";
echo "</Td><Td>";
echo "<Input type=text name=email> <Br>";
echo "</Tr>";
echo "<Tr><Td>";
echo "<H3> Professor University ";
echo "</Td><Td>";
echo "<Select name = university>";
$sql1 = "SELECT * from TX22971_tblpuniversity";
$result2 = $conn->query($sql1);
    while($row2 = $result2->fetch_assoc()) 
	{
		echo "<option value='$row2[puniversity]'>$row2[puniversity]</option>";
	}
echo "</select> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";
echo "<H3> Professor Course ";
echo "</Td><Td>";
echo "<Select name = course>";
$sql1 = "SELECT * from TX22971_tblpcourse";
$result2 = $conn->query($sql1);
    while($row2 = $result2->fetch_assoc()) 
	{
		echo "<option value='$row2[pcourse]'>$row2[pcourse]</option>";
	}
echo "</select> <Br>";
echo "</Td></Tr>";
echo "</Td><Td>";
echo "<Table border=0 width=70%><Tr><Td valign=top>";
echo "<Input type=submit value=Submit>  </Form>";
echo "</Td><Td valign=top>";
echo "<form action= ./TX22971_displayprofessor.php><Input type=submit value=Cancel></form>";
echo "</Td></Tr></Table>";
echo "</Td></Tr></Table>";

echo "<Table border=1>";
echo "<Tr>";
echo "<Td><Form action= ./TX22971_insertpname.php method=post> New Professor Name : </Td><Td><Input text name=pname> <Input type=submit value=Submit>  </Form></Td>";
echo "<Tr></Tr>";
echo "<Td><Form action= ./TX22971_insertpuniversity.php method=post> New University : </Td><Td><Input text name=puniversity> <Input type=submit value=Submit>  </Form></Td>";
echo "<Tr></Tr>";
echo "<Td><Form action= ./TX22971_insertpcourse.php method=post> New Course : </Td><Td><Input text name=pcourse> <Input type=submit value=Submit>  </Form></Td>";
echo "</Tr></Table>";
echo "</Center>";
echo "</HTML>";
?>