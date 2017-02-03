<html>
  <body> 
    <?php
    $sql = "CREATE DATABASE alunos";

    if ($conn->query($sql)===TRUE)
      echo "database criada";
    else
      echo "teve treta na criação do DB".$conn->error;
    $conn->close();
    ?>
  </body>
</html>