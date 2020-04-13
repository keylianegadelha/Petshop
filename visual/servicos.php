<?php 
  echo "
  <html lang='pt-br'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <link rel='stylesheet' href='servicos.css'>
    
    <title>PetLove | Serviços</title>
    </head>
    <body>
        
      <div>
        <ul class='nav' class='navbar-nav mr-auto mt-2 mt-lg-0'>
          <li><img id='logo' src='icon/pet2.png'></li>
          <li id='nome'>
           <a href='index.php'><p id='nome'>PetLove</p></a>
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
              <input class='form-control mr-sm-2' type='search' placeholder='O que seu pet precisa? ' aria-label='Pesquisar'>
              <button id='btn' class='btn btn-outline-success' type='submit'>Pesquisar</button>
            </form>
       </div>
       
       <img class='imagens' id='a' src='icon/online.png'><br>
       <img class='imagens' id='b' src='icon/relogio.png'><br>
       <img class='imagens' id='c' src='icon/passeio.png'><br>
       
       <p class='texto' id='d'>Acesse a agenda do petshop 24h</p><br> 
       <p class='texto' id='e'>para marcar seu horário.</p>
       <input id='botao' type='text' class='btn btn-outline' href='marcar.php'value='Agende seu horário' onclick='agendar()'/>
       <p class='texto' id='f'>Defina o dia e o horário em que deseja</p> 
       <p class='texto' id='g'>marcar o agendamento do seu pet.</p>
       <p class='texto' id='h'>Pronto! Agora, é só levar seu pet </p> 
       <p class='texto' id='i'>no horário marcado.</p>
       
       <h1 id='tema'>O que Fazemos</h1>
       
       <img class='img' id='colar' src='icon/iconRacao.png'>
       <h2 id='banho' class='itens'>Banho</h2>
       <p id='banho2'>Usamos Toalhas Descartáveis, deixando longe pulgas e outros parasitas. E mantendo seu Pet ainda mais lindo, cheiroso e saudável.</p>
       
       <img class='img' id='patas' src='icon/iconPata.png'>
       <h2 id='tosa' class='itens'>Tosa Higiênica</h2>
       <p id='tosa2'>Ajuda a manter a saúde do animal por meio da prevenção do acúmulo de sujeiras em seus pelos.</p>
       
       <img class='img' id='bone' src='icon/iconOsso.png'>
       <h2 id='hidra' class='itens'>Hidratação de Pele</h2>
       <p id='hidra2'>Uma boa hidratação garante a prevenção de infecções, micoses e perda de pelo.</p>
       
       <img class='img' id='pata' src='icon/iconCoelho.png'>
       <h2 id='dente' class='itens'>Escovação de Dentes</h2>
       <p id='dente2'>Evita a formação de placa bacteriana e tártaro, mal hálito, salivação excessiva e perda dos dentes.</p>
       
       <img class='img' id='dog' src='icon/iconCat.png'>
       <h2 id='intenso' class='itens'>Hidratação Intensiva</h2>
       <p id='intenso2'>Pet macio, sedoso e muito cheiroso.. tem coisa melhor?</p>
       
       <img class='img' id='cat' src='icon/iconDog.png'>
       <h2 id='dese' class='itens'>Desembolo</h2>
       <p id='dese2'>Deixa os pelos do pet desembaraçados e viçosos sem precisar, necessariamente, tosar.</p>
       
       
       
        <footer class='page-footer'>
            <div id='copyright'>© 2020 Copyright:
                <a id='linkSite' href='index.php'>PetLove.com</a>
            </div>
        </footer>
        
        <script type='text/javascript'>
            function agendar(){
                window.location.href='marcar.php';
            }
        </script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
    </html>
  ";
?>
