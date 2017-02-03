<html>
  <head> Gerenciamento de cursos</head>
  <body>
    <h1>adicionar curso<h1>
    <form method = "post" action = "add_aluno.php">
      Digite o nome do aluno que deseja adicionar :<br>
      <input type = "text" name = "aluno"><br>
      Digite o curso do aluno:<br>
      <input type = "text" name = "curso"><br>
      Digite o e-mail do aluno a ser adicionado:<br>
      <input type = "email" name = "usrmail"><br>
      <input type = "submit" name = "adicionar aluno">
    </form>
    <h1>alterar curso<h1>
    <form method = "post" action = "change_aluno.php">
      Digite o nome do aluno o qual deseja alterar as informações:<br>
      <input type = "text" name = "aluno">
      <input type  = "submit" name = "alterar status">
    </form> 
  </body>
</html>