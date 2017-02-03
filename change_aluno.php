<html>
  <head>alteração de status</head>
  <body>
  	Nome do aluno:<br>
  	<input type = "text" name = "nome">
    Curso do aluno:<br>
    <input type = "text" name = "curso">
    Email do aluno:<br>
    <input type = "email" name = "usremail"><br>
  	<input type = "submit" name ="adicionar">

    <?php
    
    	$conn = new mysqli("localhost", "root",'','cvdd');

    	if($conn->connect_error)
    		die("connection failed".mysqli_connect_error());
    	$sql = "UPDATE aluno 
      SET aluno_nome = $_POST['nome'],
       aluno_curso = $_POST['curso'],
       aluno_email = $_POST['email']
       WHERE nome_aluno = $_POST['nome']";

    	if ($conn->query($sql)===TRUE)
    		echo "aluno alterado adicionado!";
    	else
    		echo "tente novamente!";
    	$conn->close();

    ?>
  </body>
</html>