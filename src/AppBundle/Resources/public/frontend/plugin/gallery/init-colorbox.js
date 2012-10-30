jQuery(document).ready(function(){
	var trans = jQuery('#gallery-outer-wrap').data('trans');  console.log(trans);
	jQuery('a.colorbox-item').colorbox(jQuery.extend({rel: 'gallery'}, trans));
});