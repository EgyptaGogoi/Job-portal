<?php

$server='localhost';
$username='root';
$password='aeaspire';
$database='jobs';

$conn= new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);

}
echo "";

if( isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $number=$_POST["phone_no"];
    $sql= "INSERT INTO `users` (`Name`, `email`, `Password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn,$sql))
    {
        echo "Thank you for signing up!";
    }
    else
    {   
        echo "ERROR: $sql. ". mysqli_query($conn);
    }
}

if(isset($_POST["login"])){
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM `users` WHERE `email` ='$email' AND `Password` = '$password'";
    $result=mysqli_query($conn,$query);
    if($result->num_rows > 0){
        while($rows=$result->fetch_assoc()){
            if($email==$rows['email'] && $password == $rows['Password']){
                include_once 'index.php';
            }
        }
    }
        
    else{
        $error = "email id or password is incorrect";
    }
}

if(isset($_POST["job"])){
    $cname=$_POST["cname"];
    $pos=$_POST["pos"];
    $jdesc=$_POST["jdesc"];
    $skills=$_POST["skills"];
    $CTC=$_POST["CTC"];
    
    $sql="INSERT INTO `jobs`(`cname`, `position`, `jdesp`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
    
    if(mysqli_query($conn,$sql))
    {
        include_once 'index.php';
        exit();
    }
    else
    {
        echo "ERROR:Failed to post the job :$sql. ". mysqli_query($conn);
    }
}

if(isset($_POST["sapply"]))
{
    $name=$_POST["name"];
    $apply=$_POST["apply"];
    $qual=$_POST["qual"];
    $year=$_POST["year"];
    $sql="INSERT INTO `candidates`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    mysqli_query($conn,$sql);
}
mysqli_close($conn);
?>