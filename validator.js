function validator()
{
	
	var pw1 = document.getElementById("form1").elements.namedItem("password1").value;
	var pw2 = document.getElementById("form1").elements.namedItem("password2").value;
	
	if (pw1 == pw2 && pw1.length > 7 )
	{
		alert("Passwords match.");
	}
	
	else if (pw1 == pw2 && pw1.length < 8)
	{
		alert("Password must be at least 8 characters long.");

	}
	
	else if (pw1 != pw2)
	{
		alert("Passwords do NOT match");
	}
}