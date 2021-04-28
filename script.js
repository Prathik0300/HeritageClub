var c=0

$('#toggleWrapper').click(() => {
    c+=1
    $("#toggleButton").toggleClass("active");
    $("#slide_nav").toggleClass("active");
    $("#slide_nav").toggleClass("hide");
    // if(c%2!=0){
    //     $(document).mouseup((e)=>{
    //        var container = $("#slide_nav");

    //        if(!container.is(e.target) && container.has(e.target).length ===0){
    //         $("#toggleButton").toggleClass("active");
    //         container.toggleClass("active");
    //         container.toggleClass("hide")
    //        }
    //     });
    // if(c%2==0){
    //     $("#slide_nav").css("display","none");
    // }
    // else{
    //     $("#slide_nav").css("display","block");
    // }
    
    // if(c%2==0){
    //     $("#slide_nav").toggleClass("hide_div");
    // }
    // $("#slide_nav").toggleClass("hide");
    // $("#slide_nav").removeClass("hide_div");
    // $("#slide_nav").css("display","");
});

// style="display: none;"