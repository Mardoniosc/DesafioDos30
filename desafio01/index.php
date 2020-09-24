<?php
  $URL_API = 'https://dog.ceo/api/breeds/image/random';
  $RESULTADO = file_get_contents($URL_API);
  $RESULTADO_OBJ = json_decode($RESULTADO);
  $IMAGEM = ($RESULTADO_OBJ->message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 01 DOG</title>
  <link rel="stylesheet" href="../desafio01/desafio01.css">
</head>
<body>
  <div class="container">
    <div class="container-conteudo">
      <h1>Desafio 01</h1>
      <img src="<?php echo $IMAGEM;?>" alt="DOG">
      <a href="<?php $_SERVER['PHP_SELF'];?>">
        <button>Nova Imagem</button>
      </a>
    </div>
  </div>
</body>
</html>