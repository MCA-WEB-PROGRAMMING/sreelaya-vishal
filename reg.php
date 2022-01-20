<?php
if(isset($_POST['submit']))
{
    $pass=$_POST["pass"];
    $username=$_POST["username"];
    $gmail=$_POST["gmail"]
    $uppercase=preg_match('@[A-Z]@',$pass);
    $lowercase=preg_match('@[a-z]@',$pass);
    $number=preg_match('@[0-9]@',$pass);
    $gmail=preg_match('@[a-zA-Z0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}@',$gmail);

     if ($username=="")
     {
        echo ("enter the username\r");
        echo"<br>";
     }
        
        if ($pass=="" && strlen($pass)<8)
        { 
           echo ("enter a password\r");
        }
elseif(!$uppercase||!$lowercase||!$number)
{
 echo("enter valid password");
}
}
?>


<html>
<style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            
            background-color: #ADABAB;
         }
         
         .form {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
        
         
         .form input[type="username"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h1{
            text-align: center;
            color: #017572;
         }

      </style>
<body>
    <form method="POST" align="center">
    <h1>enter the details</h1>
    name:    <input type="text"  name="name"><br>
    gmail:   <input type="gmail"  name="gmail"><br>
    username:<input type="text"  name="username"><br>
    password:<input type="password"  name="pass"><br>
    re-password:<input type="password"  name="pass"><br>
    <br><input type="submit" name="submit">
    </form>
</body>
</html>