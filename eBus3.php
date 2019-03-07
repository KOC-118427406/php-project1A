<!DOCTYPE html>
<html>
<body>
    <style> 
            body  {
                background-color: lightskyblue
            }
            
            div  {
                background-color: whitesmoke;
                width: 300px;
                border: 25px steelblue;
                padding: 25px;
                margin: 25px;
            }
            
            body {margin:0;}
            
            </style>
<!--     //Starting the session to get the session variable from last page-->
<?php  
session_Start();
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ", $fullNameValue.".";
echo "<br></br>";
echo "the total value is ".$totalValue.".";
?>
</body>
</Head>