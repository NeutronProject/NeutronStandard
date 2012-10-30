/**
 * Initialization of recaptcha widget
 * 
 * @author Nikolay Georgiev
 * @version 1.0
 */
jQuery(document).ready(function(){
    
    /** 
     * Searching for recaptcha elements
     */
    jQuery('.neutron-recaptcha').each(function(key, value){ 
        var options = jQuery.parseJSON(jQuery(this).text());
        Recaptcha.create(options.public_key,
            options.id, 
            {
              theme: options.theme,
              lang: options.lang
            }
        );
            
        jQuery('body').bind('neutron.form.response', function(){
            Recaptcha.reload();
        });
    });
    
});