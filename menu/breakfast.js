function Breakfast() {
	var mainImg = document.getElementById("mainImage");
	var breakfast = document.getElementById("breakfast");
	var lunch = document.getElementById("lunch");
	var dinner = document.getElementById("dinner");
	var breakfastBtn = document.getElementById("PanelBox1"), lunchBtn = document.getElementById("PanelBox2"), dinnerBtn = document.getElementById("PanelBox3");

	breakfast.style.display = "block";
	mainImg.style.display = "none";
	lunch.style.display = "none";
	dinner.style.display = "none";
	
	breakfastBtn.style.background = "rgb(100, 149, 237)";
	document.getElementById("menuGroups1").style.color = "white";
	console.log(breakfastBtn.style.background);
	
	if( lunchBtn.style.background === "rgb(100, 149, 237)"){
	lunchBtn.style.background = "url(images/ricepaper_v3/ricepaper_v3.png)";
	document.getElementById("menuGroups2").style.color = "#434746";
	console.log("test");
	}
	if( dinnerBtn.style.background === "rgb(100, 149, 237)"){
	dinnerBtn.style.background = "url(images/ricepaper_v3/ricepaper_v3.png)";
	document.getElementById("menuGroups3").style.color = "#434746";
	}

	
}