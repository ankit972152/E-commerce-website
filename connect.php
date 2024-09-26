<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
?>
// database connection
$conn = new mysqli('localhost','root','','login');
if($conn->connect-error){
    die('connection failed:' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName,lastName,email,password,number)
    values(?,?,?,?,?,?)");
    $stmt->bind_parm("ssssi",$firstName, $lastName,$email,$password,$number);
    $stmt->execute();
    echp "registration successful...";
    $stmt->close();
    $stmt->close();

}
    

