<?php 

// session_start(); 

require_once "db_conn.php";

// if (isset($_POST['uname']) && isset($_POST['password'])) {

//     function validate($data){

//        $data = trim($data);

//        $data = stripslashes($data);

//        $data = htmlspecialchars($data);

//        return $data;

//     }

//     $uname = validate($_POST['uname']);

//     $pass = validate($_POST['password']);

//     if (empty($uname)) {

//         header("Location: index.php?error=User Name is required");

//         exit();

//     }else if(empty($pass)){

//         header("Location: index.php?error=Password is required");

//         exit();

//     }else{

        
        $username      = $_POST['uname'];
        $password       = $_POST['password'];

        $sql = "SELECT * FROM users WHERE UserName = ? AND Password = ? LIMIT 1";
        $result = mysqli_query($username, $password);

        if (($result)) {
            $user = mysqli_fetch_assoc($result);
            if(($user) === 1){
                echo 'user found';
            }else {
                echo 'no user found';
            }
            

        }else {
            echo 'there were errors connecting to the database';
        }

        // if (($result) === 1) {
        

//             $row = mysqli_fetch_assoc($result);
        
//             if ($row['First Name'] === $uname && $row['password'] === $pass) {

//                 // echo "Logged in!";

//                 // $_SESSION['First Name'] = $row['First Name'];

//                 // $_SESSION['name'] = $row['name'];

//                 $_SESSION['id'] = $row['id'];

//                 header("Location: home.php");

//                 exit();

//             }else{

//                 header("Location: index.php?error=Incorect User name or password");

//                 exit();

//             }

//         }else{

//             header("Location: index.php?error=Incorect User name or password");

//             exit();

//         }

//     }

// }else{

//     header("Location: index.php");

//     exit();

// echo 'hello from login';

// }