<?php 
require "connection.php";
if(isset($_POST['sendval']) ){
    $sendval = $_POST['sendval'];
    $id = $_POST['id'];
    $storeSql = "INSERT INTO mlxdata SET temperature='$sendval'";
    if($conn->query($storeSql)){
        echo "Success!";
    }else{
        echo "Failed!" .$conn->connect_error;
    }
}
    mysqli_close($conn);