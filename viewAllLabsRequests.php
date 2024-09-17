<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/viewRequests.css">
    <title>Relatório de Solicitações</title>
  </head>
  <body>
    <main>
      <section>
        <a href="dashboard.php">Voltar</a>
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
    </main>

  </body>
</html>