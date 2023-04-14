<?php
require_once('db_conn.php');
?>

<?php
if (isset($_POST['username_check'])) {
    $username = $_POST['uname'];
    $sql = "SELECT * FROM users WHERE UserName='$username'";
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken";	
    }else{
      echo 'not_taken';
    }
    exit();
}
if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken";	
    }else{
      echo 'not_taken';
    }
    exit();
}
?>

<?php
if (isset($_POST)) {
    $fname      = $_POST['fname'];
    $mname      = $_POST['mname'];
    $lname      = $_POST['lname'];
    $pno        = $_POST['pNo'];
    $email      = $_POST['email'];
    $reff       = $_POST['reff'];
    $uname      = $_POST['uname'];
    $pass       = sha1( $_POST['password']);

        $sql = "INSERT INTO users(`First Name`, `Middle Name`, `Last Name`, `Phone Number`, `Email Address`, `Refferal Code`, `UserName`, `Password`)
    VALUES ('$fname', '$mname', '$lname', '$pno', '$email', '$reff','$uname', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo 'New record created successfully';
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }
}else {
    echo 'no data';
}

?>

<?php


?>