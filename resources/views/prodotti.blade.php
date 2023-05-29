<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Primo Ex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
  </head>
  <body>
    <!-- INIZIO NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="\">TechSUM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/prodotti">Prodotti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ilnostroblog">Il nostro blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- FINE NAVBAR -->
    <h1>BENVENUTO GUARDA PURE I NOSTRI PRODOTTI</h1></H1>

    <h1 class="colorYellow">Prodotti</h1>



<div class="container">
  <div class="row">
    @foreach($prodotti as $articolo)
    <div class="col-12 col-md-4 mt-3 my-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$articolo ['nome']}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$articolo ['prezzo']}}</h6>
          <p class="card-text">{{$articolo ['descrizione']}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="/JS/script.js"></script>
  </body>
</html>