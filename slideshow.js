
// Victor Luiz Berger Pereira da Silva
// Or... you could write 5 lines of jQuery

function next()
{

	if (document.getElementById("cena1").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "shown");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}

	else if (document.getElementById("cena2").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "shown");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}
	else if (document.getElementById("cena3").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "shown");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}
	else if (document.getElementById("cena4").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "shown");
		}

	else if (document.getElementById("cena5").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "shown");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}


}


function previous()
{

	if (document.getElementById("cena1").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "shown");
		}

	else if (document.getElementById("cena2").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "shown");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}
	else if (document.getElementById("cena3").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "shown");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}
	else if (document.getElementById("cena4").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "shown");
			document.getElementById("cena4").setAttribute("class", "hidden");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}

	else if (document.getElementById("cena5").getAttribute("class") == "shown")
		{
			document.getElementById("cena1").setAttribute("class", "hidden");
			document.getElementById("cena2").setAttribute("class", "hidden");
			document.getElementById("cena3").setAttribute("class", "hidden");
			document.getElementById("cena4").setAttribute("class", "shown");
			document.getElementById("cena5").setAttribute("class", "hidden");
		}


}



