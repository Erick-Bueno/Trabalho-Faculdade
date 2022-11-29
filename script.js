const olho = document.querySelector(".olho")
const olho2 = document.querySelector(".olho2")
olho.addEventListener("click", function(){
    let input = document.querySelector("#senha")
    if(input.getAttribute('type')=='password'){
        input.setAttribute('type', 'text')
        olho2.classList.remove('visto')
    }else{
        input.setAttribute('type', 'password')
    }
})
olho2.addEventListener("click", function(){
    let input = document.querySelector("#senha")
    if(input.getAttribute('type')=='text'){
        input.setAttribute('type', 'password')
        olho2.classList.add('visto')
    }else{
        input.setAttribute('type', 'text')
    }
    

})