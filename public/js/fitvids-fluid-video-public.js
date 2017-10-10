(function( $ ) {
	'use strict';

	 $(function() {
	 	$("body").fitVids({
			customSelector: "iframe[src^='https://videopress.com'], iframe[src^='https://vine.co']"
		});
	 });

})( jQuery );
