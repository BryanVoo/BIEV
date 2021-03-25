/* Raw JS */
$( document ).ready( function() {
	if ( 0 < $( 'html.cdc-2020' ).length && 0 < $( '.col.cdc-logo' ).length ) {
		var newQrCode = $( '<div id="cdc-qrcode-placeholder" />' ).hide();
		$( '.col.cdc-logo' ).after( newQrCode );
		var pageUrl = window.location.href;
		pageUrl = pageUrl.split( '#' )[ 0 ];
		pageUrl = pageUrl.split( '?' )[ 0 ];
		var qrcode = new QRCode( document.getElementById( 'cdc-qrcode-placeholder' ), {
			text: pageUrl + '?s_cid=qr2021',
			width: 96,
			height: 96,
			colorDark: "#000000",
			colorLight: "#ffffff",
			correctLevel: QRCode.CorrectLevel.H
		} );

		var rule = '#cdc-qrcode-placeholder{ display: inline-block!important; float: right; }header .cdc-logo{ width: 80%; display: inline-block; height: 96px; }';
		var head = document.head || document.getElementsByTagName( 'head' )[ 0 ];
		var css = document.createElement( 'style' );

		if ( css && head ) {
			css.setAttribute( 'type', 'text/css' );
			css.setAttribute( 'media', 'print' );
			if ( css.styleSheet ) { // For IE
				css.styleSheet.cssText = rule;
			} else {
				css.appendChild( document.createTextNode( rule ) );
			}
			head.appendChild( css );
		}
	}
} );

/* End Raw JS */
