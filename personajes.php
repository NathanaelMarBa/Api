<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles.css">
    <title>Personajes</title>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li>
          <a href="index.php"><img src="logo.png" alt="100px" width="100px" class="d-inline-block align-text-top" href="index.php"></a>
        </li>
        <li class="nav-item top">
          <h4> <a class="nav active a" aria-current="page" href="personajes.php">Personajes</a> </h4>
        </li>
        <li class="nav-item top">
          <h4> <a class="nav active a" href="capitulos.php">  Capitulos</a> </h4>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class = Personajes>
        <div class="container text-end ">
            <div class="row justify-content-end">
                <?php
                require('funciones.PHP');
                ObtenerPersonajes();
                ?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>