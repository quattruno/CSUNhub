require 'database.php';
 
$id = $_POST['id'];
$d = addslashes($_POST['description']);
 
if ($d == '') $d = 'Click to enter a description.';
 
$q = "UPDATE photo SET description='$d' WHERE id = $id"; 
$result = $mysqli->query($q) or die(Error updating information.');
 
if($result) echo "Photo successfully updated.";