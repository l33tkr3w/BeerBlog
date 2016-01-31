<?php
require('host.php');
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <title>Blog Your Beer</title>

        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- CSS STYLES -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <style type="text/css">
        body { background: #384452 !important; } 

        .dropdown-menu {
            width: 300px !important;     
        }
    </style>

    <body>

        <!-- NAVBAR -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Blog Your Beer.</a>
                </div>

                <div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">New Post <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <!-- Dropdown for creating a new post
                                Creates a textarea inside the dropdown-->
                                <li><a href="#" onClick="MyWindow = window.open('create.php', 'MyWindow', width = 600, height = 300);
                                        return false;">Create New Post</a></li>                                  
                            </ul>
                        </li>
                    </ul>                     

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12" >                                      
                                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">

                                                <div class="form-group">
                                                    <label class="sr-only" for="Username">Login</label>
                                                    <input type="email" class="form-control" id="Username" placeholder="Username" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="sr-only" for="Password">Password</label>
                                                    <input type="password" class="form-control" id="Password" placeholder="Password" required>                                                
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                                </div>   

                                            </form>

                                        </div>                                      
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <!-- USER REGISTRATION DROPDOWN, Shows user registration drop down menu. -->
                        <li class="dropdown">

                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>

                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">                                      
                                            <form action=""  method="POST" >
                                                <div class="form-group">
                                                    <div id="data">

                                                        <table width="350px">
                                                            <tr> 
                                                                <td valign="top"> 
                                                                    <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                                                                </td>
                                                            </tr>

                                                            <tr>   
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                                                                </td>
                                                            </tr>

                                                            <tr>  
                                                                <td valign="top">
                                                                    <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                                                                </td>
                                                            <tr>  
                                                                <td valign="top">
                                                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                                
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="address" placeholder="Street Address" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                              
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="city" placeholder="City" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                                
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="state" placeholder="State" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                               
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="zip" placeholder="Zipcode" required>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2" style="text-align:center">
                                                                    <div class="form-group">                                                                           
                                                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                                                    </div>   
                                                                </td>
                                                            </tr>
                                                        </table>                                  
                                                        </form>
                                                    </div> 
                                                </div>
                                        </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div></div>


    <div class="container">
        <div class="video">
            <div class="responsive-video">
                <video id="player" autoplay loop src="beer.mp4" height="100%" ></video>
            </div>
        </div>

        <hr>
        
        <div class="well">
            
            <h4 class="media-heading">Title</h4>
            
            <div class="media">             
                <a>
                    <img class="img-responsive" src="assets/img/beer-color-spectrum.jpg" width="100%">
                    <br>
                </a>
                <div class="media-body">               
                    <p class="text-right">Username</p>
                    <p>Random blog post</p>
                    <ul class="list-inline list-unstyled">
                        <li><span><i class="glyphicon glyphicon-calendar"></i> Time Posted </span></li>
                        <li>|</li>
                        <span><i class="glyphicon glyphicon-comment"></i> Comments </span>
                        <li>|</li>
                        <li>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </li>
                        <li>|</li>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="well">
            <h4 class="media-heading">Title</h4>
            <div class="media">
                <a>
                    <img class="media-object" src="assets/img/beer2.jpg">
                </a>
                <div class="media-body">
                    
                    <p class="text-right">Username</p>
                    <p>Random blog post</p>
                    <ul class="list-inline list-unstyled">
                        <li><span><i class="glyphicon glyphicon-calendar"></i> Time Posted </span></li>
                        <li>|</li>
                        <span><i class="glyphicon glyphicon-comment"></i> Comments </span>
                        <li>|</li>
                        <li>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </li>
                        <li>|</li>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.hoverex.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>
</html>
