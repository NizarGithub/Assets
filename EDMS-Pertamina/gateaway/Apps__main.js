/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
function Cek_Inbox(){
    $.ajax({
        url: "Gateaway/Auto__reply.php",
        cache: false,
        success: function(msg){
            $("#CekInbox").html(msg);
        }
    });
    setTimeout("Cek_Inbox()",5000);
}
function Inbox_all(){
    $.ajax({
        url: "Apps/Pages/AJAX/Inbox_all.php",
        cache: false,
        success: function(msg){
            $("#InboxAll").html(msg);
        }
    });
        setTimeout("Inbox_all()",1000);
}
function Inbox_true(){
    $.ajax({
        url: "Apps/Pages/AJAX/Inbox_true.php",
        cache: false,
        success: function(msg){
            $("#InboxTrue").html(msg);
        }
    });
        setTimeout("Inbox_true()",1000);
}

function Inbox_false(){
    $.ajax({
        url: "Apps/Pages/AJAX/Inbox_false.php",
        cache: false,
        success: function(msg){
            $("#InboxFalse").html(msg);
        }
    });
        setTimeout("Inbox_false()",1000);
}

jQuery(document).ready(function(){
    $(window).on("load", function() {
        $('#loadingMask').fadeIn().delay(1000).fadeOut();
    });
    Inbox_all();
    Inbox_true();
    Inbox_false();
    Cek_Inbox();
    //Gammu_SMS();

    $('.hapusSms').live('click', function() {
        var url = "Gateaway/Hapus__SMS.php";
        id_sms  = this.id;
        var c   = confirm('Yakin ingin hapus pesan ini ?');
        if(c==1) {
            $.post(url, {hapus: id_sms});
        }
    });
    
    $('.balasSms').live('click', function() {
        var url = "Gateaway/Form__reply.php";
        sms_id = this.id;
        $.post(url, {sms_id: sms_id}, function(data) {
            $(".modal-body").html(data).show();
        });
    });
    
    $("#kirim-balas-sms").live("click", function() {
        var url    = "Gateaway/Send__reply.php";
        no_id = $('#no_id').val();
        sender = $('#no_hp').val();
        pesan = $('#pesan').val();

        $.post(url, {balas_sms_id: no_id, sender_number: sender, reply: pesan} ,function() {
            $('.formBalasSms').modal('hide');
        });
    });
});

