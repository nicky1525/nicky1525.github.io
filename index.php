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
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='normalize.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>

  <?php if (isset($mail_sent) && $mail_sent) { ?>
  <div class="has-success">
    Thank you! I got your message and I'll reply to you soon.
  </div>
  <?php } else if (isset($mail_sent)) { ?>
  <div class="has-error">
    There was a problem. Please try again.
  </div>
  <?php } ?>

  <div class="home">
    <div class="header clearfix">
      <div class="logo clearfix">
        <h1>Nicole De La Feld</h1>
        <img id="colibri" src="colibri.png">
      </div>
      <div class="navbar">
        <ul>
          <li><a href="#about">ABOUT ME</a></li>
          <li><a href="#work">MY WORK</a></li>
          <li><a href="#contact">CONTACT</a></li>
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
    <p>Here is a collection of my latest web and mobile applications. You can also find them on <a href="https://github.com/nicky1525" data-hover = "GitHub">GitHub</a>.<br> Every contribution to my repositories is welcome!</p>
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
        <p>The classic game rebuilt in Vanilla JavaScript.Take a break and <a href="http://delafeld.it/Rock-Paper-Scissors">Play!</a>
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
    <h3>About this website:</h3>
    <p>This is my first website and its purpouse, for now, is to gather up all my works and ideas in order to share them with everyone who has the same passion that drives my work.</p>

    <p>In conclusion let me thank that special people I mentioned before, who helped and supported me during this year.</p>
  </div>
  
  <div id="contact">
    <div class="phrase">
      <small>Share your ideas and suggestions with me.. </small>
    </div>
    <ul class="social-list clearfix">
      <small><p>You can contact me using the form to your left, alternatively you can use one of the links below:</p></small>
      <li class="linkedin"><a href="http://www.linkedin.com/in/nicoledelafeld" target="_blank"><span class="fa-stack fa-sm">
      <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
      </span></a></li>
      <li class="github swing"><a href="https://github.com/nicky1525" target="_blank"><span class="fa-stack fa-sm">
      <i class="fa fa-github fa-stack-1x fa-inverse"></i>
      </span></a></li>
      <li class="stackoverflow"><a href="http://stackoverflow.com/users/2762447/nicky-1525" target="_blank"><span class="fa-stack fa-sm">
      <i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
      </span></a></li>
      <li class="twitter"><a href="https://twitter.com/n_delafeld" target="_blank"><span class="fa-stack fa-sm">
      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
      </span></a></li>
       <li class="google+"><a href="https://plus.google.com/u/0/108657212883457727591/posts/p/pub" target="_blank"><span class="fa-stack fa-sm">
      <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
      </span></a></li>
      <li class="mail"><a href="http://facebook.com/heandshephoto" target="_blank"><span class="fa-stack fa-sm">
      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
      </span></a></li>
    </ul>
    
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
</body>
</html>
