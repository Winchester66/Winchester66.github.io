$( function() {
	var button_hide = document.getElementById("toggle");
	var accordion = document.getElementById("accordion");
	var icons = {
	  header: "ui-icon-circle-arrow-e",
	  activeHeader: "ui-icon-circle-arrow-s"
	};
	$( accordion ).accordion({
	  icons: icons
	});
	$( button_hide ).button().on( "click", function() {
	  if ( $( accordion ).accordion( "option", "icons" ) ) {
	    $( accordion ).accordion( "option", "icons", null );
	  } else {
	    $( accordion ).accordion( "option", "icons", icons );
	  }
	});
} );