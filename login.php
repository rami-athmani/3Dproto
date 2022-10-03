 <html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="stylee.css">
</head>
<body>
<div class="overlay">

<form name="loginForm" method="post" action="serv.php">
   <div class="con">
   <header class="head-form">
      <h2>Log In</h2>
	  <br>
      <p>login here using your username and password</p>
   </header>
   <br>
   <div class="field-set">
      <input class="form-input" id="txt-input"  name="username" type="text" placeholder="UserName" required>
      <br>
      <input class="form-input" type="password"  name="password" placeholder="Password" id="pwd"  name="password" required>
      <br>
	  <button class="log-in" name="sub"> Log In </button>
   </div>
  </div>
</form>
</div>