window.onscroll = function() {scrollEvent()};

function scrollEvent(){
    if(document.body.scrollTop>150 || document.documentElement.scrollTop>150){
        up.style.display = "";
    }
    else{
        up.style.display = "none";
    }
}

function goUp(){
    var up =document.getElementById("up");
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}