<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <center>
    consumer_id:<input type="number" name="ci1" id="ci1"><br>
    
    category:<input type="text" name="cat1" id="c1"><br>
<input type="submit" name="sub" value="submit" >
</form>
<?php
if(isset($_POST['sub']))
{
    $ci1=$_POST['ci1'];

    $cat1=$_POST['cat1'];
    $amount=0;
    if($cat1=15)
    {
        $amount=$cat1*3;
        
    }
   
    else if($cat1=30)
     {
    $amount=$cat1*6;
    }
    else if($cat1=60)
    {
    $amount=$cat1*12;
    }
    else if($cat1>60)
    {
    $amount=$cat1*24;
    }
    echo"<table border='1'><tr><th>consumer.no</th><th>amount</th></tr>";
 
 echo"<tr><td>$ci1</td><td>$amount</td></tr>";
 echo"</table>";
}
?>
</center>
</body>
</html>