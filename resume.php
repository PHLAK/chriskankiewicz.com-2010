<?php include_once('includes/site-info.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

  <?php include_once('includes/header.php'); ?>

<body>
  
  <?php include_once('includes/navigation.php'); ?>

  <div id="content">
    <h2 class="title">Resume</h2>
    <div class="announce">Download my resume: <a href="resume/chris-kankiewicz-resume.doc">.DOC</a> 
    | <a href="resume/chris-kankiewicz-resume.odt">.ODT</a>
    | <a href="resume/chris-kankiewicz-resume.pdf">.PDF</a> 
    | <a href="resume/chris-kankiewicz-resume.txt" target="_blank">.TXT</a></div>
    <?php include_once('resume/chris-kankiewicz-resume.html') ?>
    <span id="last-update">Last updated: 
      <?php echo(date("Y-m-d H:i:s", filemtime('resume/chris-kankiewicz-resume.html'))); ?></span>
    <div class="clear"></div>
  </div>

  <?php include_once('includes/footer.php') ?>
  
  <?php include_once('includes/post-footer.php'); ?>

</body>
</html>
