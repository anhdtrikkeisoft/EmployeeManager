$(document).ready(function(){
    var text = $(".loginstatus").text().trim();

    if(text == "Login"){
        $("th:last-of-type").remove();
        $(".btn-create").remove();
    }



})