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
  <script src="https://kit.fontawesome.com/20fce6cb0e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <title>Document</title>
</head>

<body style="background-color: black;">
  <nav class="menu">
    <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
    <label class="menu-open-button" for="menu-open" style="background-color:rgb(1, 39, 50);">
      <span class="lines line-1"></span>
      <span class="lines line-2"></span>
      <span class="lines line-3"></span>
    </label>

    <a href="blue.php" class="menu-item blue" style="text-decoration: none;"><i id="blul" class=""></i></a>
    <a href="green.php" class="menu-item green" style="text-decoration: none;"><i
        class="fa-brands fa-square-js"></i></a>
    <a href="red.php" class="menu-item red" style="text-decoration: none;"><i class="fa-brands fa-react"></i></a>
    <a href="purple.php" class="menu-item purple" style="text-decoration: none;"><i
        class="fa-brands fa-node-js"></i></a>
    <a href="orange.php" class="menu-item orange" style="text-decoration: none;">⁉</a>
    <a href="relive.php" class="menu-item lightblue" style="text-decoration: none;"><i class="fa-solid fa-book"></i></a>
  </nav>
  <br>
  <a href="settings.php" class="menu-item lightblue" style="text-decoration: none;">settings</a>
</body>

<?php
$q = " select * from preflang where uid='$_SESSION[id]'";
$res = mysqli_query($con, $q);
while ($row = mysqli_fetch_array($res)) {
  $blue = $row['blue'];
}
// ***************************************************RED***************************************************
if (isset($blue)) {


  if ($blue == "Python") {
    ?>
    <script>
      document.getElementById("blul").setAttribute("class", "fa-brands fa-python")
    </script>
    <?php
  } else if ($blue == "Java") {
    ?>
      <script>
        document.getElementById("blul").setAttribute("class", "fa-brands fa-java")
      </script>
    <?php
  } else if ($blue == "JavaScript") {
    ?>
        <script>
          document.getElementById("blul").setAttribute("class", "fa-brands fa-js")
        </script>
    <?php
  } else if ($blue == "C++") {
    ?>
          <script>
            document.getElementById("blul").setAttribute("class", "fa-solid fa-c")
          </script>
    <?php
  } else if ($blue == "PHP") {
    ?>
            <script>
              document.getElementById("blul").setAttribute("class", "fa-brands fa-php")
            </script>
    <?php
  } else if ($blue == "Ruby") {
    ?>
              <script>
                document.getElementById("blul").setAttribute("class", "fa-sharp fa-solid fa-gem")
              </script>
    <?php
  } else if ($blue == "Swift") {
    ?>
                <script>
                  document.getElementById("blul").setAttribute("class", "fa-brands fa-swift")
                </script>
    <?php
  } else if ($blue == "Objective-C") {
    ?>
                  <script>
                    document.getElementById("blul").setAttribute("class", "fa-solid fa-o")
                  </script>
    <?php
  } else if ($blue == "C#") {
    ?>
                    <script>
                      document.getElementById("blul").setAttribute("class", "fa-solid fa-hashtag")
                    </script>
    <?php
  } else if ($blue == "Go") {
    ?>
                      <script>
                        document.getElementById("blul").setAttribute("class", "fa-brands fa-golang")
                      </script>
    <?php
  } else {
    ?>
                      <script>
                        document.getElementById("blul").setAttribute("class", "fa-solid fa-dragon")
                      </script>
    <?php
  }
} else {
  ?>
  <script>
    document.getElementById("blul").setAttribute("class", "fa-solid fa-dragon")
  </script>
  <?php
}
?>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>