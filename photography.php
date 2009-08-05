<?php substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') ? ob_start("ob_gzhandler") && $gzip = 1 : ob_start(); ?>
<?php include_once('includes/site-info.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

  <?php include_once('includes/header.php'); ?>

<body>

  <?php include_once('includes/navigation.php'); ?>

  <div id="content">
    <h2 class="title">Photography</h2>
    <div class="announce">View more photos on my Flickr page at: <a href="http://www.flickr.com/photos/kankie" target="_blank">http://www.flickr.com/photos/kankie</a></div>

<?php include_once('ck-gallery/ck-gallery.php'); ?>

  </div>

  <?php include_once('includes/footer.php') ?>

  <?php include_once('includes/post-footer.php'); ?>

  <?php if ($gzip == "1") echo("<!-- Page served with gzip compression -->\r\n"); ?>

</body>
</html>
