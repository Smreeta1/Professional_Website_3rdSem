<?php
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Number=$_POST['Number'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];

//Database Connection
$conn=new mysqli("localhost","root","","contact details");
if($conn->connect_error)
{
    die("Connection Failed:".$conn->connect_error);
}
else
{
    $stmt=$conn->prepare("insert into contact(Name,Email,Number,Subject,Message) values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$Name,$Email,$Number,$Subject,$Message);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}



 

?>