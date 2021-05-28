<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CryptoAddress!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class="container">
        
        <div class='row justify-content-md-center'>
            <div class='col'>
                Welcome <?php echo $_SESSION["email"]?>
            </div>
        </div>
        <div class='row justify-content-md-center'>
            <div class='col'>
                Your bitcoin address is <?php echo $_SESSION["btcAddr"]?>
            </div>
        </div>
        <div class='row justify-content-md-center'>
            <div class='col'>
                Your ether address is <?php echo $_SESSION["ethAddr"]?>
            </div>
        </div>
    </div>
</body>
</html>