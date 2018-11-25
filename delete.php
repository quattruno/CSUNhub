require 'database.php';
 
$id = $_POST['id'];
 
$q = "DELETE from photo WHERE id = $id";
$result = $mysqli->query($q) or die("There was a problem!");
 
if($result) header("location: index.php");