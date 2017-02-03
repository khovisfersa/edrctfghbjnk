
<html>
  <head>Gerenciamento</head>
  <body> 
    <form method = "post" action = "gerencia_alunos.html">
    	gerenciar alunos<br>
 		<input type = "submit" name = "gerenciar alunos">
    </form>
    <form method = "post" action = "gerenciar_cursos.html">
    	gerenciar cursos<br>
    	<input type = "submit" name = "gerenciar cursos">
    </form>
    <?php
    //cria o banco de dados

    $conn = new mysqli('localhost','root','');

    if($conn->connect_error)
    	die ("connection error   ".mysqli_connect_error());
    else
    	echo "connectado com sucesso!";


    $sql = "CREATE DATABASE cvdd";

    if ($conn->query($sql)===TRUE)
      echo "database criada";
    else
      echo "teve treta na criação do DB".$conn->error;
    $conn->close();

    //cria a tabela de alunos no banco de dados


    $conn = new mysqli('localhost','root','','cvdd');

	if($conn->connect_error)
		die("falha".$conn->connect_error);

	$sql = " CREATE TABLE alunos (
		id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_aluno VARCHAR(50) NOT NULL,
		curso_aluno VARCHAR(50) DEFAULT NULL,
		email_aluno VARCHAR(50) NOT NULL UNIQUE)";

	if ($conn->query($sql) === TRUE)
		echo "tabela criada com sucesso!";
	else
		echo "teve treta. Refaça, por favor";

	$conn = new mysqli('localhost','root','','cvdd');

	if($conn->connect_error)
		die("falha".$conn->connect_error);

	//cria a tabela de cursos no banco de dados

	$sql = " CREATE TABLE cursos (
		id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_curso VARCHAR(50) NOT NULL,
		status_curso TINYINT(1) NOT NULL (DEFAULT 1))";

	if ($conn->query($sql) === TRUE)
		echo "tabela criada com sucesso!";
	else
		echo "teve treta. Refaça, por favor";

	$conn->close();
    ?>
  </body>
</html>