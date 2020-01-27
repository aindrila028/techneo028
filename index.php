<!DOCTYPE HTML>
<html>

<head>
<title>Puppy Pawss</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }

  .header-right {
    float: none;
  }
}
</style>
</head>

<style>
  .logopic {
   text-align: center;
}
</style>

<body>
<div class="header">
  <a href="#default" class="logo">Puppy Paws</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
<br/>
<div class="logopic">
  <img src="PuppyPaws_logo.png" alt="Trulli" width="800" height="320">
</div>
<br/>
<h2 text-align="center"> Register now </h2>

<form action="welcome.php" method="post">
name: <input type= "text" name="name"> <br>
email: <input type= "text" name= "email"> <br>
<input type= "submit">
</form>
</body>



</html>

