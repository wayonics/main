<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		li{
			display: inline;
			padding:10px;
			float: left;
			margin: 5px;
		}
		input{
			width: 30px;
			margin: 5px;
		}
	</style>
</head>
<body>
<?php 

for ($p=1; $p < 8; $p++) { 
	# code...
	echo "<input type='checkbox' value='group_{$p}'> <label> Group_{$p} </label>";
}

?>
<button>SWAP</button>
<form>


	<table>

		<tr>
			<td>
				<ul>
			<?php
				for ($i=1; $i <=31 ; $i++) { 
					
					echo "<li><label>$i</label>::<input type='text' name='{$i}_day'> </li>";
				}
			?>
			</ul>
			</td>
		</tr>
	</table>
</form>
</body>
</html>