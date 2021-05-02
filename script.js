var c=0

$('#hamburger').click(() => {
    c+=1
    $("#toggleButton").toggleClass("active");
    $("#slide_nav_div").toggleClass("active");
    $("#slide_nav_div").toggleClass("hide");
});

window.onscroll = function() {scrollEvent();};

function scrollEvent(){
    if(document.body.scrollTop>200 || document.documentElement.scrollTop>150){
        document.getElementById("toggleButton").style.backgroundColor = "black";
    }
    else{
        document.getElementById("toggleButton").style.backgroundColor = "transparent";
    }
}
