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
            if (!file_exists("DSM.txt")) {
              $line = '<li>' . 'Sem registros para DSM' . '</li>';
              echo $line;
            } else {
              $dsm = fopen("DSM.txt", "r");
              while (!feof($dsm)) {
                $line = '<li>' . fgets($dsm) . '</li>';
                echo $line;
              }
              fclose($dsm);
            }
          ?>
        </ul>
        <ul>
          <?php
            echo ('<h2>Solicitações dos Laboratórios de GE</h2>');
            if (!file_exists("GE.txt")) {
              $line = '<li>' . 'Sem registros para GE' . '</li>';
              echo $line;
            } else {
              $ge = fopen("GE.txt", "r");
              while (!feof($ge)) {
                $line = '<li>' . fgets($ge) . '</li>';
                echo $line;
              }
              fclose($ge);
            }
          ?>   
        </ul>
        </ul>
        </section>
    </main>

  </body>
</html>