<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div style="border: 10px; background: black; width:50px; border-radius: 10px;">
		<div id="rojo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: red"></div>
		<div id="amarillo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: yellow"></div>
		<div id="verde" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: green"></div>
	</div>
	<script>
		$(document).ready(function(){
			$("#rojo").click(function(){
				$("#verde").css('boxShadow', 'none');
				$("#amarillo").css('boxShadow','none');
				$("#rojo").css('boxShadow', '2px 2px 10px red');

			});
			$("#amarillo").click(function(){
				$("#verde").css('boxShadow','none');
				$("#amarillo").css('boxShadow', '2px 2px 10px yellow');
				$("#rojo").css('boxShadow','none');
			});
			$("#verde").click(function(){
				$("#verde").css('boxShadow', '2px 2px 10px green');
				$("#amarillo").css('boxShadow','none');
				$("#rojo").css('boxShadow', 'none');
			});
		})
	</script>
</body>
</html>