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
console.log(document.getElementById("openMenu"))
document.getElementById("openMenu").addEventListener('click',OpenMenu);
function OpenMenu(){
  var responsive = document.getElementById("reponsive")
  responsive.classList.remove("responsive_hide");
  responsive.classList.add("responsive");
  // console.log("clicked")
}

document.getElementById("closeMenu").addEventListener('click',closeMenu);
document.getElementById("close_").addEventListener('click',closeMenu);

function closeMenu(){
  var responsive = document.getElementById("reponsive")
  responsive.classList.remove("responsive")
  responsive.classList.add("responsive_hide")
}
