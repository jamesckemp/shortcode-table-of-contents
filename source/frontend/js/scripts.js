(function( $, document ) {
	var jck_stoc = {

		/**
		 * Set up cache with common elements and vars.
		 */
		cache: function() {

		},

		/**
		 * Run on doc ready.
		 */
		on_ready: function() {
			jck_stoc.cache();
		}
	};

	$( document ).ready( jck_stoc.on_ready );
}( jQuery, document ));