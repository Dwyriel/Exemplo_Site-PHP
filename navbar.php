<?php include "../config.php"; ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../background.css">
    <title><?php echo $pagtitle; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light mb-2" style="background-color: rgba(95, 95, 95, 0.85)">
  <div class="container">
    <a class="navbar-brand" href="index.php"><strong>%Site%</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link btn btn-outline-light mx-2 border-0" href="index.php">Início </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link btn btn-outline-light mx-2 border-0" href="Artigos.php">Artigos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link btn btn-outline-light mx-2 border-0" href="NewMsg.php">Contato</a>
        </li>
      </ul>
      <ul class="navbar-nav">
      <?php if(empty($_SESSION["id"])){ ?>
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-light mx-2 border-0" href="login.php">Log in</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-light mx-2 border-0" href="NewAcc.php">Nova conta</a>
            </li>
      <?php }elseif(!empty($_SESSION["id"])){ ?>
          <div class="" style="color: white;">
            <img src="../userimg/<?php echo $_SESSION["profimg"]; ?>" width="40px" height="40px">
          </div>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle btn btn-outline-light mx-2 border-0" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["login"]; ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <?php if($_SESSION["admin"] == 0) { ?>
              <a class="dropdown-item" href="Admin.php">Admin Acess</a>
            <?php } ?>
            <a class="dropdown-item" href="Editaracc.php">Editar conta</a>
            <a class="dropdown-item" href="../back-end/signout.php">Log out</a>
          </div>
        </li>
      <?php } ?>
          </ul>
    </div>
  </div>
</nav>