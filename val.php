<?php
// starting session
session_start();
// connecting to local host ... root is device name
$con = mysqli_connect('localhost','root');
// checking conn
if($con){
    echo "conn success <br>";
}
else{
    echo "conn not success";
}
// conn to db
mysqli_select_db($con,'memento');

// collect data from form
$username = $_POST['username'];
$password = $_POST['password'];
// passing query 
$q = " select * from login where username='$username' && password='$password' ";
// firing query
$result = mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
if($row==true){
    $_SESSION['username'] = $row['username'];
    $_SESSION['type'] = $row['type'];
    $_SESSION['id'] = $row['id'];
    header('location:home.php');
}
else{
    ?>
    <script>
        alert("Incorrect Usrename or Password!")
        window.location.href = "index.php"
    </script>
    <?php
    
}



?>
