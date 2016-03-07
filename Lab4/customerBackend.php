<title>Order Confirmation</title>


<?php

    echo "<link rel='stylesheet' type='text/css' href='store_style.css' />";  
    echo "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
  	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>";
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $strawberry = $_POST["strawberry"];
    $banana = $_POST["banana"];
    $watermelon = $_POST["watermelon"];
    $delivery = $_POST['delivery'];
    $delivery_integer = 0;
    
    $priceOfDelivery;
    if($delivery == "3 Day Delivery")
    {
        $priceOfDelivery = "$ 5.00";
        $delivery_integer = 5;
    }
    elseif($delivery == "Free Delivery")
    {
        $priceOfDelivery = "FREE";
    }
    if($delivery == "Overnight Delivery")
    {
        $priceOfDelivery = "$ 50.00";
        $delivery_integer = 50;
    }

    echo "<br><center><h2>Thank you for your purchase! </h2>";
    echo "<h3> Your username is " . $username . " and your password is " . $password . ".</h3>";
   	
 
    $price  =  $strawberry + (3 * $banana) + (5 * $watermelon) + $delivery_integer;
    echo "<table>
                <tr>    <td align=center>  </td>
			<td align=center> Quantity </td>
			<td align=center> Cost Per Item </td>
			<td align=center> Sub Total </td>
		 </tr>
		 <tr>
			<td align=center> Strawberry </td>
			<td align=center> " . $strawberry . "</td>
			<td align=center> $ 1.00 </td>";

		echo "<td align=center>$ " .  $strawberry . ".00</td> </tr>";
		
    echo "<tr>    <td align=center> Banana </td>
                        <td align=center>" . $banana . "</td>
                        <td align=center> $ 3.00 </td>
                        <td align=center>$ " . (3  * $banana) . ".00</td>
                        </tr>";

     echo "<tr>    <td align=center> Watermelon </td>
                        <td align=center>" . $watermelon . "</td>
                        <td align=center> $ 5.00 </td>
                        <td align=center>$ " . (5  * $watermelon) . ".00</td>
                        </tr> ";
                        
    echo "<tr>     <td align=center> Shipping </td>
                        <td colspan=2 align=center>" . $delivery . "</td>                        
                        <td align=center> " . $priceOfDelivery . "</td>
                        </tr> ";

    echo "<tr>  <td colspan=3 align=center> <h2>Total Cost</h2></td>
                        <td align=center><h2>$ " . $price . ".00</h2></td>
                        
                        
                        </tr></table></font> ";


?>
