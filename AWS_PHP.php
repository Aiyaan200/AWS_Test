<?php
session_start();
$Name = "";
$Email = "";

$db = mysqli_connect('database-2.cstj1r9ft2ji.us-east-2.rds.amazonaws.com','admin','Asna200$','Input_Data','3306');

if(isset($_POST['reg_user'])){
    $Name = mysqli_real_escape_string($db, $_POST['Name']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);

    $query = "INSERT INTO Input_Data (Name, Email)
                Values('$Name','$Email')";
    mysqli_query($db, $query);
}

?>
