$(document).ready(function() {
	bindRetrieveApples("zones");
});

function bindRetrieveApples(param){
	$(".hardinesser").change(function() {
		value = this.value;
		$.get("worker.php?"+param+"="+value,function(data,status) {
			$("#applearea").html(data);
			bindDialog();
		});
	});
}