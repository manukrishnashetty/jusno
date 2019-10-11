<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallary display </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Roboto:400,600,700%7CLato:400,700' type='text/css' media='all'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <link rel="shortcut icon" href="img/red.png" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css\styles.css"> -->
 
     


</head>

<body class="home">

    <header class="header-basic-light">
        <div class="header-limiter">
            <h1><a href="#">Talavadi<span>logo</span></a></h1>
            <nav>
                <a href="/">Home</a>
                <a href="/user_show_newsfeed">News Feed</a>
                <a href="/user_show_gallery">Gallary</a>
                <!-- C:\xampp\htdocs\restart\gallary -->
                @auth 
                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>                   
                                    
                @endauth

                @guest
                <a href="login">login/Signup</a>
                @endguest
            </nav>
        </div>
    </header>
<style type="text/css">
     .header-basic-light{
    padding: 20px 40px;
    box-sizing:border-box;
    box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.15);
    height: 80px;
    background-color: #ff2b06;
}

.header-basic-light .header-limiter {
    max-width: 1200px;
    text-align: center;
    margin: 0 auto;
}

/* Logo */

.header-basic-light .header-limiter h1{
    float: left;    
    font:28px Cookie, sans-serif;
    line-height: 40px;
    margin: 0;

}

.header-basic-light .header-limiter h1 span {
    color: #c6c6c6;
}
 
/* The header links */

.header-basic-light .header-limiter a {
    color: #fff;
    text-decoration: none;
}

.header-basic-light .header-limiter nav{
    font:18px Arial, Helvetica, sans-serif;
    line-height: 40px;
    float: right;
}

.header-basic-light .header-limiter nav a{
    display: inline-block;
    padding: 0 5px;
    opacity: 0.9;
    text-decoration:none;
    color: #ffffff;
    line-height:1;
  }

  /* unvisited link */
.header-basic-light .header-limiter nav a:link{
  color: #FFFFFF;
}

/* visited link */
.header-basic-light .header-limiter nav a:visited{
  color: #fff;
}

/* mouse over link */
.header-basic-light .header-limiter nav a:hover{
  color: #00ced1;
}

/* selected link */
.header-basic-light .header-limiter nav a:active{
  color: white;
} 

.header-basic-light .header-limiter nav a.selected {
    background-color: #ff2b06;
    color: #FFFFFF;
    border-radius: 3px;
    border-style: double;
    padding:6px 10px;
 
}

@media only screen and (min-width: 670px) {
  .footer { 
   position: fixed;  
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #ff2b06;
   color: white;
   text-align: center;
   line-height: 20px;   
   overflow: auto;
}
}
 

/* Making the header responsive. */

@media all and (max-width: 670px) {

    .header-basic-light {
        padding: 20px 0;
        height: 80px;
    }

    .header-basic-light .header-limiter h1 {
        float: none;
        margin: -8px 0 10px;
        text-align: center;
        font-size: 24px;
        line-height: 1;
    }

    .header-basic-light .header-limiter nav {
        line-height: 1;
        float:none;
    }

    .header-basic-light .header-limiter nav a {
        font-size: 13px;
    }
/* footer */
  .footer {   
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #ff2b06;
   color: white;
   text-align: center;
   line-height: 20px;   
   overflow: auto;
}
}

/* For the headers to look good, be sure to reset the margin and padding of the body */

body {
    margin:0;
    padding:0;
}
 
/* container */
.container { 
  align-content: center;
  grid-template-columns: auto auto auto;
  grid-gap: 25px; 
  padding: 30px;
  background-color: #f5fffa;

}



</style>
  
</body>

</html>