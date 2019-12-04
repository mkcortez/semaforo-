<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<script>
			function verde(){
				document.getElementById('verde').style.backgroundColor="green";
				document.getElementById('amarillo').style.backgroundColor="black";
				document.getElementById('rojo').style.backgroundColor="black";				
			}
			function amarillo(){
				document.getElementById('verde').style.backgroundColor="black";
				document.getElementById('amarillo').style.backgroundColor="yellow";
				document.getElementById('rojo').style.backgroundColor="black";
			}
			function rojo(){
				document.getElementById('verde').style.backgroundColor="black";
				document.getElementById('amarillo').style.backgroundColor="black";
				document.getElementById('rojo').style.backgroundColor="red";
			}
		</script>
		<div style="border: 10px;background: black; width: 50px;border-radius: 10px">
			<div onclick="verde()" id="verde" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: black"></div>
			<div onclick="amarillo()" id="amarillo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: black"></div>
			<div onclick="rojo()" id="rojo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: black"></div>
		</div>
	</center>

</body>
</html>