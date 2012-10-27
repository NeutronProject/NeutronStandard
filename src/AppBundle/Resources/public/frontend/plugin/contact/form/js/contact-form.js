jQuery(document).ready(function(){
	
    jQuery(document).ajaxStop(jQuery.unblockUI); 

    jQuery('#submit-contact-form').click(function(){ 
        var form = jQuery(this).closest('form'); 
        var message = jQuery('#block-ui-message').html();
        var disabledElms = form.find(':input:disabled');
        disabledElms.attr('disabled', false);
        var params = form.serializeArray(); 
        jQuery.ajax({
            url: form.attr('action'),
            type: 'post',
            dataType: 'json',
            data: params,
            beforeSend: function(){
                var beforeSendEvent = jQuery.Event('neutron.form.beforeSend');
                jQuery("body").trigger(beforeSendEvent);
                jQuery.blockUI({ message: message});
                clearMsgs();
            },
            success: function(data, textStatus, jqXHR){
                if(data.success == true){
                    successMsg = jQuery('#message-form-success').html()
                        .replace('__MSG__', data.successMsg);
                    jQuery('#messages').append(successMsg);
                    form.hide();
                    jQuery("html, body").animate({scrollTop:400}, "slow");
                } else if (data.success == false){ 
                    buildErrors(data.errors);
                    jQuery('#messages').append(jQuery('#message-form-invalid').html());
                    jQuery('.field-error').fadeIn('slow').fadeOut().fadeIn('slow');
                    jQuery("html, body").animate({scrollTop:400}, "slow");                  
                }

                var responseEvent = jQuery.Event('neutron.form.response');
                jQuery("body").trigger(responseEvent);
            },
            error: function(jqXHR, textStatus, errorThrown){ 
                jQuery('#error-msg').fadeIn();
                jQuery("html, body").animate({scrollTop:0}, "slow");
            }
        });
        
        disabledElms.attr('disabled', true);
        return false;
    });
    
    jQuery('.closeable').live('click', function(){ 
       clearMsgs();
       return false;
    });
});

function buildErrors(errors){

    if(!jQuery.isPlainObject(errors)){
        return false;
    }

    jQuery.each(errors, function(k,v){ 
        buildErrorMsgs(k,v);
        buildErrors(v);

    });
}

function buildErrorMsgs(key, errors)
{  
    var html = '';
    if(jQuery.isArray(errors)){
        jQuery.each(errors, function(k,v){ 
            html += '<p class="field-error" style="display:none;">&rarr; ' + v + '</p>';
        });
    }

    jQuery('#' + key).after(html);
}



function clearMsgs()
{
    jQuery('.field-error').remove();	
    jQuery('#messages').empty();
}


