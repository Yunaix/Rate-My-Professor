<?php
include './TX22971_member.php';
?>
<html>
<body>

<?php
Echo '<a href=logout.php> || Logout  ||</a>';
echo '<br><Center>';
echo '<H1> Admin Home </H1>';

	echo '<br><H3>';
	echo '<br>';
	Echo '<a href= TX22971_displaycourse.php> [ Courses ]</a>';
	echo '   ---   |   ---   ';
	Echo '<a href= TX22971_displayprofessor.php> [ Professors ]</a>';
	echo '   ---   |   ---   ';
	Echo '<a href= TX22971_displayrating.php> [ Comments ]</a>';
	echo '   ---   |   ---   ';
	Echo '<a href= TX22971_updatestyle.php> [ StyleSheet ]</a>';
	echo '   ---   |   ---   ';
	Echo '<a href= TX22971_displaycontact.php> [ ContactUs ]</a>';
	echo '</H3><br>';
	
	
echo '<br></Center>';
?>

</body>
</html>