/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
function cek_sms(){
    jQuery.ajax({
        url: "auto_reply_sms.php",
        cache: false,
        success: function(msg){
            jQuery("#sms_gateaway").html(msg);
        }  
    });
    
    var fresh = setTimeout("cek_sms()",1000);
}
// Ketika document sudah siap
jQuery(document).ready(function(){
    cek_sms();
});