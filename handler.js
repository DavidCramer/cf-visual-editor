jQuery( function( $ ){
	if( typeof tinyMCE !== 'undefined'){
		var wrap = $('.wp-editor-wrap');
		if( wrap.length ){
			var form = wrap.closest('form');
			form.on('submit', function(){
				tinyMCE.triggerSave();
			});
		}
	}
});