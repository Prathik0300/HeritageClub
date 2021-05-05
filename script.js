

    $('#hamburger').click(() => {
        $("#toggleButton").toggleClass("active");
        $("#slide_nav_div").toggleClass("active");
        $("#slide_nav_div").toggleClass("hide");
    });
    
    function scroll(){
        // var explore = document.getElementById("Explore");
        var abt = document.getElementById("AboutUs");
        abt.scrollIntoView();
    }
    
    function perform(that){
        console.log("inside 1",that.id,that.className);
        var imgWrap = $(".Board_img_wrapper",that);
        var Phone_No = $(that).find(".Phone_No");
        var social = $(that).find(".Member_social");
        // console.log(imgWrap,Phone_No,social);
        $(imgWrap).fadeIn("medium");
        $(Phone_No).slideDown(500);
        $(social).slideDown(500);
        PerformStatus=true;
            
    }        
    function leave(that){

            console.log("inside 2");
        var imgWrap = $(that).find(".Board_img_wrapper");
        var Phone_No = $(that).find(".Phone_No");
        var social = $(that).find(".Member_social");
        $(imgWrap).fadeOut("medium");
        $(Phone_No).slideUp(500);
        $(social).slideUp(500);
        
    }

    

    $("#Board_img").on({
        mouseenter: () => {
            console.log("inside 1",this.id,this.className);
            var imgWrap = $(".Board_img_wrapper",this);
            var Phone_No = $(this).children(".Phone_No");
            var social = $(this).children(".Member_social");
            // console.log(imgWrap,Phone_No,social);
            $(this.find(".Board_img_wrapper")).fadeIn("medium");
            $(Phone_No).slideDown(500);
            $(social).slideDown(500);
        },
        mouseleave: () => {
            console.log("inside 2");
            var imgWrap = $(this).find(".Board_img_wrapper");
            var Phone_No = $(this).find(".Phone_No");
            var social = $(this).find(".Member_social");
            $(imgWrap).fadeOut("medium");
            $(Phone_No).slideUp(500);
            $(social).slideUp(500);
        }
    });


window.onscroll = function() {scrollEvent();};
function scrollEvent(){

    if(document.body.scrollTop>=150 || document.documentElement.scrollTop>=150){
        up.style.display = "";
    }
    else{
        up.style.display = "none";
    }

    if(document.body.scrollTop>200 || document.documentElement.scrollTop>150){
        document.getElementById("toggleButton").style.backgroundColor = "black";
    }
    else{
        document.getElementById("toggleButton").style.backgroundColor = "transparent";
    }
}

function goUp(){
    var up = document.getElementById("up");
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}