<html>
  <head>buscar aluno</head>
  <body>
    <form method = 'post' action = "">
  	Digite o nome ou Email do aluno:
    <input type = "text" name = "busca">
    </form>  

    <?php

      $busca = $_POST['busca']; 
      

    	$conn = new mysqli("localhost", "root",'','cvdd');

    	if($conn->connect_error)
    		die("connection failed".mysqli_connect_error());

      $sql = "SELECT id, nome_aluno, curso_aluno, email_aluno FROM alunos";

      $result = $conn->query($sql);

      if ($result->num_rows>0)
      {
        while($row = $result->fecth_assoc())
        {
          echo "id: ".$row["id"]."  nome do aluno: ".$row["nome"]."  curso: ".$row["curso"]."  email: ".$row["email"];
        }
      }
      else 
        echo "0 resultados encontrados";
        
  
    	$conn->close();

    ?>
  </body>
</html>