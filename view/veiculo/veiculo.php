<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../global.css" rel="stylesheet">
    <link href="menu.css" rel="stylesheet">
    <title>Rodar | Aluguel de Veículos</title>
    <title>Document</title>
</head>
<body>
  <div class="nav">
    <div class="titulo">RODAR</div>
    <div class="buscar">
      <span class="material-icons buscarIcone">
        search
      </span>
      <input class="" name="buscar" placeholder="Buscar veículos">
    </div>
    <div class="nav-direita">
      <a class="perfil" href="#">
        <span class="material-icons">
          account_circle
        </span>
        <p><?php echo $nomePerfil?></p>
      </a>
      <a class="sair" href="../login/login.php">
        <span class="material-icons">
          logout
        </span>
      </a>
    </div>
  </div>
</body>
</html>