<?php

$sname= "localhost";

$unmae= "MrWhite18";

$password = "olaeighteen18";

$db_name = "users_info";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

?>