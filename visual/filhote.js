const petsData = [
  {
    name: "Branco com Laranja",
    species: "R$ 30,00",
    photo: "icon/cachorroF5.png"
  },
  {
    name: "Marrom",
    species: "R$ 30,00",
    photo: "icon/cachorroF12.png"
  },
  {
    name: "Bege",
    species: "R$ 30,00",
    photo: "icon/cachorroF21.png"
  },
  {
    name: "Preto",
    species: "R$ 30,00",
    photo: "icon/cachorroF61.png"
  },
  {
    name: "Branco com Preto",
    species: "R$ 30,00",
    photo: "icon/cachorroF4.png"
  },
  {
    name: "Branco",
    species: "R$ 30,00",
    photo: "icon/cachorroF.png"
  },
  {
    name: "Coelho Branco",
    species: "R$ 15,00",
    photo: "icon/coelhoF.jpg"
  },
  {
    name: "Coelho Cinza",
    species: "R$ 15,00",
    photo: "icon/coelhoF1.jpg"
  },
  {
    name: "Coelho Cinza com Laranja",
    species: "15,00",
    photo: "icon/coelhoF2.jpg"
  },
  {
    name: "Gato Normal com Olhos Verdes",
    species: "R$ 30,00",
    photo: "icon/gatoF.jpg"
  },
  {
    name: "Gato Laranja com Olhos Laranjas",
    species: "R$ 30,00",
    photo: "icon/gatoF3.jpg"
  },
  {
    name: "Gato Preto com Olhos Amarelos",
    species: "R$ 30,00",
    photo: "icon/gatoF4.jpg"
  },
  {
    name: "Gato Laranja com Olhos Verdes",
    species: "R$ 30,00",
    photo: "icon/gatoF11.jpg"
  },
  {
    name: "Gato Cinza com Olhos Verdes Claros",
    species: "R$ 30,00",
    photo: "icon/gatoF21.jpg"
  },
  {
    name: "Gato Preto com Olhos Azuis",
    species: "R$ 30,00",
    photo: "icon/gatoF5.jpg"
  },
  {
    name: "Brasil",
    species: "R$ 30,00",
    photo: "icon/passaraF21.jpg"
  },
  {
    name: "Blue",
    species: "R$ 30,00",
    photo: "icon/passaraF1.jpg"
  },
  {
    name: "Verde e Amarelo",
    species: "R$ 30,00",
    photo: "icon/passaraF0.jpg"
  }
];


function petTemplate(pet) {
  return `
    <div class="animal">
    <img class="pet-photo" src="${pet.photo}">
    <h2 class="pet-name">${pet.name}<br> <span class="species">(${pet.species})</span></h2>
    <button class="comprar">Comprar</button>
    </div>
  `;
}

document.getElementById("app").innerHTML = `
  <h1 class="app-title">Filhotes</h1>
  ${petsData.map(petTemplate).join("")}
`;
document.getElementById("fo").innerHTML = `
  <footer class='page-footer'>
    <div id='copyright'>© 2020 Copyright:
        <a id='linkSite' href='index.php'> PetLove.com</a>
    </div>
  </footer>

`;
