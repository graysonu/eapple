<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>eApple</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script>
	function showApples(str){
		var xmlhttp;
		if (str==""){
			document.getElementById("appleArea").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
  		else{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
  		xmlhttp.onreadystatechange=function(){
  			if (xmlhttp.readyState==4 && xmlhttp.status==200){
  				document.getElementById("appleArea").innerHTML=xmlhttp.responseText;
  			}
  		}
  		xmlhttp.open("GET", "worker.php?zones="+str, true);
  		xmlhttp.send();
  		}
	}
	</script>
</head>

<body>
	</script>
	<script>
	function updateVar(variable, value){
		$_GET[variable] = value;
	}
	</script>
	<script>
	$(document).ready(function() {
		$("a.cmurefine").click(function(){
			$("#marketoptions").toggle();
		})
	});
	</script>
	<script>
	$(document).ready(function() {
		$("a.sizerefine").click(function(){
			$("#sizeoptions").toggle();
		})
	});
	</script>
	<script>
	$(document).ready(function() {
		$("a.flavorrefine").click(function(){
			$("#flavoroptions").toggle();
		})
	});
	</script>
	<script>
	$(document).ready(function() {
		$("a.texturerefine").click(function(){
			$("#textureoptions").toggle();
		})
	});
	</script>
	<script>
	$(document).ready(function() {
		$("a.skingroundcolorrefine").click(function(){
			$("#skingroundcoloroptions").toggle();
		})
	});
	<script>
	$(document).ready(function() {
		$("#cmuopt").click(function(){
			$("table.appleresults").toggle();
		})
	})
	</script>
	<div id="refiner">
		<!-- <a href="#" class="cmurefine">Refine by cmu</a>
		<ul id="marketoptions">
			<li><a href="eapple.php?currentmarketuses=Wholesale">Wholesale</a></li>
			<li><a href="eapple.php?currentmarketuses=Retail">Retail</a></li>
			<li><a href="eapple.php?currentmarketuses=Home">Home</a></li>
		</ul> -->
		<a href="#" class="cmurefine">Refine by cmu</a>
		<ul id="marketoptions">
			<li><a href="#" id="cmuopt" onclick="showApples('cmu', 'wholesale')">Wholesale</a></li>
			<li><a>Retail</a></li>
			<li><a>Home</a></li>
		</ul>

		<br />

		<a href="#" class="sizerefine">Refine by Fruit Size</a>
		<ul id="sizeoptions">
			<li><a href="eapple.php?fruitsize=Small">Small</a></li>
			<li><a href="eapple.php?fruitsize=Medium">Medium</a></li>
			<li><a href="eapple.php?fruitsize=Large">Large</a></li>
			<li><a href="eapple.php?fruitsize=Very Large">Very Large</a></li>
		</ul>

		<br />

		<a href="#" class="flavorrefine">Refine by Fruit Flavor</a>
		<ul id="flavoroptions">
			<li><a href="eapple.php?fruitflavor=Bland">Bland</a></li>
			<li><a href="eapple.php?fruitflavor=Sweet">Sweet</a></li>
			<li><a href="eapple.php?fruitflavor=Sweet-Tart">Sweet-Tart</a></li>
			<li><a href="eapple.php?fruitflavor=Tart">Tart</a></li>
		</ul>

		<br />

		<a href="#" class="texturerefine">Refine by Fruit Texture</a>
		<ul id="textureoptions">
			<li><a href="eapple.php?fleshtexture=Soft">Soft</a></li>
			<li><a href="eapple.php?fleshtexture=Medium">Medium</a></li>
			<li><a href="eapple.php?fleshtexture=Firm">Firm</a></li>
			<li><a href="eapple.php?fleshtexture=Very Crisp">Very Crisp</a></li>
		</ul>

		<br />

		<a href="#" class="skingroundcolorrefine">Refine by Skin Ground Color</a>
		<ul id="skingroundcoloroptions">
			<li><a href="eapple.php?skingroundcolor=Green">Green</a></li>
			<li><a href="eapple.php?skingroundcolor=Greenish-Yellow">Greenish-Yellow</a></li>
			<li><a href="eapple.php?skingroundcolor=Yellow">Yellow</a></li>
			<li><a href="eapple.php?skingroundcolor=Cream">Cream</a></li>
		</ul>

	</div>

	<div id="wrap">
		<a href="destroy.php">Return to the front page</a><br />
		<form>
		Please select the hardiness zone where you plan on planting: <br />
		<select name="zones" onchange="showApples(this.value)">
			<option value="">Select proper hardiness zone(s):</option>
			<option value="2a">2a</option>
			<option value="2b">2b</option>
			<option value="3a">3a</option>
			<option value="3b">3b</option>
			<option value="4a">4a</option>
			<option value="4b">4b</option>
			<option value="5a">5a</option>
			<option value="5b">5b</option>
			<option value="6a">6a</option>
			<option value="6b">6b</option>
			<option value="7a">7a</option>
			<option value="7b">7b</option>
		</select><br />
	</form>
	<br>
	<div id="appleArea">
		This is where the apples should be displayed.
	</div>
	</div>
</body>
</html>