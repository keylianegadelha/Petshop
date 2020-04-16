<?php 
  echo "
  <html lang='pt-br'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <link rel='stylesheet' href='marcar.css'>
    
    <title>PetLove | Agendar Serviço</title>
    </head>
    <body>
        
      <div>
        <ul class='nav'>
          <li><img id='logo' src='icon/pet2.png'></li>
          <li id='nom'>
            <a href='index.php'><p id='nom'>PetLove</p></a>
          </li>
          <li id='acessorio'>
            <a class='nav-link' href='acessorio.php'>Acessórios</a>
          </li>
          <li class='item'>
            <a class='nav-link' href='filhote.php'>Filhotes</a>
          </li>
          <li class='item'>
            <a class='nav-link' href='racao.php'>Ração</a>
          </li>
          <li class='item'>
            <a class='nav-link' href='servicos.php'>Serviços</a>
          </li>
          
          <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              Login/Cadastro
            </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item' href='loginCliente.php'>Login</a>
              <a class='dropdown-item' href='cadastroCliente.php'>Cadastro</a>
            </div>
          </li>
           
           <form class='form-inline my-2 my-lg-0'>
              <input class='form-control mr-sm-2' id='form1' type='search' placeholder='O que seu pet precisa? ' aria-label='Pesquisar'>
              <button id='btn' class='btn btn-outline-success' type='submit'>Pesquisar</button>
            </form>
       </div> 
       
        <div id='fundo'></div>
        <div class='pag'>
            <h1>Agendar Serviço</h1><br>
            <div>
                <div class='cadastro'>
                    <form>
                        <input class='form-control mr-sm-2' id='nome' name='nome' type='text' placeholder='Nome'>
                        
                        <input class='form-control mr-sm-2' id='email' name='email' type='email' placeholder='Email'>
                        
                        <div class='form-group'>
                            <select class='form-control mr-sm-2' id='idServico' name='idServico'>
                              <option>Selecione o Serviço</option>
                              <optio></option>
                            </select>
                        </div>
                        
                        <input class='form-control mr-sm-2' id='data' name='data' type='date' placeholder='Data'>
                        
                        <input class='form-control mr-sm-2' id='hora' name='hora' type='time' placeholder='Hora'>
                        
                        <button id='button' class='btn btn-outline-success' type='submit'>Agendar</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div id='lgo'>
              <img id='img' src='icon/pet2.png'>
        </div>
        
        <footer class='page-footer'>
            <div id='copyright'>© 2020 Copyright:
                <a id='linkSite' href='index.php'> PetLove.com</a>
            </div>
        </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
    </html>
  ";
?>
