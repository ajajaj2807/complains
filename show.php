<!DOCTYPE html>
<html>
<head>
	<title>MMM Complaints Page</title>
</head>

<body>
	<h2>Lodged complains</h2>
	<br><br>
	<table id="maintable">
		<tr>
			<th>Name</th>
			<th>Roll No.</th>
			<th>Room No.</th>
			<th>Complain</th>
		</tr>	
		<?php echo readfile("register.xml"); ?>
	</table>
</body>
</html>
		
