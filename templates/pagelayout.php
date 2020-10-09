<!DOCTYPE html>
<html><!-- header -->
	<head><!-- header -->
		<link rel="stylesheet" href="../css/styles.css"/>
		<script type="text/javascript" src="../script/script.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<title><?php echo $title; ?></title>
	</head>
	<body><!-- body tag-->
	<header><!-- header tag -->
		<section><!-- section tag -->
			<aside><!-- aside tag -->
				<h3>Opening Hours:</h3><!-- notice board like data -->
				<p>Mon-Fri: 09:00-17:30</p><!-- notice board like data -->
				<p>Sat: 09:00-17:00</p><!-- notice board like data -->
				<p>Sun: 10:00-16:00</p><!-- notice board like data -->
			</aside>
			<h1>Fran's Furniture</h1><!-- heading shown -->
		</section><!-- section part -->
	</header><!-- header part -->
	<nav><!-- navigation bar -->
		<ul><!-- ul element created -->
			<li><a href="index.php">Home</a></li><!-- home navigation -->
			<li><a href="furnitures">Our Furniture</a></li><!-- furniture navigation -->
			<li><a href="about">About Us</a></li><!-- about us navigation -->
			<li><a href="contact">Contact us</a></li><!-- contact us navigation -->
			<?php showLogLink(); ?>
			<li><a href="faq">FAQs</a></li>
				<?php if(isUser() || isNotLoggedIn()){ ?>
				<i id="search-icon" class="fas fa-search"></i>&nbsp;&nbsp;&nbsp;<input type="text" id="search">
			<?php } ?>
		</ul><!-- ul element -->
	</nav><!-- nav element -->
	<div id="search-content"><!-- header -->		
	</div><!-- header -->
<img src="../images/randombanner.php"/>
		<?php echo $content; ?><!-- header -->
	<footer>
		<!-- datetime object is used for showing date -->
		&copy; Fran's Furniture <?php $date = new DateTime(); echo $date->format("Y");  ?>
	</footer><!-- header -->
</body><!-- header -->
</html><!-- header -->