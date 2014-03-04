<?php

if (isset($_POST['submit'])) {
  // User submitted the contact form
  // let's send us an email
  include 'mailer.php';  
}

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nicole De La Feld</title>
    
    
    <link href='http://fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fanwood+Text' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='normalize.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48592259-1', 'delafeld.it');
      ga('send', 'pageview');
    </script>
</head>
<body>

  <?php if (isset($mail_sent) && $mail_sent) { ?>
  <div class="has-success">
    <script>
      pop();
    </script>
    <!--Thank you! I got your message and I'll reply to you soon.-->
  </div>
  <?php } else if (isset($mail_sent)) { ?>
  <div class="has-error">
    There was a problem. Please try again.
  </div>
  <?php } ?>

<div class="navbar-hidden hidden">
      <div class="logo1 clearfix pop">
        <a href="#home"><h1>Nicole De La Feld</h1></a>
        <img id="colibri" src="colibri.png">
      </div>
       <ul>
          <li><a class="pop" href="#about">ABOUT ME</a></li>
          <li><a class="pop" href="#work">MY WORK</a></li>
          <li><a class="pop" href="#contact">CONTACT</a></li>
        </ul>
    </div>
  <div class="home" id="home">
    <div class="header clearfix">
      <div class="logo clearfix pop">
        <a href="#home"><h1>Nicole De La Feld</h1></a>
        <img id="colibri" src="colibri.png">
      </div>
      <div class="navbar">
        <ul>
          <li><a class="float-shadow" href="#about">ABOUT ME</a></li>
          <li><a class="float-shadow" href="#work">MY WORK</a></li>
          <li><a class="float-shadow" href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </div>

    <div class="presentation">
      <div class="social">
        <ul class="social-list clearfix">
          <li class="linkedin"><a href="http://www.linkedin.com/in/nicoledelafeld" target="_blank"><span class="fa-stack fa-lg">
          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
          </span></a></li>
          <li class="github"><a href="https://github.com/nicky1525" target="_blank"><span class="fa-stack fa-lg">
          <i class="fa fa-github fa-stack-1x fa-inverse"></i>
          </span></a></li>
          <li class="stackoverflow"><a href="http://stackoverflow.com/users/2762447/nicky-1525" target="_blank"><span class="fa-stack fa-lg">
          <i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
          </span></a></li>
          <li class="twitter"><a href="https://twitter.com/n_delafeld" target="_blank"><span class="fa-stack fa-lg">
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span></a></li>
           <li class="google+"><a href="https://plus.google.com/u/0/108657212883457727591/posts/p/pub" target="_blank"><span class="fa-stack fa-lg">
          <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
          </span></a></li>
        </ul> 
      </div>
    <img src="tramonto1.jpg">
    </div>
  </div>

  <div id="work" class="clearfix">
    <p>Here is a collection of my latest web and mobile applications. You can also find them on <a class="pop" href="https://github.com/nicky1525" data-hover = "GitHub">GitHub</a>.<br> Every contribution to my repositories is welcome!</p>
    <div class="row clearfix">
      <div class="col-lg-4">
        <div class="imgcol">
          <a href="https://github.com/nicky1525/UniApp" target="_blank"><img id="uniapp" src="uniappmob.png" alt="UniApp"></a>
        </div>
        <a href="https://github.com/nicky1525/UniApp" target="_blank"><h2>UniApp</h2></a>
        <p>A simple Android application for keeping track of your studies.</p>
      </div>
      <div class="col-lg-4">
        <div class="imgcol">
          <a href="https://github.com/nicky1525/Rock-Paper-Scissors" target="_blank"><img id="rps" src="rspmac.png" alt="Rock-Paper-Scissors"></a>
        </div>
        <a href="https://github.com/nicky1525/Rock-Paper-Scissors" target="_blank"><h2>Rock-Paper-Scissors</h2></a>
        <p>The classic game rebuilt in Vanilla JavaScript.Take a break and <a class="pop" href="http://delafeld.it/Rock-Paper-Scissors">Play!</a>
        </p>
      </div>
      <div class="col-lg-4">
        <div class="imgcol">
          <a href="https://github.com/nicky1525/my-cv-template" target="_blank"><img id="cv" src="cvipadnew.png" alt="My CV"></a>
        </div>
        <a href="https://github.com/nicky1525/my-cv-template" target="_blank"><h2>My CV</h2></a>
        <p>My super-simple CV template built using only HTML5 and CSS3.</p>
      </div>
    </div>   
  </div>
  <div id="divider">
    <span class="fa-stack fa-sm">
        <i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
    </span>
    <span class="fa-stack fa-sm">
        <i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
    </span>
    <span class="fa-stack fa-sm">
        <i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
    </span>
  </div>
  
  <div class="about clearfix" id="about">
    <h3>About Me</h3>
    <img src="nicole.jpg">
    <p>I am a young passionate developer based in Italy.</p>
    <p>Although I've always had a passion for electronics and technology since I was a little girl, my education was primarily oriented on foreign languages.</p>
    <p>The truth is that if you have a real passion you cannot ignore it!
    </p>
    <p>
    As my dream was to become a programmer, I started learning something by myself and finally last year, on January 2013, I was eligible for entering a Java and Mobile programming course.
    That was my turning point, I finally entered my dream world!
    I started by studying the OOP basics, Java and Android SDK and then, during my intern, I studied C#, Objective-C and iOS SDK, through which I developed four mobile applications.</p>
    <p>Now, driven by my curiosity and supported by special people, I am focusing my attention on web development and I am increasing my knowledge of HTML5,CSS3, JavaScript and also Python and PHP. I really enjoy these technologies!
    My final goal is to master my professional skills in an agile environment, producing extreme quality software.</p>
    <h3>About this website</h3>
    <p>This is my first website and its purpouse, for now, is to gather up all my works and ideas in order to share them with everyone who has the same passion that drives my work.</p>

    <p>In conclusion let me thank that special people I mentioned before, who helped and supported me during this year.</p>
  </div>
  
  <div id="contact">
    <div class="row clearfix">
      <small>Share your ideas and suggestions with me.. </small><br>
      <small>Keep in Touch! </small>
      <span class="fa-stack fa-sm">
        <i class="fa fa-comments-o fa-stack-1x fa-inverse"></i></span><br>
      <div id="form" class=" col1 clearfix">
        <form method="post">
          <label for="name">Name</label>
          <input id="name" name="name" type="text">
          <br>
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="sam@sample.com">
          <br>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
          <br>
          <input  id="btnsend" type="submit" name="submit" value="Send">
        </form>
      </div>
      <div class="col2 clearfix">
        <small><p>You can contact me using the contact form, alternatively you can use one of the links below:</p></small>
        <ul class="social-list">
          <li class="linkedin"><a class="pop" href="http://www.linkedin.com/in/nicoledelafeld" target="_blank"><span class="fa-stack fa-sm">
          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
          </span></a></li>
          <li class="github swing"><a class="pop" href="https://github.com/nicky1525" target="_blank"><span class="fa-stack fa-sm">
          <i class="fa fa-github fa-stack-1x fa-inverse"></i>
          </span></a></li>
          <li class="stackoverflow"><a class="pop" href="http://stackoverflow.com/users/2762447/nicky-1525" target="_blank"><span class="fa-stack fa-sm">
          <i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
          </span></a></li><br>
          <li class="twitter"><a class="pop" href="https://twitter.com/n_delafeld" target="_blank"><span class="fa-stack fa-sm">
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span></a></li>
           <li class="google+"><a class="pop" href="https://plus.google.com/u/0/108657212883457727591/posts/p/pub" target="_blank"><span class="fa-stack fa-sm">
          <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
          </span></a></li>
          <li class="mail"><a class="pop" href="http://facebook.com/heandshephoto" target="_blank"><span class="fa-stack fa-sm">
          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
          </span></a></li>
        </ul>
      </div>
    </div>

    <div id="divider-contact">
      <small>Built with<span class="fa-stack fa-sm"><i class="fa fa-heart fa-stack-1x fa-inverse"></i></span> by me</small>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
