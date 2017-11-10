<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <title>Meu primeiro exemplo em PHP</title>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>   
    <body>
         <div class="container">
              <?php
              $titulo = 'produtos';
              ?>
              <h1>Página de <?php echo $titulo; ?></h1>
              <p>Lista de <?php echo $titulo; ?></p>
              <ul class="list-group">
              <?php
 
              /*
              * $i é uma variável contadora, ela começa com o valor de 1 ($i = 1)
              * e a cada repetição soma-se 1 a i ($i++). Encerra-se as repetições
              * quando i é menor ou igual a 10 ($i <= 10). Toda vez que esta repetição
              * é realizada, cria-se um item de lista (li) com o valor do contador $i
              */
 
                  for($i = 1; $i <= 10; $i++)
                  {
                      echo '<li class="list-group-item">Produto '. $i .'</li>';
                  }
              ?>
              </ul>
         </div>
    </body>
</html>