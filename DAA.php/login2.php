<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: purple;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  animation-name: example;
  animation-duration:10s;
  animation-iteration-count:infinite;
}
@keyframes example {
  0%   {background-color: red;}
  10% {background-color: purple;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  75% {background-color: orange;}
  100% {background-color: green;}
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>
</head>
<body>

<h2>Login</h2>
  <div class="imgcontainer">
  </div>

  <div class="container">
    <form action="login.php" method="post">
    <label for="uname"><b>email</b></label>
    <input type="text" placeholder="Zadajte email" name="uname" required>

    <label for="psw"><b>heslo</b></label>
    <input type="heslo" placeholder="Zadajte heslo" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Zabudli ste <a href="#">heslo?</a></span>
  </div>
</form>

</body>
</html><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: purple;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  animation-name: example;
  animation-duration:10s;
  animation-iteration-count:infinite;
}
@keyframes example {
  0%   {background-color: red;}
  10% {background-color: purple;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  75% {background-color: orange;}
  100% {background-color: green;}
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>
</head>
<body>

<h2>Login</h2>
  <div class="imgcontainer">
  </div>

  <div class="container">
    <form action="login.php" method="post">
    <label for="uname"><b>email</b></label>
    <input type="text" placeholder="Zadajte email" name="uname" required>

    <label for="psw"><b>heslo</b></label>
    <input type="heslo" placeholder="Zadajte heslo" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Zabudli ste <a href="#">heslo?</a></span>
  </div>
</form>

</body>
</html>