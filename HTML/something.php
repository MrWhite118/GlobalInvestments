<?php


if(isset($_POST["fName"])) {
    $connect = new PDO ("mysql:host=localhost; dbname=users", "MrWhite118", "olaeighteen18");

    $data = array(
        ':fName' => $_POST["fName"], 
        ':mName' => $_POST["mName"],
        ':lName' => $_POST["lName"], 
        ':pNo'   => $_POST["pNo"],
        ':email'   => $_POST["email"],
        ':reff'   => $_POST["reff"],
        ':uName'   => $_POST["uName"],
        ':pass'   => $_POST["pass"],
        ':cPass'   => $_POST["cPass"]
);

$query = "
INSERT INTO users
(First Name, Middle Name, Last Name, Phone Number,
 Email Address, Refferal Code, UserName, Password, Confirm Password)
 VALUES (:fName, :mName, :lName, :pNo, :email, :reff, :uName, :pass, :cPass)
";

$statement = $connect->prepare($query);

$statement->execute($data);

echo '<div class="alert alert-success">Data Saved</div>';
}



?>