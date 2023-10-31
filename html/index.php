
<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  top: -100px;
  background-image: url("../images/login-icon2.jpg");
  background-size: cover;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  overflow: hidden; 
}

#login-box {
  position: relative;
  margin: 5% auto;
  margin-right: 35px;
  margin-top: 0px;
  width: 370px;
  height: 724px;
  background: rgba(32%,32%,32%,0.2);
  opacity: 0.9;
  border-radius: 3px;

}

.left {
  position: absolute;
  top: 100px;
  left: 30px;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin-top: 10px;
  font-weight: 300;
  font-size: 28px;
  margin-left: 85px;
  font-weight: bold;
  color:  white;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"]
 {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  margin-left: 10px;
  margin-top: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  border-radius: 5px;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}


input[type="button"] {
  margin-top: 28px;
  margin-left: 60px;
  width: 120px;
  height: 32px;
  background: rgba(197,197,197,0.6);
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  border: 2px solid #0f1722;
  cursor: pointer;
}

input[type="button"]:hover,
input[type="button"]:focus {
  opacity: 0.8;
  transition: 0.1s ease;
  border-radius: 5px;
  background-color: #FFF;
  color: black;
}

input[type="button"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}
input[type="submit"] {
  margin-top: 28px;
  margin-left: 60px;
  width: 120px;
  height: 32px;
  background: rgba(197,197,197,0.6);
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  border: 2px solid #0f1722;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  transition: 0.1s ease;
  border-radius: 5px;
  background-color: #FFF;
  color: black;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}


</style>
</head>
<body>
<div id="login-box">
  <div class="left">
    <h1>Login</h1>
    <form action="loginvalidation.php" method="POST">
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required/>

    <input type="submit" name="login_submit" value="Login" />
    <input type="button" onclick="location.href = '../html/register.php' " name="register_submit" value="Register" />
    </form>
  </div>
</div>
</body>
</html>