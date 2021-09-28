window.addEventListener("scroll", onScrollFixNav);

function onScrollFixNav() {
  var navbar = document.getElementById("navbar");
  if (window.scrollY > 100) {
    navbar.style.background = "#061014";
    navbar.style.height = "6%";
  } else {
    navbar.style.background = "transparent";
    navbar.style.height = "8%";
  }
}

/*Updated Menu-Btn Javascript*/

const burger = document.querySelector('.burger');
const nav = document.querySelector('.menu');
const navLinks = document.querySelectorAll('.menu li');

function toogleNav() {
  //! Toggle Nav
  nav.classList.toggle('nav-active');

  //! Animate Links
  navLinks.forEach((link, index) => {
      // console.log(index);
      if (link.style.animation) {
          link.style.animation = '';
      } else {
          link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.6}s`;
          // console.log(index / 7);
      }
  });
  // Burger Animation
  burger.classList.toggle('toggle');
}

burger.addEventListener('click',toogleNav );

nav.addEventListener('click', toogleNav);
