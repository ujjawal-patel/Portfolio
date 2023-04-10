<?php

#echo "Welcome";
if(isset($_POST['uname']))
{
    #echo "HII";
    $_SERVER="localhost";
    $username="root";
    $password="";
    $database="portfolio";
    $connect=mysqli_connect($_SERVER,$username,$password,$database);

    if(!$connect)
    {
       die(mysqli_connect_error());
    }
    
    #echo "<br>";
    #echo "Connected";
}

$name=$_POST['uname'];
$mail=$_POST['email'];
$contact=$_POST['number'];
$message=$_POST['msg'];

#echo "<br>";
 $sql="INSERT INTO `userinformation`(`Name`, `E-mail`, `Phone`, `Message`) VALUES ('$name','$mail','$contact','$message')";

$query=mysqli_query($connect,$sql);
if($query)
{
    echo "Message sent sucessfully";
}
else
{
    echo "LOcho";
}

?>