<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

	$nav = [
	[
		'url' => '/',
		'title'=> 'Home'
	],
	[
		'url' => '/about',
		'title'=> 'About',
		'submenu'=>[
		[
			'url' =>'info/',
			'title'=>'information',
			'submenu'=> [
				[
					'url'=>'about_us',
					'title'=> 'About Us'
				],
				[
					'url'=>'our_work',
					'title'=> 'Our Work'
				],
				[
					'url'=>'chat',
					'title'=> 'Chat'
				]

			]
		],
		[
			'url' =>'contact_us',
			'title' =>'Contact us'
		],
		[
			'url'=> '/map',
			'title'=>'Map'
		]
		]
	],
	[
		'url'=> '/projects',
		'title'=>'Projects'
	],
	[
		'url' =>'/portfolio',
		'title' => 'portfolio'
	],
	];

	$list = [
	[
		'icon' => 'icon fa-comment',
		'title' => 'Smoke on the water',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eveniet aspernatur doloremque praesentium maxime ut suscipit non deserunt id, reprehenderit.'
	],
	[
		'icon' => 'icon fa-refresh',
		'title' => 'Smoke on the water',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eveniet aspernatur doloremque praesentium maxime ut suscipit non deserunt id, reprehenderit.'
	],
	[
		'icon' => 'icon fa-picture-o',
		'title' => 'Smoke on the water',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eveniet aspernatur doloremque praesentium maxime ut suscipit non deserunt id, reprehenderit.'
	],
	[
		'icon' => 'icon fa-cog',
		'title' => 'Smoke on the water',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eveniet aspernatur doloremque praesentium maxime ut suscipit non deserunt id, reprehenderit.'
	],
	[
		'icon' => 'icon fa-wrench',
		'title' => 'Smoke on the water',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eveniet aspernatur doloremque praesentium maxime ut suscipit non deserunt id, reprehenderit.'
	],
	[
		'icon' => 'icon fa-check',
		'title' => 'Smoke on the water',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eveniet aspernatur doloremque praesentium maxime ut suscipit non deserunt id, reprehenderit.'
	],

	];

	$contact = [
	[
		'icon' =>'icon fa-home',
		'title' =>'Mailing address',
		'info' =>'Untitled Corporation<br/>
				1234 Somewhere Rd #987<br/>
				Nashville, TN 00000-0000'
	],
	[
		'icon' =>'icon fa-comment',
		'title' =>'Social',
		'info' => [
		[
			'url' => '@untitled-corp'
		],
		[
			'url' =>'linkedin.com/untitled'
		],
		[
			'url' => 'facebook.com/untitled'
		]
		]

	],
	[
		'icon' => 'icon fa-envelope',
		'title' => 'Email',
		'info' => 'info@untitled.tld'
	],
	[
		'icon' =>'icon fa-phone',
		'title' => 'Phone',
		'info' => '(000)-555-32223'
	],
	];
	
?>
<html>
	<head>
		<title>Escape Velocity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Escape Velocity</a></h1>
								<p>A free responsive site template by HTML5 UP</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
								<?php foreach ($nav as $item) { ?>
									<li>
										<a href="<?php echo $item['url']?>"><?php echo $item['title'] ?></a>
										<?php if(isset($item['submenu']) and !empty($item['submenu'])) { ?>
										<ul>
											<?php foreach ($item['submenu'] as $subitem) { ?>

												<li>
													<a href="<?php echo $subitem['url'] ?>"><?php echo $subitem['title'] ?></a>
													<?php if(isset($subitem['submenu']) and !empty($subitem['submenu'])) {?>
													<ul>
						
														<?php foreach ($subitem['submenu'] as $postsubitem) {?>
															<li>
																<a href="<?php echo $postsubitem['url']?>"><?php echo $postsubitem['title'] ?></a>
															</li>
														<?php } ?>
									
													</ul>
													<?php } ?>
												</li>

											<?php } ?>
										</ul>
									<?php } ?>
									</li>
									<?php } ?>
								
								</ul>
							</nav>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">The Introduction</div>
					<section id="intro" class="container">
						<p class="style1">So in case you were wondering what this is all about ...</p>
						<p class="style2">
							Escape Velocity is a free responsive<br class="mobile-hide" />
							site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
						</p>
						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>
						<ul class="actions">
							<li><a href="#" class="button style3 big">Proceed</a></li>
						</ul>
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">The Details</div>
					<div id="main" class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2>Dolor consequat feugiat amet veroeros</h2>
									<p>Feugiat dolor nullam orci pretium phasellus justo</p>
								</header>
								<div class="feature-list">
									<div class="row">
									<?php $counter = 1; ?>
									<?php foreach ($list as $item) { ?>
										
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="<?php echo $item['icon']  ?>"><?php echo $item['title'] ?></h3>
												<p><?php echo $item['text'] ?></p>
											</section>
										</div>
										 <?php if($counter % 2== 0) { ?>
											</div>
											<div class="row">

										<?php }  ?>
										
										<?php $counter++;
										//echo $counter;
									 } ?>
									
								</div>
								<ul class="actions actions-centered">
									<li><a href="#" class="button style1 big">Get Started</a></li>
									<li><a href="#" class="button style2 big">More Info</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">The Rest Of It</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>Ipsum sapien elementum portitor?</h2>
							<p>
								Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
								Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<?php $counter = 1; ?>
											<?php foreach ($contact as $item) { ?>
												<div class="6u 12u(mobile)">
												<section>
													<h3 class="<?php echo $item['icon'] ?>"><?php echo $item['title'] ?></h3>
													<p>
														<?php if(is_array($item['info'])) {
															foreach ($item['info'] as $subitem) { ?>
																<a href="#"><?php echo $subitem['url'] ?> </a><br/>
															<?php } 
														}
														else echo $item['info']; ?>
													</p>
												</section>
											</div>
											<?php if($counter % 2 == 0){ ?>
												</div>
												<div class="row">
											<?php } ?>
											<?php $counter++;
											} ?>
										
									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>