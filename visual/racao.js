const petsData = [
  {
    name: "Magnus Premium Sabor Frango e Cerreais",
    species: "R$ 60,00",
    photo: "icon/racao5.jpg"
  },
  {
    name: "Ração Pedigree Carne, Frango e Cereais",
    species: "R$ 100,00",
    photo: "icon/racao1.jpg"
  },
  {
    name: "Ração Gran Plus Frango e Arroz Light",
    species: "R$ 50,00",
    photo: "icon/racao4.jpg"
  },
  {
    name: "Ração God Crow Carne ao Molho",
    species: "R$ 30,00",
    photo: "icon/racao3.jpg"
  },
  {
    name: "Ração Seca Pedigree Carne e Vegetais",
    species: "R$ 100,00",
    photo: "icon/racao2.jpg"
  },
  {
    name: "Magnus Premium Sabor Carne",
    species: "R$ 50,00",
    photo: "icon/racao.jpg"
  },
  {
    name: "Ração Nutrópica para Coelho Adulto",
    species: "R$ 30,00",
    photo: "icon/racaoC.jpg"
  },
  {
    name: "Ração Nutrópica para Coelho Adulto",
    species: "R$ 30,00",
    photo: "icon/racaoC1.jpg"
  },
  {
    name: "Ração Nutrópica para Porquinho da Índia",
    species: "30,00",
    photo: "icon/racaoC2.jpg"
  },
  {
    name: "Ração Whiskas Sabor Peixe",
    species: "R$ 50,00",
    photo: "icon/racaoG.jpg"
  },
  {
    name: "Ração Friskies Sabor Frutos do Mar",
    species: "R$ 40,00",
    photo: "icon/racaoG1.jpg"
  },
  {
    name: "Ração Formúla Natural para Gatos",
    species: "R$ 30,00",
    photo: "icon/racaoG2.jpg"
  },
  {
    name: "Ração Premium para Gatos Filhotes",
    species: "R$ 30,00",
    photo: "icon/racaoG3.jpg"
  },
  {
    name: "Ração Degusté para Gatos Adultos",
    species: "R$ 17,00",
    photo: "icon/racaoG4.jpg"
  },
  {
    name: "Ração BawWAw Sabor Carne",
    species: "R$ 17,00",
    photo: "icon/racaoG5.jpg"
  },
  {
    name: "Ração Nutrópica Papinha Arara",
    species: "R$ 25,00",
    photo: "icon/racaoP.jpg"
  },
  {
    name: "Ração Nutrópica Extrusados e Frutas",
    species: "R$ 25,00",
    photo: "icon/racaoP1.jpg"
  },
  {
    name: "Ração Nutrópica Papa para Lóris",
    species: "R$ 25,00",
    photo: "icon/racaop2.jpg"
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
  <h1 class="app-title">Ração</h1>
  ${petsData.map(petTemplate).join("")}

`;
document.getElementById("fo").innerHTML = `
  <footer class='page-footer'>
    <div id='copyright'>© 2020 Copyright:
        <a id='linkSite' href='index.php'> PetLove.com</a>
    </div>
  </footer>

`;