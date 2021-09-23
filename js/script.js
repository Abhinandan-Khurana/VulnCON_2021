const ztext=document.querySelector('.fancy');
const stringtext=ztext.textContent;
const splitText=stringtext.split("");
ztext.textContent="";
for(let i=0; i<splitText.length; ++i)
{
    ztext.innerHTML +="<span>"+splitText[i] +"</span>";
}
 let char= 0;
 let timer= setInterval(onTick,50);
 function onTick()
 {
     const span=text.querySelectorAll('span')[char];
     span.classList.add('fade');
     char++;
     if(char===splitText.length)
      {
          complete();
          return;
      }
 }
 function complete()
 {
     classInterval(timer);
     timer=null;
 }