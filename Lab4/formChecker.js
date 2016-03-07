function reset()
{
	document.getElementById("form1").reset();
}




function order()
{

	var numStrawberries = document.getElementById("form1").elements.namedItem("strawberry").value;
	var numBananas = document.getElementById("form1").elements.namedItem("banana").value;
	var numWatermelons = document.getElementById("form1").elements.namedItem("watermelon").value;
	var username = document.getElementById("form1").elements.namedItem("username").value;
	var password = document.getElementById("form1").elements.namedItem("password").value;
	var valid = true;

	// Had to check online for help with email validation script 
	var atpos = username.indexOf("@");
   	var dotpos = username.lastIndexOf(".");

    	if (atpos<1 || dotpos<atpos+2 || dotpos+2 >= username.length || username.indexOf(".com" ) == -1)
  	{  
    		alert("You have entered an invalid email address!\nUse example@domain.com");   
		valid = false;
  	}	  

	if ( password == "")
	{
		alert("Password field was left blank.");
		valid = false;
	}

	// Shameless use of jQuery 
	if(($('input[name="delivery"]:checked').val()) == undefined)
	{
		alert ("Please select type of delivery.");
		valid = false;
	}

	if (numStrawberries < 0 || numBananas < 0 || numWatermelons < 0)
	{
		alert("All products must have quantities of 0 or greater.");
		valid = false;
	}

	if (numStrawberries == "" || numBananas == "" || numWatermelons == "")
	{
		alert("Please enter desired quantities for all products.");
		valid = false;
	}

	return valid;

}
