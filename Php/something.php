

<?php
$servername = "localhost";
$username = "MrWhite18";
$password = "olaeighteen18";
$dbname = "test_db";

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


// if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['ulname']) && isset($_POST['pNo']) && isset($_POST['email']) && isset($_POST['reff']) && isset($_POST['uname']) && isset($_POST['password'])) {

$sql = "INSERT INTO users(`first_name`, `middle_name`, `last_name`, `phone_number`, `email_address`, `referral_code`, `user_name`, `password`)
VALUES ('$fname', '$mname', '$lname', '$pno', '$email', '$reff','$uname', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-sucess">New record created successfully</div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>