<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title>The CK - Menu</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/changes.css">
	<script src="menu/breakfast.js"></script>
	<script src="menu/lunch.js"></script>
	<script src="menu/dinner.js"></script>
	<style>
		#mainImage{
			display:block;
		}
		#breakfast, #lunch, #dinner{
			display:none;
		}
	</style>

	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 

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
		<div class="col-md-3">
				<div class="panel-body" >
					<ul class="list-group" >
						<div onclick="Breakfast()" id="breakfastBtn"><li class="list-group-item" id="PanelBox1"><span id="menuGroups1">Breakfast</span></li></div>
						<div onclick="Lunch()" id='lunchBtn'><li class="list-group-item" id="PanelBox2"><span id="menuGroups2">Lunch</span></li></div>
						<div onclick="Dinner()" id='dinnerBtn'><li class="list-group-item" id="PanelBox3"><span id="menuGroups3">Dinner</span></li></div>
					</ul>
				</div>
		</div>
		<div class="col-md-7">
			<div id="mainImage">
				<img src="images/hamburgerMainMenu.jpg" class="menu-mainimg" alt="Hamburger"  />
			</div>
			<div id="breakfast">
				<table class="menu-displayed" >
					<tr>
						<td>French Toast Special</td>
						<td>Two pieces of french toast with choice of ham, bacon or sausage</td>
						<td>$6.59</td>
					</tr>
					<tr>
						<td>Pancake Special</td>
						<td>Two of our fluffy pancakes with choice of ham, bacon or sausage</td>
						<td>$6.59</td>
					</tr>
					<tr>
						<td>Farmers Breakfast</td>
						<td>Juicy grilled sirloin steak, two eggs, potatoes and toast</td>
						<td>$8.59</td>
					</tr>
					<tr>
						<td>Breakfast Burrito</td>
						<td>Your choice of ham, bacon or sausage, grilled peppers and onions, with cheese in a soft tortilla shell</td>
						<td>$5.99</td>
					</tr>
					<tr>
						<td>Breakfast Sandwich	</td>
						<td>Egg, cheese and your choice oh meat (ham, bacon or sausage) on a grilled bagel or choice of toast</td>
						<td>$4.59</td>
					</tr>
					<tr>
						<td>Copper Kettle Special</td>
						<td>Two eggs, choice of ham, bacon or sausage, potatoes and toast</td>
						<td>$6.59</td>
					</tr>
				</table>
				</div>
				<div id="lunch"> 
				<table class="menu-displayed" >
					<tr>
						<td>Patty Melt</td>
						<td>Swiss & american cheeses, grilled onions & mushrooms on texas toast</td>
						<td>$5.99</td>
					</tr>
					<tr>
						<td>10oz Jumbo Cheeseburger</td>
						<td></td>
						<td>$7.99</td>
					</tr>
					<tr>
						<td>Bacon Cheeseburger</td>
						<td></td>
						<td>$6.99</td>
					</tr>
					<tr>
						<td>Copper Kettle Burger</td>
						<td>Fresh ground beef, grilled ham, bacon, cheese, lettuce, tomato & mayo</td>
						<td>$8.59</td>
					</tr>
					<tr>
						<td>Chicken Melt</td>
						<td>Grilled chicken breast, swiss cheese, grilled onions & peppers on texas toast</td>
						<td>$7.59</td>
					</tr>
					<tr>
						<td>Steak Sandwich</td>
						<td>Shaved steak, swiss cheese, lettuce, tomato and mayo</td>
						<td>$6.99</td>
					</tr>
				</table>
				</div>
				<div id='dinner'>
				<table class="menu-displayed"  >
					<tr>
						<td>Sirloin Steak</td>
						<td></td>
						<td>$12.99</td>
					</tr>
					<tr>
						<td>Light Side Meal</td>
						<td>Hamburger patty or grilled chicken breast, with cottage cheese and tomato slices</td>
						<td>$5.99</td>
					</tr>
					<tr>
						<td>Sirloin Steak & Shrimp</td>
						<td></td>
						<td>$14.99</td>
					</tr>
					<tr>
						<td>Chicken Strip Dinner</td>
						<td></td>
						<td>$9.99</td>
					</tr>
					<tr>
						<td>Battered Cod</td>
						<td></td>
						<td>$9.99</td>
					</tr>
					<tr>
						<td>Chop Steak</td>
						<td>W/grilled onions & mushrooms</td>
						<td>$9.99</td>
					</tr>
				</table>
				</div>
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