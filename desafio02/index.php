<?php
  $httpsErros = array(100,101,200,201,202,204,206,207,300,301,302,303,304,305,307,400,401,402,403,404,405,406,408,409,410,411,412,413,414,415,416,417,418,420,424,425,426,429,431,444,450,451,499,500,501,502,503,504,506,507,508,509,510,511,599);
  $https_key = array_rand($httpsErros, 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cats Https</title>
  <link rel="stylesheet" href="../desafio02/style.css">
</head>
<body>
  <div class="conteudo">
    <a href="<?php $_SERVER['PHP_SELF'];?>">
      <ul>
        <li><span>Novo Http Status</span></li>
      </ul>
    </a>
      <hr>
    <img src="https://http.cat/<?php echo $httpsErros[$https_key];?>" alt="Cat Status">
  </div>
</body>
</html>