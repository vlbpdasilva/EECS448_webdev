function border_set()
{
	var border_red_JS = document.getElementById("form1").elements.namedItem("border_red").value;
	var border_green_JS = document.getElementById("form1").elements.namedItem("border_green").value;
	var border_blue_JS = document.getElementById("form1").elements.namedItem("border_blue").value;
	var border_width_JS = document.getElementById("form1").elements.namedItem("border_width").value;
	
	document.getElementById("p_manipulator").style.borderColor = 
	"rgb("+ border_red_JS +","+border_green_JS+ "," +border_blue_JS+")";
	
	document.getElementById("p_manipulator").style.borderWidth = border_width_JS + "px";
}




function background_set()
{
	var border_red_JS = document.getElementById("form2").elements.namedItem("background_red").value;
	var border_green_JS = document.getElementById("form2").elements.namedItem("background_green").value;
	var border_blue_JS = document.getElementById("form2").elements.namedItem("background_blue").value;

	document.getElementById("p_manipulator").style.backgroundColor = 
	"rgb("+ border_red_JS +","+border_green_JS+ "," +border_blue_JS+")";
	
}
