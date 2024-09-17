<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Solicitações</title>
  </head>
  <body>
    <section>
        <ul>
          <?php
            echo ('<h2>Solicitações dos Laboratórios de DSM</h2>');
            $dsm = fopen("DSM.txt", "r");
            while (!feof($dsm)) {
              $line = '<li>' . fgets($dsm) . '</li>';
              echo $line;
            }
            fclose($dsm);
          ?>
        </ul>
        <ul>
          <?php
            echo ('<h2>Solicitações dos Laboratórios de GE</h2>');
            $dsm = fopen("GE.txt", "r");
            while (!feof($dsm)) {
              $line = '<li>' . fgets($dsm) . '</li>';
              echo $line;
            }
            fclose($dsm);
          ?>   
        </ul>
        </ul>
      </section>
      <a href=""></a>    
  </body>
</html>