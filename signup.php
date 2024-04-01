<html>


<body>

<h1>Create Account</h1><br>
 
<form action="connect.php" method="POST">
First Name: <input type="text" name="firstname" required><br>
Last Name: <input type="text" name="lastname" required><br>
E-mail: <input type="text" name="email" required><br>


Gender: 
<select name="sel_gender">
	<option selected disabled>Choose gender</option>
	<option value="f">Female</option>
	<option value="m">Male</option>
	<option value="l+">LGBTQ+</option>
</select>
<br>
Create password: 
<input type="password" name="pass" minlength="6" required /> 
<br><br>



<br><br>
<input type="submit" id="sub">

</form>



</body>
</html>