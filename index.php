<?php
//$servername = "localhost";
//$username = "mirna";
//$password = "123";

//try {
//  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
//  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  $sql = "CREATE DATABASE MyDB";
  // use exec() because no results are returned
//  $conn->exec($sql);
 // echo "Database created successfully<br>";
//} catch (PDOException $e) {
//echo $sql . "<br>" . $e->getMessage();
//}

//$conn = null;
?>

<?php
$servername = "localhost";
$username = "mirna";
$password = "123";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>