<?php

function mult($x, $y)
{
	return($x * $y);

}

echo "<table>";

for($i = 1; $i <= 100; $i++)
{
	echo "<tr>"; echo "<td>"; echo "&nbsp"; echo "</td>";

	for($j = 1; $j <= 100; $j++)
	{
		echo "<td>";
		echo mult($i, $j); echo "&nbsp"; echo "&nbsp";
		echo "</td>";
	}
      
echo "</tr>";
}

echo "</table>";

?>
