<?php
require 'TX22971_dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_submitted'])) {
  $h1_color = $_POST["h1_color"];
  $h2_color = $_POST["h2_color"];
  $h3_color = $_POST["h3_color"];
  $paragraph_color = $_POST["paragraph_color"];
  $header_color = $_POST["header_color"];
  $body_color = $_POST["body_color"];
  $footer_color = $_POST["footer_color"];
  $menu_color = $_POST["menu_color"];
  
  // insert the colors into the database
  $sql = "INSERT INTO TX22971_colors (h1_color, h2_color, h3_color, paragraph_color, header_color, body_color, footer_color, menu_color) VALUES ('$h1_color', '$h2_color', '$h3_color', '$paragraph_color', '$header_color', '$body_color', '$footer_color', '$menu_color')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Colors saved successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// retrieve the colors from the database
$sql = "SELECT * FROM TX22971_colors ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// check if any rows were returned
if ($result->num_rows > 0) {
  // fetch the data into an associative array
  $row = $result->fetch_assoc();
  
  // display the current colors on the page
  echo '<style>';
  echo 'h1 { color: ' . $row['h1_color'] . '; }';
  echo 'h2 { color: ' . $row['h2_color'] . '; }';
  echo 'h3 { color: ' . $row['h3_color'] . '; }';
  echo 'p { color: ' . $row['paragraph_color'] . '; }';
  echo 'header { background-color: ' . $row['header_color'] . '; }';
  echo 'body { background-color: ' . $row['body_color'] . '; }';
  echo 'footer { background-color: ' . $row['footer_color'] . '; }';
  echo '.dropdown-content { background-color: ' . $row['menu_color'] . '; }';
  echo '</style>';
} else {
  echo 'No colors found.';
}

$conn->close();
?>
