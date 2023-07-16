var toggleBtn = document.getElementById("toggleBtn");
var toggleBtn2 = document.getElementById("toggleBtn2");
var body = document.querySelector('body');
var sideMenu = document.getElementById("sideMenu");
var menuText = document.getElementById("menuText");

toggleBtn2.addEventListener('click', ()=> {
    toggleBtn.classList.toggle("activeToggle");
    if (menuText.innerHTML === "Menu"){
    menuText.innerHTML = "Fermer";}else {
      menuText.innerHTML = "Menu";
    }
    sideMenu.classList.toggle("active");
})

// const entreprisesLink = document.getElementById('presta-nav-entreprises');
// const particuliersLink = document.getElementById('presta-nav-particuliers');
// const enfantsLink = document.getElementById('presta-nav-enfants');
// const associationsLink = document.getElementById('presta-nav-associations');

// const entreprisesContent = document.getElementById('entreprises-content');
// const particuliersContent = document.getElementById('particuliers-content');
// const enfantsContent = document.getElementById('enfants-content');
// const associationsContent = document.getElementById('associations-content');

// const prestaGlobal = document.getElementById('presta-global');

// if (prestaGlobal != null){
// entreprisesLink.addEventListener('click', function() {
//   hideAllContent();
//   resetStyle();
//   entreprisesContent.style.display = 'flex';
//   entreprisesLink.classList.toggle("sidenavactive");
//   prestaGlobal.style.display = 'block';
// });

// particuliersLink.addEventListener('click', function() {
//   hideAllContent();
//   resetStyle();
//   particuliersContent.style.display = 'flex';
//   particuliersLink.classList.toggle("sidenavactive");
//   prestaGlobal.style.display = 'block';
// });

// enfantsLink.addEventListener('click', function() {
//   hideAllContent();
//   resetStyle();
//   enfantsContent.style.display = 'flex';
//   enfantsLink.classList.toggle("sidenavactive");
//   prestaGlobal.style.display = 'block';
// });

// associationsLink.addEventListener('click', function() {
//   hideAllContent();
//   resetStyle();
//   associationsContent.style.display = 'flex';
//   associationsLink.classList.toggle("sidenavactive");
//   prestaGlobal.style.display = 'block';
// });

// function hideAllContent() {
//   entreprisesContent.style.display = 'none';
//   particuliersContent.style.display = 'none';
//   enfantsContent.style.display = 'none';
//   associationsContent.style.display = 'none';
// }
// function resetStyle() {
//   entreprisesLink.classList.remove("sidenavactive");
//   particuliersLink.classList.remove("sidenavactive");
//   enfantsLink.classList.remove("sidenavactive");
//   associationsLink.classList.remove("sidenavactive");
// }

// function Global(){
//   prestaGlobal.style.display = 'none';
// }

// // hideAllContent();
// // Global();
// }else{};

// const modal = document.querySelector(".modal");
// const modalImg = document.querySelector(".modal-content");
// const closeModal = document.querySelector(".close");

// const images = document.querySelectorAll(".image-container img");

// if (modal != null){
// images.forEach((image) => {
//   image.addEventListener("click", () => {
//     modal.style.display = "block";
//     modalImg.src = image.src;
//   });
// });

// closeModal.addEventListener("click", () => {
//   modal.style.display = "none";
// });
// }else{};

import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  spaceBetween: 20,
  slidesPerView: 'auto',
  centeredSlides: true,
  slideToClickedSlide: true,
  centeredSlidesBounds: true,
  breakpoints: {
    1000: {
      centeredSlides: false,
      spaceBetween: 30,
    },
  }
});

swiper.on('click', function (e) {
  var clickedSlide = swiper.clickedSlide;
  if (clickedSlide) {
    var link = clickedSlide.querySelector('a');
    if (link && link.href) {
      window.location.href = link.href; // Rediriger vers la page correspondante
    }
  }
});

// document.getElementById("showMoreButton").addEventListener("click", function() {
//   var hiddenImages = document.getElementById("hidden-images");
//   hiddenImages.style.display = "flex";
//   this.style.display = "none";
// });

var showMoreButton = document.getElementById("showMoreButton");

if (showMoreButton != null) {
  showMoreButton.addEventListener("click", function() {
    var hiddenImages = document.getElementById("hidden-images");
    hiddenImages.style.display = "flex";
    this.style.display = "none";
  });
}

const prestaGlobal = document.getElementById('presta-global');

if (prestaGlobal != null) {
  const linksAndContents = {
    entreprises: {
      link: document.getElementById('presta-nav-entreprises'),
      content: document.getElementById('entreprises-content'),
    },
    particuliers: {
      link: document.getElementById('presta-nav-particuliers'),
      content: document.getElementById('particuliers-content'),
    },
    enfants: {
      link: document.getElementById('presta-nav-enfants'),
      content: document.getElementById('enfants-content'),
    },
    associations: {
      link: document.getElementById('presta-nav-associations'),
      content: document.getElementById('associations-content'),
    },
  };

  for (const key in linksAndContents) {
    if (linksAndContents.hasOwnProperty(key)) {
      const { link, content } = linksAndContents[key];

      link.addEventListener('click', function() {
        hideAllContent();
        resetStyle();
        content.style.display = 'flex';
        link.classList.toggle('sidenavactive');
        prestaGlobal.style.display = 'block';
      });
    }
  }

  function hideAllContent() {
    for (const key in linksAndContents) {
      if (linksAndContents.hasOwnProperty(key)) {
        const { content } = linksAndContents[key];
        content.style.display = 'none';
      }
    }
  }

  function resetStyle() {
    for (const key in linksAndContents) {
      if (linksAndContents.hasOwnProperty(key)) {
        const { link } = linksAndContents[key];
        link.classList.remove('sidenavactive');
      }
    }
  }

  function Global() {
    prestaGlobal.style.display = 'none';
  }

  // hideAllContent();
  // Global();
} else {}
