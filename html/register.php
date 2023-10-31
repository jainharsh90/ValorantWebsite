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
  background-image: url("../images/login-icon1.png");
  background-size: cover;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  position: relative;
  margin: 5% auto;
  margin-right: 130px;
  margin-top: 120px;
  width: 320px;
  height: 450px;
  background: #fe4553;
  opacity: 0.9;
  border-radius: 3px;

}

.left {
  position: absolute;
  top: 20px;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin-top: 10px;
  font-weight: 300;
  font-size: 28px;
  margin-left: 65px;
  font-weight: bold;
  text-shadow: 0px 0px 6px rgba(255,255,255,1);
  opacity: 0.9;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"]
 {
  text-shadow: 0px 0px 6px rgba(255,255,255,0.2);
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
  border: 3px solid #192536;
  transition: 0.2s ease;
}

::-webkit-input-placeholder {
  text-align: center;
}

:-moz-placeholder {
  text-align: center;
}

input[type="submit"] {
  margin-top: 28px;
  margin-left: 60px;
  width: 120px;
  height: 32px;
  background: #192536;
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
}

input[type="submit"]:active {
  opacity: 1;
  transition: 0.1s ease;
}

</style>
</head>
<body>
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form action="registervalidation.php" method="POST">
    <input type="email" name="email_id" placeholder="E-mail" required />
    <input type="tel" name="phone_no" placeholder="Phone-No" required/>
    <input type="text" name="username" placeholder="Username" required/>
    <input type="password" name="password" placeholder="Password" required/>
    
    <input type="submit" name="signup_submit" value="Register" />
    </form>
  </div>
</div>
</body>
</html>