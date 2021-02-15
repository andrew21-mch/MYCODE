<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="css/style3.css">
</head>
<body style = "background-image: url(images/IMG-20200831-WA0128.jpg);">
    <nav><a href="index.php">HOME</a></nav>
<div class="login">
<form id="login" method="get" action="">
    <fieldset id="field" width="50px">
       <legend id="legend"><b>Login</b>

        </legend>
        <label>  
<p>Username:
</label>
    <input type="text" name="Username" id="username" placeholder="username"  size="20" maxlength="15">
<p>
<label>
<p>Password:
</label>
    <input type="password" name="Password" id="password" size="20" placeholder="password" maxlength="30">
</p>
    <p>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br/>
    </p> 
<p>
<button style = "position: relative">Login</button>
    <button style = "position: relative">Signup</button> <br>
    <center><button style = "position: relative"><a href ="password.html"> Reset Pass</a></button></center>
</p>
</fieldset>
</form>
</div>
</body>
</html>