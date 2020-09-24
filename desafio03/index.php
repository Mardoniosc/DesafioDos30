<?php
  function resultadosAnimes($search){
    $API_URL = 'https://api.jikan.moe/v3/search/anime?q=' . $search;
    $RESULTADO = file_get_contents($API_URL);
    $RESULTADO_OBJ = json_decode($RESULTADO);
    $ANIMES = $RESULTADO_OBJ->results;
    return $ANIMES;
  }

  $DADOS = NULL;

  if(($_POST['termo'])){
    $DADOS = resultadosAnimes($_POST['termo']);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Busca Anime</title>
  <link rel="stylesheet" href="../desafio03/style.css">
</head>
<body>
  <div class="conteudo">
    <h1>Desafio 03</h1>
    <?php if($DADOS == NULL) { ?>
      <form id="form" action="../desafio03/index.php" method="post">
        <input type="text" name="termo" id="termo" placeholder="Goku">
      </form>
      <br>
      <a href="#" class="face-button" onClick="document.getElementById('form').submit();">
        <div class="face-primary">
          Buscar
        </div>
        <div class="face-secondary">
          Animes
        </div>
      </a>
    <?php } else { 
      echo '<a href="../desafio03/index.php"><div id="btn"><span class="noselect">Nova Consulta</span><div id="circle"></div></div></a>';
      foreach($DADOS as $anime){ ?>
      <br>
      <strong>
        <?php echo $anime->title;?> - classificação: <?php echo $anime->score;?>
      </strong>
      <a href="<?php echo $anime->url;?>" target="_blank">
        <img src="<?php echo $anime->image_url;?>" alt="">
      </a>
      <?php } } ?>
      <hr>

  </div>
</body>
</html>