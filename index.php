<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sleep</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">SLEEP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">HOW TO SLEEP ? coming soon</a>
        </li>
        
        </ul>
        <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['id'])) { ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">SLEEP</a>
            <a class="dropdown-item" href="#">Dashborad</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
        <?php } else {?>
        <li class="nav-item">
            <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">LOGIN</a>
        </li>
        <?php } ?>
        </ul>
        
    </div>
    </div>
    </nav>

    <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">WELCOME TO SLEEP WORLD</h1>
      <p class="lead text-muted">We will teach you how to sleep, dream, to enjoy life.</p>
      <p>
      <?php if (isset($_SESSION['id'])) { ?>
        <a href="logout.php" class="btn btn-primary my-2">LOGOUT</a>
        <a href="#" class="btn btn-secondary my-2"><?php echo $_SESSION['name']?></a>
      <?php } else{?>

      <a href="login.php" class="btn btn-primary my-2">LOGIN</a>
      <a href="#" class="btn btn-secondary my-2">Please login first.</a>
      <?php } ?>
      </p>
    </div>
  </section>


  <div class="feature-section">
    <div class="container">
        <div class="text-center mb-5">
            <h5>Feature</h5>
            <h2>WELCOME TO SLEEP</h2>
            <p>We will teach you how to sleep, dream, to enjoy life.</p>
        </div>
        <div class="row">
            <div class="col-md6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="img/sleep1.jpg" class="card-img-top" alt="Weapon">
                    <div class="card-body text-center px-0 pb-0">
                        <h4 class="card-title">Sleep</h4>
                        <p class="card-text">Sleep is life and life is happiness, sadness</p>
                    </div>
                </div>
            </div>
            <div class="col-md6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="img/sleep2.jpg" class="card-img-top" alt="Weapon">
                    <div class="card-body text-center px-0 pb-0">
                        <h4 class="card-title">Sleep</h4>
                        <p class="card-text">Sleep is life and life is happiness, sadness</p>
                    </div>
                </div>
            </div>
            <div class="col-md6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="img/sleep3.jpg" class="card-img-top" alt="Weapon">
                    <div class="card-body text-center px-0 pb-0">
                        <h4 class="card-title">Sleep</h4>
                        <p class="card-text">Sleep is life and life is happiness, sadness</p>
                    </div>
                </div>
            </div>
            <div class="col-md6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="img/sleep4.jpg" class="card-img-top" alt="Weapon">
                    <div class="card-body text-center px-0 pb-0">
                        <h4 class="card-title">Sleep</h4>
                        <p class="card-text">Sleep is life and life is happiness, sadness</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  

    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>