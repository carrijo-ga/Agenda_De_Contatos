<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css" type="text/css">

  <title>Agenda de Contatos</title>
</head>

<body>
  <!-- Navbar -->
  <header>
    <a class="nav-brand" href="#"></a>
    <nav class="navbar-person">
      <ul class="navbar-itens">
        <li>
          <a class="nav-item" href="index.php"><span class="nav-span">Home</span></a>
        </li>
        <li>
          <a class="nav-item" href="pages/contatos.php"><span class="nav-span">Contatos</span></a>
        </li>
        <li>
          <a class="nav-item" href="pages/cidades.php"><span class="nav-span">Cidades</span></a>
        </li>
        <li>
          <a class="nav-item" href="pages/tiposdecontatos.php"><span class="nav-span">Tipos de Contatos</span></a>
        </li>
      </ul>
    </nav>
    <div class="nav-line"></div>
  </header>

  <div class="container">

    <!-- Carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/3.jpg" class="carousel-img d-block w-100" alt="..." width="30%">
        </div>
        <div class="carousel-item">
          <img src="images/2.jpg" class="carousel-img d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/1.jpg" class="carousel-img d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="line"></div>

    <!-- Cards -->
    <div class="card">
      <img src="images/3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Contatos</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img src="images/planner.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cidades</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img src="images/phone.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tipos de Contatos</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="alert alert-info" role="alert">
        <strong>Agenda de Contatos</strong> | Desenvolvido por Gabriel Carrijo | Direitos Reservados &copy;
      </div>
    </footer>
  </div>

  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>