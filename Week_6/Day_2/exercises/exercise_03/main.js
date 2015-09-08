window.onload = function(){

 var toggles = document.getElementsByClassName("js-toggle");
    for(var i = 0; i < toggles.length; i++){
        toggles[i].onclick = function(){
            this.classList.toggle("toggle--open");
        }
    }
    
};