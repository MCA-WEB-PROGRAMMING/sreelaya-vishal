<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: rgb(1,0,0,0.5);
    background-size: cover;
   
}


th{
    text-align: center;
    padding:7px;
}
table{
    
    width: 900px;
    background-color: rgb(0,0,0,0.5);
    margin:100px auto 0px auto;
    height: -100px;
    color: #FFFFFF;
    text-align: center;
}

</style>
</head>

<body>
    <?php
    $r=array("Ghandi","Neharu","Ramdas","Rajethravarma");
    
    echo"<table border='1'><tr><th>sl.no</th><th>names</th></tr>";
  
    foreach($r as $t=>$s)
    {
        
      echo"(<tr><td>$t</td><td>$s</td></tr>)";
    }
    echo"</table>";
        ?>
    
</body>
</html>