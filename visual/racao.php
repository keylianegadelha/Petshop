<?php 
  echo "
  <html lang='pt-br'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <link rel='stylesheet' href='produtos.css'>
    
    <title>PetLove | Rações</title>
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
       
       
        <div>
            <nav>
                <div>
                    <h2 id='ti'>Ração</h2>
                    <style>#ti{margin-left: 123px;}</style>
                </div>
                <ul class='list-unstyled components'>
                    <li>
                        <a id='ap' class='edicao' href='#a'>Cachorro</a>
                    </li>
                    <li>
                        <a id='ep' class='edicao' href='#b'>Coelho</a>
                    </li>
                    <li>
                        <a id='ip' class='edicao' href='#c'>Gato</a>
                    </li>
                    <li>
                        <a id='op' class='edicao' href='#d'>Pássaro</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <p id='a' class='p'>Cachorro</p>
        <div class='card-deck' id='primeiro'>
        <style>#primeiro{margin-bottom: -15px;}</style>
          <div class='card'>
            <img class='card-img-top' src='icon/racao5.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Magnus Premium Cães Filhotes Sabor Frango e Cerreais</h5>
              <p class='card-text'><small class='text-muted'>R$ 60,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racao1.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Seca Pedigree Carne, Frango e Cereais para Cães Adultos</h5>
              <p class='card-text'><small class='text-muted'>R$ 100,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racao4.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Gran Plus Frango e Arroz Light </h5>
              <p class='card-text'><small class='text-muted'>R$ 50,00</small></p><br>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       <style>
            #pri{
                margin-top: 140px;
            }
       </style>
       <div class='card-deck' id='pri'>
          <div class='card'>
            <img class='card-img-top' src='icon/racao3.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração God Crow Carne ao Molho para Cãos Adultos</h5>
              <p class='card-text'><small class='text-muted'>R$ 30,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racao2.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Seca Pedigree Carne e Vegetais para Cães Adultos</h5>
              <p class='card-text'><small class='text-muted'>R$ 100,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racao.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Magnus Premium Cães Filhotes Sabor Carne</h5>
              <p class='card-text'><small class='text-muted'>R$ 60,00</small></p><br>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       <style>
            #segundo{
                margin-top: 250px;
            }
            #b{
                margin-top: 165px;
            }
       </style>
       <p id='b' class='p'>Coelho</p>
       <div class='card-deck' id='segundo'>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoC.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Nutrópica para Coelho Adulto</h5>
              <p class='card-text'><small class='text-muted'>R$ 25,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoC1.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Nutrópica para Coelho Adulto</h5>
              <p class='card-text'><small class='text-muted'>R$ 25,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoC2.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Nutrópica para Porquinho da Índia</h5>
              <p class='card-text'><small class='text-muted'>R$ 25,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       <style>
            #c{
                margin-top: 150px;
            }
            #terceiro{
                margin-top: 230px;
                margin-bottom: 130px;
            }
       </style>
       <p id='c' class='p'>Gato</p>
       <div class='card-deck' id='terceiro'>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoG.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Whiskas Sabor Peixe</h5>
              <p class='card-text'><small class='text-muted'>R$ 50,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoG1.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Friskies Sabor Frutos do Mar</h5>
              <p class='card-text'><small class='text-muted'>R$ 40,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoG2.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Formúla Natural para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 30,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       <div class='card-deck'>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoG3.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Premium para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 30,00</small></p><br>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoG4.jpg'>
            <div class='card-body'>
              <h5 class='card-title'><br>Ração Degusté para Gatos Adultos</h5>
              <p class='card-text'><small class='text-muted'>R$ 30,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoG5.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração BawWAw Sabor Carne</h5>
              <p class='card-text'><small class='text-muted'>R$ 18,00</small></p><br>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       <style>
            #d{
                margin-top: 190px;
            }
            #quarto{
                margin-top: 270px;
                margin-bottom: px;
            }
       </style>
       <p id='d' class='p'>Pássaro</p>
       <div class='card-deck' id='quarto'>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoP.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Nutrópica Papinha Arara</h5>
              <p class='card-text'><small class='text-muted'>R$ 25,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaoP1.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Nutrópica Extrusados e Frutas</h5>
              <p class='card-text'><small class='text-muted'>R$ 25,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/racaop2.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Ração Nutrópica Papa para Lóris</h5>
              <p class='card-text'><small class='text-muted'>R$ 25,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div><br>
       
       
       
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
