<!DOCTYPE html>
<html>
<head>
  <title> Stylesheet </title> 
  <link rel="stylesheet" href="../css/TX22971_style.css"> 
</head>

<?php
include './TX22971_member.php';
require './TX22971_dbcon.php';

echo "<Center>";
echo "<h2><BR><a href='TX22971_page1.php'>[ Home ]</a></h2>";
echo "<BR><BR><hr>";
?>

  <body>
   <form method="post" action="./TX22971_colors.php">
  <label for="h1_color">H1 Color:</label>
  <input type="color" id="h1_color" name="h1_color"><br><br>
  <label for="h2_color">H2 Color:</label>
  <input type="color" id="h2_color" name="h2_color"><br><br>
  <label for="h3_color">H3 Color:</label>
  <input type="color" id="h3_color" name="h3_color"><br><br>
  <label for="paragraph_color">Paragraph Color:</label>
  <input type="color" id="paragraph_color" name="paragraph_color"><br><br>
  <label for="header_color">Header:</label>
  <input type="color" id="header_color" name="header_color"><br><br>
  <label for="body_color">Body:</label>
  <input type="color" id="body_color" name="body_color"><br><br>
  <label for="footer_color">Footer:</label>
  <input type="color" id="footer_color" name="footer_color"><br><br>
  <label for="menu_color">Menu Color:</label>
  <input type="color" id="menu_color" name="menu_color"><br><br>
  <input type="hidden" id="form_submitted" name="form_submitted" value="1">
  <button type="submit">Save Changes</button>
</form>


<?php
if(isset($_POST['form_submitted'])) {
  // Get the color values from the form submission
  $h1_color = $_POST['h1_color'];
  $h2_color = $_POST['h2_color'];
  $h3_color = $_POST['h3_color'];
  $paragraph_color = $_POST['paragraph_color'];
  $header_color = $_POST['header_color'];
  $body_color = $_POST['body_color'];
  $footer_color = $_POST['footer_color'];
  $menu_color = $_POST['menu_color'];
  
  // Update the CSS files with the new color values
  $css_files = array(
    "../css/TX22971_style.css",
    "../css/TX22971_style1.css",
    "../css/TX22971_stylemenu.css"
    // Add more CSS files here as needed
  );
  
  foreach($css_files as $css_file) {
    $css_content = file_get_contents($css_file);
    $css_content = preg_replace("/h1\s*{\s*color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", "h1 { color: $h1_color; }", $css_content);
    $css_content = preg_replace("/h2\s*{\s*color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", "h2 { color: $h2_color; }", $css_content);
    $css_content = preg_replace("/h3\s*{\s*color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", "h3 { color: $h3_color; }", $css_content);
    $css_content = preg_replace("/p\s*{\s*color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", "p { color: $paragraph_color; }", $css_content);
    $css_content = preg_replace("/header\s*{\s*background-color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", "header { background-color: $header_color; }", $css_content);
    $css_content = preg_replace("/body\s*{\s*background-color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", "body { background-color: $body_color; }", $css_content);
    $css_content = preg_replace("/footer\s*{\s*background-color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", "footer { background-color: $footer_color; }", $css_content);
    $css_content = preg_replace("/.dropbtn\s*{\s*background-color\s*:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/i", ".dropbtn { background-color: $menu_color; }", $css_content);
    file_put_contents($css_file, $css_content);
  }
  
  // Redirect back to the homepage
  header('Location: ./TX22971_page1.php');
  exit();
}
?>



  </body>
</html>