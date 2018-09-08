<html>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<link href="normalize.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

                        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <head>
    <meta charset="utf-8">
    <title>Marketplace</title>
  </head>
  <body style="text-align:center">
<style type="text/css">
*{
  box-sizing: border-box;
}

body {
  position: absolute;
  top: 0;
  margin: 0;
  padding: 0;
  width: 100%;
  padding-top: 80px;
  height: 1900px;
}

header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 10;
}

@supports (position: sticky) {
  body {
    padding-top: 0;
  }

  header {
    position: sticky;
  }

}

.navbar {
  position: relative;
  height: 80px;
  width: 100%;
  transition: 0.5s ease;
}

.navbar .nav {
  margin: 0;
  padding: 0;
  display: inline-block;
  float: right;
  margin-right: 5%;
}

.navbar .nav .item {
  list-style: none;
  display: inline-block;
  font-size: 18px;
  padding: 5px;
  font-weight: 300;
  line-height: 80px;
  margin-right: 20px;
  transition: 0.5s ease;
}

.navbar .nav .item .contact {
  display: inline-block;
  background-color: #ffffff;
  height: 40px;
  line-height: 30px;
  padding: 5px;
  border-radius: 2px;
  transition: 0.5s ease;
}

.navbar .nav .item a {
  text-decoration: none;
  color: inherit;
}

.navbar .logo {
  float: left;
  display: inline-block;
  margin-top: 5px;
  margin-left: 5%;
  width: 70px;
  height: 70px;
  background-color: firebrick;
  transition: 0.5s ease;
}

.navbar .logo img {
  display: none;
}

.scrolled {
 transition: 0.5s ease;
}

.scrolled.navbar {
  height: 50px; 
  background-color: rgba(0, 0, 0, 0.2);
  transition: 0.5s ease;

}


.scrolled.navbar .nav .item {
  line-height: 40px;
  transition: 0.5s ease;
}

.scrolled.navbar .nav .item .contact {
  display: inline-block;
  background-color: #ffffff;
  height: 40px;
  line-height: 30px;
  padding: 5px;
  border-radius: 2px;
  transition: 0.5s ease;
}

.scrolled.navbar .logo {
  float: left;
  display: inline-block;
  margin-top: 5px;
  margin-left: 5%;
  width: 40px;
  height: 40px;
  background-color: firebrick;
  transition: 0.5s ease;
}

</style>
<header>
      <div class="navbar">
        <ul class="nav">
          <li class="item">
            <a href="/home">Homepage</a>
          </li>

          <li class="item">
            <a href="/Sell">Sell an Item</a>
          </li>

		   <li class="item">
            <a href="/Browse">Browse Market</a>
          </li>

		  
          <li class="item">
            <a href="/signout">Signout</a>
          </li>

          <li class="item">
            

          </li>
        </ul>

        <div class="logo">
          <img src="#">
        </div>
      </div>
    </header>








@yield('content')

<div  class="footer">
Designed by <b href="mefa">Mehmet Can</b>
  </body>
</html>