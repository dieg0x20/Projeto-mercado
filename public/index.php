
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
  .cardsList{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 20px;

  }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=424,fit=crop,q=95/mnlnbgbxRrurq9l9/logos-chap-corel-kj-e-ss-AzGj4ggj88TNRZVd.png" alt="" style="width: 200px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-ecurrent="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lojas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="cardsList">
  <div class="card btn" style="width: 18rem; padding: 10px; margin: 10px;">
    <img src="../assets/imagens/LOGO KJ.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Loja Ki Jóia</h5>
      <form action="../views/home.php" method="get"> <input type="hidden" name="id" value="1"> <button type="submit" class="btn btn-primary">Ver detalhes</button>
      </form>
    </div>
  </div>
  <div class="card btn" style="width: 18rem; padding: 10px; margin: 10px;">
    <img src="../assets/imagens/LOGO SS.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Loja Super Seu Boa Vista</h5>
      <form action="../views/home.php" method="get"> <input type="hidden" name="loja_id" value="2"> <button type="submit" class="btn btn-primary">Ver detalhes</button>
      </form>
    </div>
  </div>
  <div class="card btn" style="width: 18rem; padding: 10px; margin: 10px;">
    <img src="../assets/imagens/LOGO SS.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Loja Super Seu Vila Nova</h5>
      <form action="../views/home.php" method="get"> <input type="hidden" name="loja_id" value="3"> <button type="submit" class="btn btn-primary">Ver detalhes</button>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
