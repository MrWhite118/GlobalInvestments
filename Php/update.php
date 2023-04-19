<?php

include "db_conn.php";

if (isset($_POST)) {

$cPass = sha1($_POST['password']);
$newPass = sha1($_POST['newPass']);

$sql = "SELECT * FROM users WHERE Password='$cPass'";

$result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

   

if ($row['Password'] === $cPass ) {
    if($newPass > '8') {
        $sql_change = "UPDATE `users` SET `Password`='$newPass' WHERE Password='$cPass'";
        //  var_dump($sql_change);
if ($conn->query($sql_change) === TRUE) {
    echo 'Password changed successfully!';
    // header("Location: home.php");
        }else {
            echo 'sorry some errors occured fix it';
        }
    }else {
        echo 'Please Input New Password, it must be at least 9 characters long';
    }
    
} else {
    echo 'Failed to Change Password, Current Password does not match';
}

}else {
    echo 'no data';
}



?>