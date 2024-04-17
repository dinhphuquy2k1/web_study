$(document).ready(function (){
    // $("#showToast").click(function (){
    //     $("#m-toast").show();
    // })


    $("#showToast").dblclick(function (){
        $("#m-toast").show();
    })

    $('#m-toast_text').attr('title', 'test');
    $('#m-toast_text').removeAttr('title');
    $('#m-toast_text').addClass('title');
    $('#m-toast_text').removeClass('te');
    $(".m-close_toast").click(function () {
        $("#m-toast").hide();
    })
})