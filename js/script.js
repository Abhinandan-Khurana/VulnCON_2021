
    const abouttext=document.querySelector('.fancy');
    const stringtext="About"
    const splitText=stringtext.split("");
    abouttext.textContent="";
    for(let i=0; i<splitText.length; ++i)
    {
        abouttext.innerHTML +="<span class='aws'>"+splitText[i] +"</span>";
    }
    let char = 0;
        var timer = setInterval(onTick,500);
    
    
    function onTick()
    {  
        const span = abouttext.querySelectorAll('.aws')[char];
        if(char >= splitText.length)
        {
            console.log(char, "shuwhu")
            clearInterval(timer)
            return;
        }
        span.classList.add('fade');
        char++;
        
    }