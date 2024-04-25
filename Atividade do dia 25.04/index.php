<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
   <style>
       #bot {
           margin-left: 90px;
           padding: 10px;
       }
   </style>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="script.php" method="POST">
      Nome:   <input type="text" name="nome"> <br>
      Email:  <input type="email" name="email"> <br>
      Senha:  <input type="password" name="senha"> <br> <br>
              <input type="submit" name="Enviar" id="bot">
    </form>
</body>
</html>