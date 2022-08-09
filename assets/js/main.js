//Carrosel produto destaque
$('.carrosel-novidades').owlCarousel({
  loop: false,
  autoplay: false,
  margin: 25,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    700: {
      items: 1,
    },
    1000: {
      items: 4,
    },
  },
});

//Carrosel de destaque
$('.carrosel-destaques').owlCarousel({
  loop: true,
  autoplay: true,
  margin: 25,
  nav: true,
  dots: true,
  responsive: {
    0: {
      items: 1,
    },
    700: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

//Carrosel produto destaque
$('.carrosel-videos').owlCarousel({
  loop: true,
  autoplay: false,
  margin: 25,
  nav: true,
  dots: true,
  responsive: {
    0: {
      items: 1,
    },
    700: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

function openNav() {
  document.getElementById('myNav').style.width = '100%';
}

function closeNav() {
  document.getElementById('myNav').style.width = '0%';
}

//content search
const searchButton = document.querySelector('.search span');

function handleSearch(e) {
  e.preventDefault();
  const contentSearch = document.querySelector('.content-search');
  contentSearch.classList.toggle('ativo');
}
searchButton.addEventListener('click', handleSearch);
