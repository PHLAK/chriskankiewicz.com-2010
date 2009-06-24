<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Welcome to WheelchairParts.com! - Wheelchair Parts</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />


	<link rel="shortcut icon" href="images/favicon.gif" />

	<meta name="keywords" content="wheelchair parts" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.corner.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#navigation ul li a').corner("5px top");
		$('#side-bar h3').corner("5px top");
	});
	</script>
</head>

<body>

<div id="wrap">


	<div id="main" class="clearfix">

		<div id="header">
			<div class="width-constraint clearfix">

				<div class="left">

					<div id="site-logo">
						<a href="/"><img src="images/wheelchair-parts-logo.png" alt="Wheelchair Parts" title="Wheelchair Parts" /></a>
					</div>

				</div>

				<div class="right">

					<div id="search">
						<form method="get" action="/search/go/" id="search-form">
							<table id="search-table">
								<tr>
									<td><input type="text" value="Search" name="q" id="search-box" onfocus="if(this.defaultValue == this.value) this.value = '';" onblur="if(this.value == '') this.value = this.defaultValue;"></input></td>
									<td><input type="button" value="Go" id="search-button"></input></td>
								</tr>
							</table>
						</form>
					</div>

					<div id="navigation">
						<ul>
							<li class="title">Parts catalogs:</li>
							<li><a href="#">Quickie</a></li>
							<li class="current"><a href="#">TiLite</a></li>
							<li><a href="#">Pride</a></li>
							<li><a href="#">Invacare</a></li>
						</ul>
					</div>

				</div>

			</div>
		</div>

		<div id="sub-header" class="clearfix">
			<div class="width-constraint">
				<div class="left">
					<div id="breadcrumbs">
						<b>You are here:</b> Breadcrumbs &raquo; Will &raquo; Go &raquo; Here  &raquo; Eventually
					</div>
				</div>

				<div class="right">
					<div id="share-link">
						<a href="javascript:void(0)">Email Page to a Friend</a>
					</div>
				</div>
			</div>
		</div>

		<div id="content-wrapper">

			<div class="width-constraint">
				<div id="content">

					<h1>Welcome to WheelchairParts.com!</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisl tellus, ornare sed venenatis vehicula, posuere at est. Nulla pharetra est id erat scelerisque hendrerit. Nulla vitae posuere sem. Sed semper nisl at velit placerat vel dictum massa vestibulum. Nunc leo urna, bibendum ut rutrum in, facilisis sit amet sem. Sed et sapien sed urna semper tincidunt non eu justo. Morbi dictum nulla id lectus mattis sed commodo leo feugiat. Nam eros justo, adipiscing eget sodales in, euismod id nibh. Nullam ipsum justo, consequat eu commodo faucibus, fringilla nec metus. </p>

					<br />

					<h2>Browse our parts catalogs</h2>
					<div id="company-logos">
						<a href="#"><img src="images/company-logos/quickie-logo.png" alt="Quickie" /></a>
						<a href="#"><img src="images/company-logos/tilite-logo.png" alt="TiLite" /></a>
						<a href="#"><img src="images/company-logos/pride-logo.png" alt="Pride Mobility" /></a>
						<a href="#"><img src="images/company-logos/invacare-logo.png" alt="Invacare" /></a>
					</div>

					<div class="hr"><hr /></div>

					<img src="images/promotions/sample-banner.png" alt="Sample Banner" />

				</div>

				<div id="side-bar">

					<h3>Browse by Category</h3>
					<div id="side-nav" class="clearfix">
						<ul>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</div>

					<h4>This is an h4 title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisl tellus, ornare sed venenatis vehicula, posuere at est. Nulla pharetra est id erat scelerisque hendrerit.</p>

					<h4>This is an h4 title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisl tellus, ornare sed venenatis vehicula, posuere at est. Nulla pharetra est id erat scelerisque hendrerit.</p>
				</div>

			</div>

		</div>

	</div>

</div>

<div id="footer">

	<div id="footer-top">
		<div class="width-constraint">
				<div class="left">
					<h5>Wheelchair-Parts.com</h5>
					<p>Wheelchair-Parts.com was founded in 2009 and is dedicated to bringing you quality wheelchair parts in an easy to navigate site at the lowest prices possible.</p>
					<p><a href="#">Contact Us</a></p>
				</div>
				<div class="center">
					<p>Pellentesque iaculis nisi et neque aliquet convallis venenatis vitae felis. Aliquam erat volutpat. Sed adipiscing convallis luctus. Donec eget massa metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis lectus. Sed tortor erat, suscipit eget eleifend vel, lobortis id mauris. Mauris vehicula ullamcorper viverra.</p>
				</div>
				<div class="right">
					<h5>Customer Service</h5>
					<p>Need some assistance? Wheelchair Parts operators are standing by, ready to answer your call.</p>
					<p><span id="cust-serv-number">1-800-236-4215</span></p>
					<p>Available Monday - Friday, 8:00am - 5:00pm MST</p>
				</div>
		</div>
	</div>

	<div id="footer-bottom">
		<div class="width-constraint">
			<div class="footer-margin">
				<p>Copyright &copy; 2009 &middot; Wheelchair-Parts.com &middot; All Rights Reserved</p>
			</div>
		</div>
	</div>


</div>

</body>
</html>
