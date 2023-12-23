<?php

$Name=$_REQUEST['username'];
$Email=$_REQUEST['email']; 
$Message=$_REQUEST['message'];

if(isset($_POST['btn'])){

    $host="localhost";
    $user="root";
    $db="testdb";

    $conn =mysqli_connect($host,$user,$db);
    $insert= "insert into vistors values('$Name','$Email','$Message')";

    mysqli_query($conn,$insert);
    if($conn){
        echo("<h1 style='color:green;'>Your Registration is Done</h1>");
    }else{
        echo("<h1 style='color:red;'>Your Registration is failed</h1>");

    }
}
?>