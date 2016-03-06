function reset()
{
	





}




function order()
{

	var numStrawberries = document.getElementById("form1").elements.namedItem("strawberry").value;
	var numBananas = document.getElementById("form1").elements.namedItem("banana").value;
	var numWatermelons = document.getElementById("form1").elements.namedItem("watermelon").value;
	var username = document.getElementById("form1").elements.namedItem("username").value;
	var password = document.getElementById("form1").elements.namedItem("password").value;

	// Had to check online for help with email validation script 
	var atpos = username.indexOf("@");
   	var dotpos = username.lastIndexOf(".");

    	if (atpos<1 || dotpos<atpos+2 || dotpos+2 >= username.length || username.indexOf(".com" ) == -1)
  	{  
    		alert("You have entered an invalid email address!\nUse example@domain.com");   
  	}	  

	if ( password == "")
	{
		alert("Password field was left blank.");
	}

	// Shameless use of jQuery 
	if(($('input[name="delivery"]:checked').val()) == undefined)
	{
		alert ("Please select type of delivery.");
	}

	if (numStrawberries < 0 || numBananas < 0 || numWatermelons < 0)
	{
		alert("All products must have quantities of 0 or greater.");
	}

	if (numStrawberries == "" || numBananas == "" || numWatermelons == "")
	{
		alert("Please enter desired quantities for all products.");
	}

}
