<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}
</style>
</head>
<body> 

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<table align="center">
<form method = "post" id="store_manager" action='add_manager.php'>
<tr><td>name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Date of birth</td><td><input type="date" name="dob"></td></tr>
<tr><td>gender</td><td><input type="radio" name="gender" value="male">male</td><td><input type="radio" name="gender" value="female">female</td></tr>
<tr><td>email:</td><td><input type="email" name="email"></td></tr>
<tr><td>contact number</td><td><input type="text" name = "phone"></td></tr>
<tr><td>address</td><td><input type="textarea" name = "address"></td></tr>
<tr><td colspan=2><input type="submit" name = "add_manager" value="submit"></td></tr>


</body>
</html>
