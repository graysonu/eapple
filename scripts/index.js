$(document).ready(function() {
	bindRetrieveApples("zones");
});

function bindRetrieveApples(param){
	$(".hardinesser").change(function() {
		$("#restarter").show();
		$("#refiner_area").show();
		value = this.value;
		$.get("worker.php?"+param+"="+value,function(data,status) {
			$("#applearea").html(data);
			bindDialog();
		});
		$("#introductory").hide();
		$("#usaselector").hide();
		$("#canadaselector").hide();
	});
}