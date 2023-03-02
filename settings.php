<?php
session_start();


if (!isset($_SESSION["username"])) {
    header('location: index.php');
}

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'memento');

if (isset($_POST["sblue"])) {
    mysqli_query($con, "insert into preflang(uid , blue , stat) values('$_SESSION[id]' , '$_POST[Blueprogramming]' , 1)") or die('Unable to execute query. ' . mysqli_error($con));
    ?>
    <script>
        alert("success")
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
</head>

<body>
    <h2>Set ur pref lang</h2>
    <form action="" method="post" name="pref" id="pref"></form>
    <label for="Blueprogramming">BLUE</label>
    <select form="pref" id="Blueprogramming" name="Blueprogramming">
        <option value="Python">Python</option>
        <option value="Java">Java</option>
        <option value="JavaScript">JavaScript</option>
        <option value="C++">C++</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">Ruby</option>
        <option value="Swift">Swift</option>
        <option value="Objective-C">Objective-C</option>
        <option value="C#">C#</option>
        <option value="Go">Go</option>
    </select>
    <br><br>
    <?php
    $q = " select * from preflang where uid='$_SESSION[id]'";
    $res = mysqli_query($con, $q);
    while ($row = mysqli_fetch_array($res)) {
        $red = $row['red'];
        $stat = $row['stat'];
    }

    if (!isset($stat)) {
        ?>
        <input id="sblue" form="pref" type="submit" value="Submit" name="sblue">
        <?php
    } else {
        ?>
        <script>
            document.getElementById("sblue").style.display = "none"
        </script>
        <?php
    }

    ?>


    <a href="home.php">go home</a>


</body>

</html>