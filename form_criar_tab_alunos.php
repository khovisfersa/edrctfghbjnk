<html>
	<body>
		<?php
			$conn = new mysqli('localhost',root,,myDB);

			if(@conn->connect_error)
				die("falha".$->connect_error);

			$sql = " CREATE TABLE alunos (
				d INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				nome_aluno VARCHAR(50) NOT NULL,
				curso_aluno VARCHAR(50) DEFAULT NULL,
				email_aluno VARCHAR(50) NOT NULL UNIQUE)";

			if ($conn->connect === TRUE)
				echo "tabela criada com sucesso!";
			else
				echo "teve treta. Refaça, por favor";

			$conn->close();
		?>
	</body>
</html>