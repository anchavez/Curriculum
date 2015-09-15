/*
The JavaScript way
window.onload = function(){
    
    function changeHTML(){
        var header = document.getElementById("title");
        header.innerHTML = "Goodbye World";
    }
    
    setTimeout(changeHTML, 5000);

}

*/

//the jQuery way
$(document).ready(function(){
    function changeHTML(){
        var header = $("#title");
        header.html("Goodbye World");
    }
    
    setTimeout(changeHTML, 5000);
})
    