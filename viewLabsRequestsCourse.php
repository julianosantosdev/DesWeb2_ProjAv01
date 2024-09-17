<?php
  require("checkSession.php");

  if($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET["selectedCourse"] == "GE") {
      $handle = fopen("GE.txt", "r");
    }

    if ($_GET["selectedCourse"] == "DSM") {
      $handle = fopen("DSM.txt", "r");
    }
   }
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
        <form acttion="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="GET">
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
            <?php if ($_GET["selectedCourse"]):
              echo ('<h2>Solicitações dos Laboratórios de ' . $_GET["selectedCourse"] . '</h2>');
              while (!feof($handle)) {
                $line = '<li>' . fgets($handle) . '</li>';
                echo $line;
              }
              fclose($handle);?>   
            <?php endif; ?>
          </ul>
        </section>
      </section>
      
    </main>  
  </body>
</html>