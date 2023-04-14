

<?php
$servername = "localhost";
$username = "MrWhite18";
$password = "olaeighteen18";
$dbname = "users_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$pno = $_POST['pNo'];
$email = $_POST['email'];
$reff = $_POST['reff'];
$uname = $_POST['uname'];
$pass = $_POST['password'];
// $aFullName = $_POST['aFullName'];
// $aBankName = $_POST['aBankName'];
// $aAcctNum = $_POST['aAcctNum'];


// if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['ulname']) && isset($_POST['pNo']) && isset($_POST['email']) && isset($_POST['reff']) && isset($_POST['uname']) && isset($_POST['password'])) {

$sql = "INSERT INTO users(`First Name`, `Middle Name`, `Last Name`, `Phone Number`, `Email Address`, `Refferal Code`, `UserName`, `Password`)
VALUES ('$fname', '$mname', '$lname', '$pno', '$email', '$reff','$uname', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-sucess">New record created successfully</div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn-> ();
?>

