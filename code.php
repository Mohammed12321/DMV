<!DOCTYPE html>
<html>
<head>

<script>
function validateForm() {
 var x1 = document.forms["myForm"]["code"].value;
var x2 = document.forms["myForm"]["sent_code"].value;


if (x1==x2)
{}
else{

        alert("Wrong code please try again");
        document.getElementById("code_id").style.color = "red";
        return false;
    
}
}
</script>
</head>
<body>



</body>
</html>





<?php

include 'connect.php';

$phone=$_POST['phone'];

$phone_search=$phone;


$code=(rand(1000,9999));
 
	$message=$_POST['message'];
	$msg = "Your Code is $code";


//Metro PCS				
$phone="$phone@mymetropcs.com";	
mail("$phone","SMS Message",$msg);
    			
				
//T-Mobile				
$phone="$phone@tmomail.net";			
mail("$phone","SMS Message",$msg);
    			
//Verizon Wireless				
$phone="$phone@vtext.com";				
mail("$phone","SMS Message",$msg);
    			
//AT&T				
$phone="$phone@txt.att.net";				
mail("$phone","SMS Message",$msg);
    			
//Sprint PCS				
$phone="$phone@messaging.sprintpcs.com";				
mail("$phone","SMS Message",$msg);
    			
//Nextel				
$phone="$phone@messaging.nextel.com";				
mail("$phone","SMS Message",$msg);
    			
//Cricket				
$phone="$phone@mms.cricketwireless.net";				
mail("$phone","SMS Message",$msg);
    			
//US Cellular				
$phone="$phone@email.uscc.net";				
mail("$phone","SMS Message",$msg);
    			
//Cingular (GSM)				
$phone="$phone@cingularme.com";				
mail("$phone","SMS Message",$msg);
    			
//Cingular (TDMA)				
$phone="$phone@mmode.com";
mail("$phone","SMS Message",$msg);




?>


<html>
<head>



<!DOCTYPE html>
<html>
<title>Enter Code</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<style>
body  {
    background-image: url("Images/395E5427-542A-42B0-93E0-66C7E17EDCE0.jpeg");
    background-size: cover;
}
</style>

<center>
	
<h3>
</br></br></br></br></br></br>
<form action="edit_test.php" name="myForm"  onsubmit="return validateForm()" method="post">

<input type="text" size="40" placeholder ="Enter Code" id="code_id" name="code" style="width:320px; height: 50px;" required></br>
<input type="hidden" size="40" value ="<?php echo $code; ?>" name="sent_code" style="width:320px; height: 50px;" required>
<input type="hidden" size="40"   value= "<?php echo "$phone_search"; ?>"   name="phone" style="width:320px; height: 50px;" >
<input type="hidden" size="40"   value= "<?php echo "$id"; ?>" id="demo" name="id" style="width:320px; height: 50px;" ></br>

<input type="submit" value="Insert code"  name="insert" style="width:320px; height: 50px;">

</form>
</h3>	
</center>
</html>





