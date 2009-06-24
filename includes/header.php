<head>
    <title><?php echo(ucfirst(basename($page, ".php"))); echo(" | $siteName"); ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="thickbox/thickbox.css" type="text/css" />
    <!--[if IE]><link rel="stylesheet" href="css/ie-fixes.css" type="text/css" /><![endif]-->
    <!--[if lte IE 6]><link rel="stylesheet" href="css/ie6-fixes.css" type="text/css" /><![endif]-->
    <link rel="shortcut icon" href="images/favicon.gif" />
    <meta name="keywords" content="Chris Kankiewicz, <?php echo(basename($page, ".php")); ?>, web design, digital photography, resume, twitter" />
    <script type="text/javascript" src="thickbox/jquery.js"></script>
    <script type="text/javascript" src="thickbox/thickbox.js"></script>
    <script type="text/javascript" src="js/jquery.tooltip.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('ul#social-icons li a').tooltip({
          delay: 0,
          opacity: 0.55,
          showURL: true,
          track: true,
        });
      });
    </script>
  </head>
