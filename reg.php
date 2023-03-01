<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'memento');

$username = $_POST['username'];
$password = $_POST['password'];
$rpass = $_POST['rpassword'];

if($password==$rpass){
$q = " select * from login where username='$username'";
$result = mysqli_query($con,$q);

$num_of_same_users = mysqli_num_rows($result);

if($num_of_same_users == true){
    ?>
    <script>
        alert('Username not Available!')
        window.location.href = "index.php"
    </script>
    <?php
}
else{
    $qy = "insert into login(username , password) values ('$username' , '$password') ";
    mysqli_query($con,$qy);
    header("location:index.php");
}
}
else{
    ?>
    <script>
        alert("Passwords not matching!")
        window.location.href = "index.php"
    </script>
    <?php
}


?>
    

    
