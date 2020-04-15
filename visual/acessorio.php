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
    
    <title>PetLove | Acessórios</title>
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
                    <h2>Acessórios</h2>
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
          <div class='card'>
            <img class='card-img-top' src='icon/camaCao2.jpg'>
            <div class='card-body'>
              <h5 class='card-title'><br>Cama com Estampa de Melancia</h5>
              <p class='card-text'><small class='text-muted'>R$ 40,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/camaCao31.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Cama com Estampa nas Cores Rosa e Branco</h5>
              <p class='card-text'><small class='text-muted'>R$ 40,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/camaCao4.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Cama Azul com Estampa de Cachorros</h5>
              <p class='card-text'><small class='text-muted'>R$ 40,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       <div class='card-deck'>
          <div class='card'>
            <img class='card-img-top' src='icon/colarCao.jpg'>
            <div class='card-body'>
              <h5 class='card-title'><br>Coleira Pawise Preta para Cachorros</h5>
              <p class='card-text'><small class='text-muted'>R$ 17,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/colarCao2.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Coleira Pawise com Rosa para Cachorros</h5>
              <p class='card-text'><small class='text-muted'>R$ 17,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/colarCao4.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Coleira Pawise Preta com Estampa de Patas</h5>
              <p class='card-text'><small class='text-muted'>R$ 18,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       <p id='b' class='p'>Coelho</p>
       <div class='card-deck' id='segundo'>
          <div class='card'>
            <img class='card-img-top' src='icon/coelho.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Casinha Simples para Coelhos</h5>
              <p class='card-text'><small class='text-muted'>R$ 30,00</small></p><br>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/coelho21.jpg'>
            <div class='card-body'>
              <h5 class='card-title'><br>Casinha Simples para Coelhos</h5>
              <p class='card-text'><small class='text-muted'>R$ 30,00</small></p><br>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/roupa.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Roupa para Coelhos Tamanho Médio</h5>
              <p class='card-text'><small class='text-muted'>R$ 17,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       <p id='c' class='p'>Gato</p>
       <div class='card-deck' id='terceiro'>
          <div class='card'>
            <img class='card-img-top' src='icon/camaGato.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Cama Pawise Cinza para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 40,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/camaGato1.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Cama Pawise Rosa para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 40,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/camaGato2.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Cama Pawise Rosa 2 em 1 para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 60,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       <div class='card-deck'>
          <div class='card'>
            <img class='card-img-top' src='icon/colarGato4.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Coleira Pawise Rosa Escuro para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 17,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/colarGato5.jpg'>
            <div class='card-body'>
              <h5 class='card-title'><br>Coleira Pawise Preta para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 17,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/colarGato6.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Coleira Pawise Rosa Claro Para Gatos</h5>
              <p class='card-text'><small class='text-muted'>R$ 17,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
       </div>
       
       
       <p id='d' class='p'>Pássaro</p>
       <div class='card-deck' id='quarto'>
          <div class='card'>
            <img class='card-img-top' src='icon/gaiola.jpg'>
            <div class='card-body'>
              <h5 class='card-title'><br><br>Gaiola Grande para Pássaros</h5>
              <p class='card-text'><small class='text-muted'>R$ 30,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/bebedouroP.jpg'>
            <div class='card-body'>
              <h5 class='card-title'><br>Bebedouro para Beija-Flor</h5>
              <p class='card-text'><small class='text-muted'>R$ 6,00</small></p>
              <button id='comprar' class='btn btn-outline-success'  type='submit' >Comprar</button>
            </div>
          </div>
          <div class='card'>
            <img class='card-img-top' src='icon/bebedouroA.jpg'>
            <div class='card-body'>
              <h5 class='card-title'>Bebedouro Comum para Pássaros</h5>
              <p class='card-text'><small class='text-muted'>R$ 5,00</small></p>
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
