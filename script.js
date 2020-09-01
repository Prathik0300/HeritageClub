
function move(that){
    var home = document.getElementById("nav-home");
    var about = document.getElementById("nav-about");
    var events = document.getElementById("nav-event");
    var contact = document.getElementById("nav-contact");

    var item = [home,about,events,contact];

    var home_div = document.getElementById("home");
    var about_div = document.getElementById("about");
    var events_div = document.getElementById("events");
    var contact_div = document.getElementById("contact");
    
    var div = [home_div,about_div,events_div,contact_div];
    var index = item.indexOf(document.getElementById(that.id));
    console.log(index);
    console.log(div[index]);
    div[index].scrollIntoView();   
    
}

window.onscroll = function() {scrollEvent();};

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


/*********************animation*********************/

