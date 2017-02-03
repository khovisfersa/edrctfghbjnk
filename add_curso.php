<html>
  <head>adicionar curso</head>
  <body>
  	Nome do curso:<br>
  	<input type = "text" name = "nome">
  	<input type = "submit" name ="adicionar">

    <?php
    
    	$conn = new mysqli("localhost", "root",'','cvdd');

    	if($conn->connect_error)
    		die("connection failed".mysqli_connect_error());
    	$sql = "INSERT INTO cursos( nome_curso) VALUES ($_POST['nome'])";

    	if ($conn->query($sql)===TRUE)
    		echo "curso adicionado!";
    	else
    		echo "tente novamente!";
    	$conn->close();

    ?>
  </body>
</html>