<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="styles.css" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <style>
    #si {
      display: none;
    }

    #li,
    #si {
      padding: 20px;
    }
  </style>
</head>

<body style="background-color: black">
  <!------------------------------- -----------------------------navbar----------------------------- ------------------------------->
  <nav class="navii navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand">CodePAd</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-auto">
          <li class="nav-item">
            <a class="nav-link" onclick="si('si','li')" style="cursor: pointer">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="si('li','si')" style="cursor: pointer">Sign-up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="cursor: pointer" onclick="showa()">About
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="lis" class="container">
    <!----------------------------------------------- log in form ----------------------------------------------->

    <div id="li" class="row" style="width: 50%; margin: auto">
      <h2 style="text-align: center">Log In</h2>
      <form action="val.php" method="post">
        <div class="form-group">
          <input placeholder="Enter Username" type="text" name="username" class="form-control" required />
        </div>
        <br />

        <div class="form-group">
          <input placeholder="Enter Password" type="password" name="password" class="form-control" required />
        </div>
        <br />
        <button class="btn btn-dark">Log In</button>
        <a onclick="si('li','si')" style="
              text-decoration: none;
              cursor: pointer;
              color: gray;
              margin-left: 50%;
            ">Register now!</a>
      </form>
    </div>
    <!--------------------------------------------- sign in form --------------------------------------------------------------------->
    <div class="row" id="si" style="width: 50%; margin: auto;">
      <h2 style="text-align: center">Sign In</h2>
      <form action="reg.php" method="post">
        <div class="form-group">
          <input type="text" placeholder="Create Username" name="username" class="form-control" required />
        </div>
        <br />
        <div class="form-group">
          <input placeholder="Create Password" type="password" name="password" class="form-control" required />
        </div>
        <br />
        <div class="form-group">
          <input placeholder="Re-enter Password" type="password" name="rpassword" class="form-control" required />
        </div>
        <br />
        <button class="btn btn-dark">Sign In</button>
        <p>
          Already an user?
          <a onclick="si('si','li')" style="text-decoration: none; cursor: pointer; color: gray">Log In!</a>
        </p>
      </form>
    </div>
  </div>
  <!-- ---------------------------------------------dbox for about--------------------------------------------- -->
  <div class="container" id="abt">
    <p style="color: aqua">
      CodePAd - An application where you can store your valuable programming notes. 
    </p>
    <p>
      <a onclick="closa()" style="text-decoration: none; cursor: pointer">❌</a>
    </p>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

<script>
  document.getElementById("abt").style.display = "none";
  document.getElementById("li").style.display = "block";
  function si(a, b) {
    document.getElementById(a).style.display = "none";
    document.getElementById(b).style.display = "block";
  }
  function showa() {
    document.getElementById("abt").style.display = "block";
    document.getElementById("lis").style.opacity = "20%";
    document.getElementById("navii").style.opacity = "20%";
    document.getElementById("lis").style.zIndex = "-1";
    document.getElementById("navii").style.zIndex = "-1";
  }
  function closa() {
    document.getElementById("abt").style.display = "none";
    document.getElementById("lis").style.opacity = "initial";
    document.getElementById("navii").style.opacity = "initial";
    document.getElementById("lis").style.zIndex = "initial";
    document.getElementById("navii").style.zIndex = "initial";
  }
</script>

</html>