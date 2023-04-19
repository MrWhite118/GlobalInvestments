<?php
require_once('db_conn.php');
?>

<?php
 $username = $_POST['uname'];
    $email = $_POST['email'];
    $number = $_POST['pNo'];


$sql = "SELECT `Phone Number`, `Email Address`, `UserName` FROM `users` WHERE 1";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_assoc($result);
    
    if ($users['UserName'] == $username && $users['Email Address'] == $email && $users['Phone Number'] == $number) {
        echo 'Username, Email Address and Phone Number Already Exists!';
    }elseif ($users['UserName'] == $username && $users['Email Address'] == $email) {
        echo 'Username and Email Already Exists!';
    }elseif ($users['UserName'] == $username && $users['Phone Number'] == $number) {
        echo 'Username and Phone Number Already Exists!';
    }elseif ($users['Email Address'] == $email && $users['Phone Number'] == $number) {
        echo 'Email and Phone Number Already Exists!';
    }elseif($users['UserName'] == $username){
        echo 'Username Already Exists!';
    }elseif($users['Email Address'] == $email){
        echo 'Email Already Exists!';
    }elseif($users['Phone Number'] == $number){
        echo 'Phone Number Already Exists!';
    }





// if (isset($_POST['username_check'])) {
//     $username = $_POST['uname'];
//     $sql = "SELECT * FROM users WHERE UserName='$username'";
//     $results = mysqli_query($conn, $sql);
//     if (mysqli_num_rows($results) > 0) {
//       echo "taken";	
//     }else{
//       echo 'not_taken';
//     }
//     exit();
// }
// if (isset($_POST['email_check'])) {
//     $email = $_POST['email'];
//     $sql = "SELECT * FROM users WHERE email='$email'";
//     $results = mysqli_query($conn, $sql);
//     if (mysqli_num_rows($results) > 0) {
//       echo "taken";	
//     }else{
//       echo 'not_taken';
//     }
//     exit();
// }
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

    // $query = "SELECT `username` FROM `users` WHERE `UserName`='$uname' AND "; 
    // $query_run = mysql_query ($query); if (mysql_num_rows ($query_run)==1) { echo "Username already exist."; }

    
        $sql = "INSERT INTO users(`First Name`, `Middle Name`, `Last Name`, `Phone Number`, `Email Address`, `Refferal Code`, `UserName`, `Password`)
    VALUES ('$fname', '$mname', '$lname', '$pno', '$email', '$reff','$uname', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo 'Congrats!! you have successfully created an account, Log in to continue!!';
        
    } else {
        return false;
        
    }
}else {
    echo 'no data';
}

?>
