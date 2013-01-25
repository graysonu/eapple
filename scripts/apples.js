function bindDialog() {
	$(".appleresults").click(function() {
		appleId = $(this).attr("id");
		showDialog(appleId);
	});
}

function showDialog(appleId) {
	$("#infoModal").attr("title", appleId);
	appleId = escape(appleId);
	// The following line is a hack fix to a bug regarding the trademark symbol in the apple names which was preventing the dialogs from being properly called.
	appleId = appleId.replace("%u2122", "%#u2122");
	// The following is also a hack fix to repair a bug regarding apostrophes within the name of an apple.
	appleId = appleId.replace("%27", "%#27");
	$.get("modal.php?cultivarname="+appleId,function(data,status) {
		$("#infoModal").html(data);
		$("#infoModal").dialog("open");
	});
}