<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallary display </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
 
    <link rel="stylesheet" type="text/css" href="{{ asset('user/gallery/css/styles.css') }}">       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/red.png" type="image/x-icon" />
   
</head>
@extends('user.layouts.master')

@section('content')
<body class="home">

    

    <div id="main-content"> 
        <div class="col-md-9 col-md-offset-3">
            <div class="projects">  
                <div class="project-item">  
  <form action="/index.html">  
     <textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>
         <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>

    
    <label for="file" style="cursor: pointer;">Select Image</label>
    <input type="submit" value="Upload">
    

    <img id="output" width="600" />

    <script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>     
  </form>
 
<style>
 



</style>
  </div> 
 
                <div class="project-item">
                    <a href="#">
                        <div class="profile_img"><img src="images/download.jpg" alt="" align="middle"></div>

                        <div class="profile">
                            <h4 align="left">Elon_Musk</h4></a>
                    </div>
                    <img src="images\2.jpg" alt="">
                    <div class="button">
                        <button type="button" style="background-color: white; background: 20px; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px; outline:0;  ">  Like  </h1>
                        </button>
                        <button type="button" style="background-color: white; background: none; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px;   outline:0;
">
                        Comment</h1>
                        </button>
                        <button type="button" style="background-color: white; background: none; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px;   outline:0;
">
                        Share</h1>
                        </button>

                    </div>

                    </div>
               

                <div class="project-item">
                    <a href="#">
                        <div class="profile_img"><img src="images/download.jpg" alt="" align="middle"></div>

                        <div class="profile">
                            <h4 align="left">Elon_Musk</h4></a>
                    </div>
                    <img src="images\3.jpg" alt="">
                    <div class="button">
                        <button type="button" style="background-color: white; background: 20px; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px; outline:0;  ">  Like  </h1>
                        </button>
                        <button type="button" style="background-color: white; background: none; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px;  
">
                        Comment</h1>
                        </button>
                        <button type="button" style="background-color: white; background: none; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px;  
">
                        Share</h1>
                        </button>

                    </div>
                </div>
 
 
  
                    <a href="#">
                        <div class="profile_img"><img src="images/download.jpg" alt="" align="middle"></div>

                        <div class="profile">
                            <h4 align="left">Elon_Musk</h4></a>
                    </div>

                    <video width="598" controls>
                        <source src="css/videos/mov_bbb.mp4" type="video/mp4" align="middle">
                        <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                        Your browser does not support HTML5 video.
                    </video>

                    <div class="button">
                        <button type="button" style="background-color: white; background: 20px; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px; outline:0;  ">  Like  </h1>
                        </button>
                        <button type="button" style="background-color: white; background: none; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px;  
">
                        Comment</h1>
                        </button>
                        <button type="button" style="background-color: white; background: none; border: none; outline:none !important;">
                            <h1 style="font-family: Courier New; font-size: 20px;  
">
                        Share</h1>
                        </button>

                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
<!--     <script src="js\libs\jquery-1.12.4.min.js"></script>
    <script src="js\libs\jquery.justifiedGallery.min.js"></script>
    <script src="js\libs\jquery.magnific-popup.js"></script>
    <script src="js\scripts.js"></script> -->
    <!-- End Scripts -->
    @endsection
</body>

</html>