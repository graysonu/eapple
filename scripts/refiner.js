
function refiner(param, str){
	$.get("worker.php?"+param+"="+str,function(data,status) {
		$("#applearea").html(data);
		bindDialog();
	});
}

function unsetAttributes(param){
	$.get("unsetter.php?q="+param,function(data,status) {
		$("#applearea").html(data);
		bindDialog();
	});
}