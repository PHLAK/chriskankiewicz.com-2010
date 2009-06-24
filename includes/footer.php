<div id="footer">
    <div id="footer-left">
      &copy; <?php echo("2008 - ".date('Y')); ?> <strong>&middot;</strong>
      <?php echo($siteName); ?>  <strong>&middot;</strong> 
      <?php if(isIE()): ?>
        <a href="includes/legal/index.php" title="Legal | Chris Kankiewicz">Some Rights Reserved</a>
      <?php else: ?>
        <a href="includes/legal/index.php?KeepThis=true&amp;TB_iframe=true&amp;width=600&amp;height=350" title="Legal | Chris Kankiewicz" class="thickbox">Some Rights Reserved</a>
      <?php endif; ?>
    </div>
    <div id="footer-right">
      <?php if(file_exists('sitemap.xml')): ?>
        <a href="sitemap.xml">Sitemap</a> <strong>&middot;</strong>
      <?php endif; ?>
      Design by <a href="http://www.chriskankiewicz.com" target="_blank">Chris Kankiewicz</a>
    </div>
  </div>
