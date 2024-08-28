<?php
$Pname= $_POST['Pname'];
$Pno= $_POST['Pno'];
$Email= $_POST['Email'];
$Mhistory= $_POST['Mhistory'];
$Age= $_POST['Age'];
$Address= $_POST['Address'];


$conn = new mysqli('localhost','root','','Sdc');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into patient_info(Pname,Pno,Email,Mhistory,Age,Address)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sissis",$Pname,$Pno,$Email,$Mhistory,$Age,$Address);
    $stmt->execute();
    echo"Registration Successfully....!";
    $stmt->close();
    $conn->close();
}
?>
