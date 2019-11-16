<?php
include_once 'includes/dph.inc.php';
include_once 'menu.php';
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>

<form action ="insert.php" method="post" >
<label>name:</label><br>
<input type="text" name="name"><br>
<label>lastname:</label><br>
<input type="text" name="lastname"><br>
<label>subject:</label><br>
<input type="text" name="subject"><br>
<label>point:</label><br>
<input type="text" name="point"><br>
<button type="submit" name="submit">submit</button>
 </form>
<?php
if (isset($_POST["submit"])) {

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$point = $_POST['point'];


$sql = "INSERT INTO data(name, lastname, subject, point)
VALUES ('$name', '$lastname', '$subject', '$point');";
		mysqli_query($conn, $sql); 
		}
?>


</body>
</html>

