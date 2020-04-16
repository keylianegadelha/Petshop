const petsData = [
  {
    name: "Cama com Estampa de Melancia",
    species: "R$ 50,00",
    photo: "icon/camaCao2.jpg"
  },
  {
    name: "Cama com Estampa nas Cores Rosa e Branco",
    species: "R$ 50,00",
    photo: "icon/camaCao31.jpg"
  },
  {
    name: "Cama Azul com Estampas de Cachorro",
    species: "R$ 50,00",
    photo: "icon/camaCao4.jpg"
  },
  {
    name: "Coleira Pawise Preta para Cachorros",
    species: "R$ 17,00",
    photo: "icon/colarCao.jpg"
  },
  {
    name: "Coleira Pawise com Rosa para Cachorros",
    species: "R$ 17,00",
    photo: "icon/colarCao2.jpg"
  },
  {
    name: "Coleira Pawise Preta com Estampa de Patas",
    species: "R$ 18,00",
    photo: "icon/colarCao4.jpg"
  },
  {
    name: "Casinha Simples para Coelhos",
    species: "R$ 30,00",
    photo: "icon/coelho1.jpg"
  },
  {
    name: "Casinha Simples para Coelhos",
    species: "R$ 30,00",
    photo: "icon/coelho21.jpg"
  },
  {
    name: "Roupa para Coelhos Tamanho Médio",
    species: "20,00",
    photo: "icon/roupa1.jpg"
  },
  {
    name: "Cama Pawise Cinza para Gatos",
    species: "R$ 50,00",
    photo: "icon/camaGato.jpg"
  },
  {
    name: "Cama Pawise Rosa para Gatos",
    species: "R$ 50,00",
    photo: "icon/camaGato1.jpg"
  },
  {
    name: "Cama Pawise Rosa 2 em 1 para Gatos",
    species: "R$ 70,00",
    photo: "icon/camaGato21.jpg"
  },
  {
    name: "Coleira Pawise Rosa Escuro para Gatos",
    species: "R$ 17,00",
    photo: "icon/colarGato4.jpg"
  },
  {
    name: "Coleira Pawise Preta Escuro para Gatos",
    species: "R$ 17,00",
    photo: "icon/colarGato5.jpg"
  },
  {
    name: "Coleira Pawise Rosa Claro para Gatos",
    species: "R$ 17,00",
    photo: "icon/colarGato6.jpg"
  },
  {
    name: "Gaiola Grande",
    species: "R$ 30,00",
    photo: "icon/gaiola.jpg"
  },
  {
    name: "Bebedouro para Beija-Flor",
    species: "R$ 7,00",
    photo: "icon/bebedouroP.jpg"
  },
  {
    name: "Bebedouro Normal para Pássaros",
    species: "R$ 5,00",
    photo: "icon/bebedouroA.jpg"
  }
];


function petTemplate(pet) {
  return `
    <div class="animal">
    <img class="pet-photo" src="${pet.photo}">
    <h2 class="pet-name">${pet.name} <span class="species">(${pet.species})</span></h2>
    <button class="comprar">Comprar</button>
    </div>
  `;
}

document.getElementById("app").innerHTML = `
  <h1 class="app-title">Acessórios</h1>
  ${petsData.map(petTemplate).join("")}
`;
document.getElementById("fo").innerHTML = `
  <footer class='page-footer'>
    <div id='copyright'>© 2020 Copyright:
        <a id='linkSite' href='index.php'> PetLove.com</a>
    </div>
  </footer>

`;