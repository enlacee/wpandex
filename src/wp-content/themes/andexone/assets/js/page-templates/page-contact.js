/**
 * page contact
 * 
 */
$(document).ready(function () {
    var contact = $("#contact");
    var message = $("#contact-message");
    var message_bad = $("#contact-message-bad");    
    $(contact).validate({
        submitHandler: function(form) {
        $.ajax({
            type : 'GET',
            url: contact.attr('action'),
            data: contact.serialize() + '&action=ajaxPageContact',
            success:function(data) {                
                if (parseInt(data) === 1) {
                    //contact.hide();
                    contact[0][0].disabled = true;
                    contact[0].reset();
                    message.removeClass('hide');
                    message.appendTo(contact);
                } else {
                    message_bad.removeClass('hide');
                    message_bad.appendTo(contact);
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });

      }
    });
    
});

