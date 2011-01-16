/**
 * 
 */
jQuery(function() {
	
	var tmpHeight = 200;
	
	jQuery('input[type=submit]').addClass('wymupdate');
    jQuery('.wymeditor').wymeditor({
    	preInit : function(wym) {
    		tmpHeight = jQuery(wym._element).height();
    	},
    	postInit: function(wym) {
        	/*wym.resizable({
    			handles: 's,e',
    			maxHeight: 2000
    		});*/
    	
    		jQuery(wym._iframe).height(tmpHeight);
     	}
    });
    
    // Change iframe height
});
