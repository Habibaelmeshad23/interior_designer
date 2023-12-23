let names = document.getElementById("name").value;
let email = document.getElementById("email").value; 
let msg = document.getElementById("msg").value; 
let sentbtn = document.getElementById("sentbtn"); 
let popup = document.getElementById("popup"); 
let ok = document.getElementById("ok"); 

if(names!=null && email!=null && msg!=null){
    sentbtn.addEventListener("click",function(e){
        e.preventDefault();
        popup.classList.toggle('hidden')
    
    });
}

ok.addEventListener("click",function(e){
    e.preventDefault();
    popup.classList.toggle('hidden')

});
