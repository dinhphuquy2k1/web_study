$(document).ready(function (){
    // $("#showToast").click(function (){
    //     $("#m-toast").show();
    // })


    $("#showToast").dblclick(function (){
        $("#m-toast").show();
    })
    $(".m-close_toast").click(function () {
        $("#m-toast").hide();
    })
})