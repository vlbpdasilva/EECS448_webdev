function validator()
{
	
	var pw1 = document.getElementById("form1").elements.namedItem("password1").value;
	var pw2 = document.getElementById("form1").elements.namedItem("password2").value;
	
	if (pw1 == pw2)
	{
		alert("Passwords match.");
	}
	else
	{
		alert("Passwords do NOT match");
	}


}