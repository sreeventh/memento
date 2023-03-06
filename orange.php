<?php
session_start();


if (!isset($_SESSION["username"])) {
    header('location: index.php');
}

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'memento');



if (isset($_POST["Submit"])) {

    $tdata = "insert into idea values ($_SESSION[id], '$_POST[subject]' , '$_POST[body]' , NULL) ";
    $update_result = mysqli_query($con, $tdata) or die('Unable to execute query. ' . mysqli_error($con));
    ?>
    <script>
        alert("Idea noted down!")
    </script>
    <?php
}


?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

<head>
    <title>IDEA</title>
    <style>
        body {
            background-color: black;
            color: #eee;
            font-family: Arial, sans-serif;
        }

        form {
            width: 80%;
            margin: 100px auto;
            padding: 20px;
            background-color: rgb(1, 39, 50);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            background-color: black;
            color: #eee;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            font-size: 16px;
            border: none;
            background-color: black;
            color: #eee;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: black;
            color: #eee;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: orange;
        }

        #done {
            background-color: black;
            color: #eee;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #done:hover {
            background-color: orange;
        }
    </style>
</head>

<body>
    <form action="" method="post" name="idea" id="idea">
        <label for="subject">IDEA</label>
        <input type="text" id="subject" name="subject" required>
        <textarea id="body" name="body"></textarea>
        <input type="submit" name="Submit" value="Submit">
    </form>
    <a href="home.php" style="text-decoration: none;color: white;">Done</a>

</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</html>