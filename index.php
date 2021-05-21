<?php

$con  = mysqli_connect('localhost','root','','sample');


if(!$con)
{
die('Unable to connect');
}
if($_POST)
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE email ='$username' AND password ='$password';";
$result =mysqli_query($con,$sql);
if($result)
{
if(mysqli_num_rows($result)==1)
{
echo "Welcome user";
}
else
{
echo "Invalid";
}
}
 }   
?>

<html>

<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Login</p>
   <form action method="post">
      <input class="un " name="username" id="username" type="text" align="center" placeholder="Username">
      <input class="pass" name="password" id="password" type="password" align="center" placeholder="Password">
     
<button class="submit" align="center" type="submit">Login</button>
     
            
           </form>     
    </div>
     
</body>

</html>



