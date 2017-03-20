<?php
include 'urfiles/connect.php';
include 'urfiles/function.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yourideas</title>
        <link rel="stylesheet" href="urcss/yourideas.css" type="text/css">
        <script type="text/javascript" src="../jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../jquery-ui.min.js"></script>
        <script type="text/javascript" src="urjs/yourideas.js"></script>
    </head>
    <body>
        <div class="slider">
            <div class="slidebar"></div>
        </div>
        <script>
            $('a[href^="#"]').click(function(e){
                e.preventDefault();
                
                var target = this.hash;
                var target = $(target);
                
                $('html, body').animate({
                    'scrollTop': $target.offset().top
                }, 1000 , 'swing', function(){
                    window.location.hash = target;
                });
            });
        </script>
        <header>
            <div class="menu">
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#explore">Explore</a></li>
                    <li><a href="#download">Download</a></li>
                    <li><a href="#meetus">Meet Us</a></li>
                </ul>
            </div>
            <div class="whywedoit">
                <p class="why">Learning is easy when we don't forget.</p>
            </div>
        </header>
        <div class="formtosaveyouideas">
            <form method="post" class="textform">
                <input type="text" class="ideatitle" name="title" id="title" placeholder="Write Your Title">
                <textarea class="ideaarea" placeholder="Write Your Thoughts"></textarea>
                <input class="guestuser" value="Save As Guest" type="submit">
            </form>
            <div class="form">
            <p  class="interlude">OR</p>
            <form method="post">
                <input type="email" class="uremail" placeholder="Email" name="email">
                <input type="password" class="urpassword" placeholder="Password">
                <input type="submit" value="Save and Join" class="uracc">
            </form>
            <p  class="interlude">OR</p>
            <button class="googlelogin">Save and Login with Google</button>
            </div>
        </div>
        <div class="whatwedo" id="services">
            <h4>Our Services</h4>
            <ul>
                <li><a href="Users?u=premium" class="premium">Be A User</a></li>
                <li><a href="Users?u=group" class="group">Make Your Group</a></li>
            </ul>
        </div>
        <div class="howwedoit" id="explore">
            <div class="pictureside"></div>
            <div class="videoaids"></div>
            <div class="animationpart"></div>            
        </div>
        <div class="wherewedoit" id="download">
            <button class="downloadios">Download ios</button>
            <button class="downloadgoogleplay">Download Google Play</button>
        </div>
        <div class="whoweare" id="meetus">
            <h4>Meet Us</h4>
            <div class="meetus"></div>
            <div class="meetus"></div>
            <div class="meetus"></div>
        </div>
        <div class="formtosaveyouideasagain">
            <div class="form">
            <form method="post" class="again">
                <input type="email" class="uremail" placeholder="Email" name="email">
                <input type="password" class="urpassword" placeholder="Password">
                <input type="submit" value="Join" class="uracc">
            </form>
            <p  class="interlude">OR</p>
            <button class="googlelogin">Login with Google</button>
            </div>
        </div>
        <footer>
            <table></table>
        </footer>
    </body>
</html>