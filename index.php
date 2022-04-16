<html>
    <head><title>Login Page</title></head>
	<link rel="stylesheet" href="Css.css">
<body>
<div class="login-page">
	<div class="text-center">
       <h1>Welcome</h1>
       <p>Sign in to start your session</p>
     </div>

<form action="login_page.php" method="post">
		<div class="box"><table align="center">
			<div  class="form-group"><tr>
			 <td>
			   <input type="text" name="user_name" placeholder="User name"/>
			 </td>
			</tr>
			</div>
			 <div  class="form-group">
			<tr>
			 <td>
			   <input type="password" name="password" placeholder="Password"/>
			 </td>
			</tr>
			</div>
			<tr>
			 <td>
			   <input  class="form-group" type="submit" name="submit" value="Login"/>
			 </td>
			</tr>
		</table>
			</div>
</form>	
</div>	

</body>

</html>