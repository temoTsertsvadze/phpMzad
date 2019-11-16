<?php
include_once 'includes/dph.inc.php';
include_once 'menu.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<h1>Edit</h1>
<form action ="update.php" method="post" >
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

	

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "UPDATE data SET name='$name', lastname='$lastname', subject='$subject', point='$point'  WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>

</body>
</html>