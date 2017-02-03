<html>
  <head>adicionar aluno</head>
  <body>
    <form method = 'post' action = "">
  	Nome do aluno:<br>
  	<input type = "text" name = "nome"><br>
    Curso do aluno:<br>
  	<input type = "text" name ="curso"><br>
    Email do aluno:<br>
    <input type = "text" name = "usremail"><br>
    <input type = "submit" name = "adicionar">

    <?php

      $nome = $_POST['nome'];
      $curso = $_POST['curso'];
      $email = $_POST['usremail'];
    
    	$conn = new mysqli("localhost", "root",'','cvdd');

    	if($conn->connect_error)
    		die("connection failed".mysqli_connect_error());

      if(isset($_POST['adicionar']))
        $sql = "INSERT INTO alunos (nome_aluno, curso_aluno, email_aluno) VALUES ('$nome','$curso','$email')";

    	if ($conn->query($sql)===TRUE)
    		echo "curso adicionado!";
    	else
    		echo "tente novamente!";
  
    	$conn->close();

    ?>
  </body>
</html>