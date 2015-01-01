/**
 * page Question and Answers
 *
 * script exe
 * 
 */
$(document).ready(function () {

    var $read_more_answer = $('.read-more');
    $read_more_answer.click(function(){
        $('#myModal').modal('toggle');
        //console.log('click answers');

        //
        var node_title = $(this).prev();
        var node_title_prev = $(this).prev().prev();
        if (node_title.prop("tagName") == 'H1' || node_title.prop("tagName") == 'H2'|| node_title.prop("tagName") == 'H3'
            || node_title.prop("tagName") == 'H4')
        {
            title = node_title.text();
        } else if (node_title_prev.prop("tagName") == 'H1' || node_title_prev.prop("tagName") == 'H2' || node_title_prev.prop("tagName") == 'H3'
            || node_title_prev.prop("tagName") == 'H4')
        {
            title = node_title_prev.text();
        } else {
            title = 'title not defined'
        }
        
        $('#myModalLabel').text(title);
        $('#issue').val(title);
     

        /* init send data ajax */
        var contact = $("#form");   
        $(contact).validate({
          submitHandler: function(form) {
            $.ajax({
                type : 'GET',
                url: contact.attr('action'),
                data: contact.serialize() + '&action=ajaxPageQuestion',
                success:function(data) {                
                    if (parseInt(data) === 1) {
                        $('#myModal').modal('hide');                    
                        contact[0].reset();
                        
                        var url = window.location.href; //document.URL
                        url = url.replace("#", "");

                        var patt = new RegExp(".\?");
                        if (patt.test(url)) {                            
                            var p = url.split('?');
                            url = p[0];
                        }
                        window.location = url + '?key='  

                    } else {
                        alert ('there was a problem');
                    }
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
          }
        });
        /* init send data ajax */ 

    });

});

