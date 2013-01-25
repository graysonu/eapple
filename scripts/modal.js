$(function() {
	var windowHeight = $(window).height();
	windowHeight = windowHeight * .90;
	$("#infoModal").dialog({
		modal: true,
		autoOpen: false,
		draggable: false,
		height: windowHeight,
		width: 960,
		resizable: false,
		buttons: {
			Close: function() {
				$( this ).dialog( "close" );
			}
		}
	});
});