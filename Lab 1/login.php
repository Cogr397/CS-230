    
<?php
require 'includes/header.php'
?>
<link rel="stylesheet" href="css/login.css">

<main>
    <div class="bg-cover">
        <div class="row">
            <div id="Slideimages" class="carousel slide col-md-8 offset-md-2" data-ride="carousel" style="margin-top: -3px;" >
                <ol class="carousel-indicators">
                    <li data-target="#Slideimages" data-slide-to="0" class="active"></li>
                    <li data-target="#Slideimages" data-slide-to="1"></li>
                    <li data-target="#Slideimages" data-slide-to="2"></li>
                </ol>
                
                <div class="ht-100  center-me">
                    <div class="my-auto">
                        <form class="form-signin" action="includes/login-helper.php" method="post" style="background: white;">
                            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                            <label for="inputEmail" class="sr-only">Username or Email address</label>
                            <input type="text" id="inputEmail"  name="uname" class="form-control" placeholder="Username/ Email" required
                                autofocus>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-dark btn-block"  name="login-submit" type="submit">Sign in</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
                        </form>
                    </div>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/BF4.png" class="d-block mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Carousel.jpg" class="d-block mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Tiger 1.jpg" class="d-block mx-auto" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#Slideimages" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Slideimages" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
               
                </div>
            </div>
        </div>

        
    </div>
</main>