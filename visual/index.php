<?php 
  echo "
  <html lang='pt-br'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <link rel='stylesheet' href='index.css'>
    
    <title>PetLove | Home</title>
    </head>
    <body>
        
      <div>
        <ul class='nav'>
          <li><img id='logo' src='icon/pet2.png'></li>
          <li id='nome'>
            <p id='nome'>PetLove</p>
          </li>
          <li id='acessorio'>
            <a class='nav-link' href='#'>Acessórios</a>
          </li>
          <li class='item'>
            <a class='nav-link' href='#'>Filhotes</a>
          </li>
          <li class='item'>
            <a class='nav-link' href='#'>Ração</a>
          </li>
          <li class='item'>
            <a class='nav-link' href='#'>Serviços</a>
          </li>
          
          <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              Login/Cadastro
            </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
              <a class='dropdown-item'>CLIENTE</a>
              <div class='dropdown-divider'></div>
              <a class='dropdown-item' href='loginCliente.php'>Login</a>
              <a class='dropdown-item' href='cadastroCliente.php'>Cadastro</a>
              <div class='dropdown-divider'></div>
              <a class='dropdown-item'>FUNCIONÁRIO</a>
              <div class='dropdown-divider'></div>
              <a class='dropdown-item' href='loginFuncionario.php'>Login</a>
              <a class='dropdown-item' href='cadastroFuncionario.php'>Cadastro</a>
            </div>
          </li>
           
           <form class='form-inline my-2 my-lg-0'>
              <input class='form-control mr-sm-2' type='search' placeholder='O que seu pet precisa? ' aria-label='Pesquisar'>
              <button id='btn' class='btn btn-outline-success' type='submit'>Pesquisar</button>
            </form>
        </div> 
         
        <div>
            <h1 id='h1'>PetLove</h1>
            <p class='p' id='pPri'>
                Trabalhamos com amor e 
            </p>
            <p class='p' id='pSeg'>
                dedicação total aos animais.
            </p>
            <img id='gato' src='icon/teste2.jpg'>
        </div>
         
         <p id='apresentacao'>
            Nossos serviços e produtos são feitos com qualidade, inovação e muito amor.
         </p>
         <p id='apresentacao1'>
            SEMPRE RESPEITANDO O BEM ESTAR ANIMAL.
         </p>
         
         <div>
            <a href='#'><img id='link1' class='imgLink' src='icon/collar.png'></a>
            <a href='#'><img id='link2' class='imgLink' src='icon/dog-food.png'></a>
            <a href='#'><img id='link3' class='imgLink' src='icon/comb.png'></a>
         </div>
         
         <div>
            <p class='title' id='title1'>Acessórios</p>
            <p class='title' id='title2'>Rações</p>
            <p class='title' id='title3'>Centro de Estética</p>
         </div>
         
         <div id='filhotes'>
            <p id='adocao'>Compre hoje seu pet!</p>
            
            <div id='card1' class='card'>
              <a href='#'><img class='animal' src='icon/cachorro.png'><a>
              
            </div>
              
            <div id='card2' class='card'>
              <a href='#'><img class='animal' src='icon/coelho.png'></a>
            </div>
            
            <div id='card3' class='card'>
              <a href='#'><img class='animal' src='icon/gato.png'></a>
            </div>
            
            <div id='card4' class='card'>
              <a href='#'><img id='passaro' class='animal' src='icon/passaro.jpg'></a>
            </div>
         </div>
         
         
            <img class='d' src='icon/equi.png'>
         
            <p id='sobreTitulo'>Um pouco sobre nós...</p>
            <p id='sobreTexto'>Lorem ipsum libero interdum consectetur eleifend inceptos, sodales suscipit ornare odio fermentum posuere praesent, consequat curabitur senectus massa aliquam. accumsan a luctus lacinia ipsum tempor pulvinar nunc mi maecenas in, fringilla luctus congue aliquam convallis bibendum convallis condimentum lorem nibh mauris, pulvinar pretium ultrices massa eleifend tempor nibh aenean posuere.</p>
            <p id='sobreTexto1'>Convallis aenean auctor rhoncus tincidunt neque, volutpat ante diam vehicula donec et, vivamus curae dictum erat. class quam mattis dapibus tellus neque suscipit, eu nisl habitasse curabitur taciti sit, ut eu cubilia quisque semper. ultricies arcu est vel neque duis vivamus mi nostra cras ut, a urna fermentum ut arcu ut donec dui ipsum eleifend praesent, iaculis ut tristique feugiat est cras interdum sem viverra.
            </p>
            
        </div>
        <footer class='page-footer'>
            <div id='copyright'>© 2020 Copyright:
                <a id='linkSite' href='#'> PetLove.com</a>
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
