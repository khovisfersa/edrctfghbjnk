<html>
  <head>alteração de status</head>
  <body>
  	Nome do curso:<br>
  	<input type = "text" name = "nome">
  	<input type = "submit" name ="adicionar">

    <?php
    
    	$conn = new mysqli("localhost", "root",);

    	if($conn->connect_error)
    		die("connection failed".mysqli_connect_error());
    	$sql = "UPDATE cursos SET status_curso = !status_curso WHERE nome_curso = $_POST["nome"]";

    	if ($conn->query($sql)===TRUE)
    		echo "curso adicionado!";
    	else
    		echo "tente novamente!";
    	$conn->close();

    ?>
  </body>
</html>