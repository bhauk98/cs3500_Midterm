<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title>The CK - Reservations</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/changes.css">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
	
</head>
<body>
	<div class="top">
		<nav class="navbar navbar-default" id="background" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" id="head-button" data-toggle="collapse" data-target="#mynavbar">
      				<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
    			</button>
				<img class="navbar-brand" src="images/kettle.png">
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav ">
					<li><a id="nav-color" href="index.html">Home</a></li>
					<li><a id="nav-color" href="catelog.html">Menu</a></li>
					<li><a id="nav-color" href="catering.html">Catering</a></li>
					<li><a id="nav-color" href="reservations.html">Reservations</a></li>
					<li><a id="nav-color" href="about.html">About Us</a></li>
				</ul>
			</div>
		</div>
		</nav>
	</div>

	<div class="container">
		<div class="jumbotron" id="background">
			<h1 id="head-font">Reservations</h1><br>
			<form class="resForm" method='get' action='http://www.randyconnolly.com/tests/process.php'>
				<label>Name: <k>*</k></label>
				<input type="text" name="custName" placeholder="John Smith" required><br><br>
				<label>Phone Number: <k>*</k></label>
				<input type="tel" name="custPhone" placeholder="(999) 999-9999" required><br><br>
				<label>Reservation Date: <k>*</k></label>
				
				<input type="date" name="resDate" id="datePicker" required><br><br>
				<script>
				document.getElementById('datePicker').value = new Date().toISOString().substring(0, 10);
				</script>
				<label>Time: <k>*</k></label>
				<input type="time" name="custTime" id="timePicker" required><br><br>
				<script type="text/javascript">
				  document.getElementById("timePicker").value = new Date().getHours();
				</script>
				<label>No. of guest: <k>*</k></label>
				<input type="number" name="noGuest" placeholder="" min='1' max='10' required><br><br>
				<label>Table: <k>*</k></label>
				<select name="tableNo">
					<option>Table 1</option>
					<option>Table 2</option>
					<option>Table 3</option>
					<option>Table 4</option>
					<option>Table 5</option>
				</select>
				<br><br>
				<input type="submit" value="Complete" class="compBtn"/><br />
			</form>
		</div>
	</div>
	<div class="footer" id="background">
		<div class="container">
			<p class="footer-text">
				<br>Copper Kettle<br>
				720 S Capital Ave<br>
				Athens, MI 49011<br>
				(269)729-9439<br><br>
				Everything on this page is for class purpose only.
			</p>
		</div>
	</div>
</body>
</html>