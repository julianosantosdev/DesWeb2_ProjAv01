<?php
  require("checkSession.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/viewRequests.css">
    <title>Visualizar Solicitações por curso</title>
  </head>
  
  <body>
    <main>
      <section>
        <a href="dashboard.php">Voltar</a>
        <form acttion="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="POST">
          <label for="course">Curso: </label>
          <select name="selectedCourse" id="course">
            <option default value="">Selecione o Curso</option>
            <option value="GE">GE</option>
            <option value="DSM">DSM</option>
          </select>
          <input type="submit" class="submitButton" value="Ver Solicitações">
        </form>

        <section>
          <ul>
          <?php if($_SERVER["REQUEST_METHOD"] == "POST"):
              if (isset($_POST["selectedCourse"]) && $_POST["selectedCourse"] != "" && file_exists($_POST["selectedCourse"] . '.txt')) {
                echo ('<h2>Solicitações dos Laboratórios de ' . $_POST["selectedCourse"] . '</h2>');
                $handle = fopen($_POST["selectedCourse"] . '.txt', "r");
                while (!feof($handle)) {
                  $line = '<li>' . fgets($handle) . '</li>';
                  echo $line;
                }
                fclose($handle); 
              } else {
                $line = '<li>' . 'Sem registros' . '</li>';
                echo $line;
              }
              ?>
            <?php endif; ?>
          </ul>
        </section>
      </section>
      
    </main>  
  </body>
</html>