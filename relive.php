<?php
session_start();


if (!isset($_SESSION["username"])) {
    header('location: index.php');
}

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'memento');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Document</title>
    <style>
        .card {
            background-color: #1d1d1d;
            color: #fff;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .entry {
            width: calc(50% - 10px);
            margin-bottom: 20px;
        }

        .entry h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .entry p {
            font-size: 18px;
            line-height: 1.5;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body style="background-color: black;">
    <div class="card">
        <div class="entry">
            <h3 id="idb" style="color: orange;">Ideas</h3>
        </div>
        <div class="entry">
            <h3 style="color: green;">JavaScript</h3>
        </div>
        <div class="entry">
            <h3 style="color: yellow;">PHP_Mysql</h3>
        </div>
    </div>

    <!-- ----------------------------------------------ideas ------------------------------------------------>
    <div id="ideabox" class="hidden">
        <h3 style="text-align: center;">IDEA</h3>
        <?php
        $count = 0;
        $res = mysqli_query($con, "select * from idea where uid='$_SESSION[id]'");
        while ($row = mysqli_fetch_array($res)) {
            $count += 1;
            ?>
            <div class="card">
                <div class="entry">
                    <h3 style="color: orange;">
                        <?php echo $row['isub'] ?>
                    </h3>
                    <p>
                        <?php echo $row['ibod'] ?>
                    </p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

</body>

<script>
    const ideasHeading = document.getElementById("idb");
    const ideasForm = document.getElementById("ideabox");

    ideasHeading.addEventListener("click", () => {
        ideasForm.classList.toggle("hidden");
    });


</script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</html>