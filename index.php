<?php include_once('includes/site-info.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

  <?php include_once('includes/header.php'); ?>

  <body>
  
  <?php include_once('includes/navigation.php'); ?>

  <div id="content">
    <h2 class="title">Home</h2>
    <div class="announce">View web pages and code by me @ <a href="http://www.web-geek.net" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;">http://www.web-geek.net</a></div>
     <div id="button-wrapper">
      <div class="button"><a href="resume.php"><img src="images/resume.png" alt="Resume" onmouseover="this.src='images/resume_green.png'" onmouseout="this.src='images/resume.png'" /></a></div>
      <div class="button"><a href="photography.php"><img src="images/photography.png" alt="Photography" onmouseover="this.src='images/photography_green.png'" onmouseout="this.src='images/photography.png'" /></a></div>
      <div class="button"><a href="about.php"><img src="images/about.png" alt="About" onmouseover="this.src='images/about_green.png'" onmouseout="this.src='images/about.png'" /></a></div>
      <div class="button"><a href="contact.php"><img src="images/contact.png" alt="Contact" onmouseover="this.src='images/contact_green.png'" onmouseout="this.src='images/contact.png'" /></a></div>
    </div>
    <div class="hr"><hr /></div>	
    <h3>Welcome to ChrisKankiewicz.com</h3>
    <p>Here you will find information on me, <strong>Chris Kankiewicz</strong>, a self taught web designer, graphic designer, and digital photographer.  If something interests you and you'd like to know more, please feel free to shoot me an <a href="contact.php">e-mail</a>.</p>
    <p>I know you may have gotten here on accident, but I'd like for you to stay and take a look around. So please, I insist, sit down and stay a while.</p>
    <div class="hr"><hr /></div>
    <div id="twitter_div">
      <h3 class="sidebar-title">My Latest Tweets</h3>

      <ul id="twitter_update_list"><li><!-- BLANK --></li></ul>
    </div>
    <p>Follow me on Twitter: <a href="http://twitter.com/PHLAK" target="_blank">@PHLAK</a></p>
    <div class="clear"></div>
  </div>

  <!-- TWITTER -->
  <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
  <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/PHLAK.json?callback=twitterCallback2&amp;count=5"></script>
  <!-- /TWITTER -->
  
  <?php include_once('includes/footer.php') ?>

  <?php include_once('includes/post-footer.php') ?>

</body>

</html>
