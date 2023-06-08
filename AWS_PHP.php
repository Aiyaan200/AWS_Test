<?php
session_start();
$Name = "";
$Email = "";

$db = mysqli_connect();

if(isset($_POST['reg_user'])){
    $FName = mysqli_real_escape_string($db, $_POST['Name']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);

    $query = "INSERT INTO Test (Name, Email)
                Values('$Name','$Email')";
    mysqli_query($db, $query);
}

?>