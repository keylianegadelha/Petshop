<?php 
  echo "
  <html lang='pt-br'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <link rel='stylesheet' href='cadastroFuncionario.css'>
    
    <title>PetLove | Cadastrar Funcionário</title>
    </head>
    <body>
    
        <div id='fundo'></div>
        <div class='pag'>
            <h1>Cadastrar Funcionário</h1><br>
            <div>
                <div class='cadastro'>
                    <form>
                        <input class='input' type='text' name='nome' id='nome' placeholder='Nome completo'><br>
                        <label><input class='input' type='email' name='email' id='email' placeholder='Email'></label><br>
                        <label><input class='input' type='password' name='senha' id='senha' placeholder='Senha'></label><br>
                        <label><input class='input' type='password' name='conSenha' id='conSenha' placeholder='Confirmar senha'></label><br>
                        <button type='submit'>CADASTRAR</button><br>
                        <p> JÁ POSSUI UMA CONTA?</p><br>
                        <a id='login' href='loginFuncionario.php'>LOGIN</a>
                    </form>
                </div>
            </div>
        </div>
        
        <div id='logo'>
              <img src='icon/pet2.png'>
        </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
    </html>
  ";
?>
