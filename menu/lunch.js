function Lunch() {
   var mainImg = document.getElementById('mainImage'),breakfast = document.getElementById('breakfast'),
	lunch = document.getElementById('lunch'),dinner = document.getElementById('dinner');
	var breakfastBtn = document.getElementById("PanelBox1"), lunchBtn = document.getElementById("PanelBox2"), dinnerBtn = document.getElementById("PanelBox3");
	
	lunch.style.display = "block";
	mainImage.style.display = "none";
	breakfast.style.display = "none";
	dinner.style.display = "none";

	lunchBtn.style.background = "rgb(100, 149, 237)";
	document.getElementById("menuGroups2").style.color = "white";
	
	if(breakfastBtn.style.background === "rgb(100, 149, 237)"){
	breakfastBtn.style.background = "url(images/ricepaper_v3/ricepaper_v3.png)";
	document.getElementById("menuGroups1").style.color = "#434746";
	}
	if( dinnerBtn.style.background === "rgb(100, 149, 237)"){
	dinnerBtn.style.background = "url(images/ricepaper_v3/ricepaper_v3.png)";
	document.getElementById("menuGroups3").style.color = "#434746";
	}

}