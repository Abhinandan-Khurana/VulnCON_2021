
window.addEventListener('scroll', onScrollFixNav)

function onScrollFixNav(){
    var navbar = document.getElementById("navbar");
    if(window.scrollY > 100){
        navbar.style.background = "#000000f7";
        navbar.style.height = "5%";
    }
    else   {

        navbar.style.background = "transparent";
        navbar.style.height = "8%";
    } 
    console.log(window.scrollY)
}