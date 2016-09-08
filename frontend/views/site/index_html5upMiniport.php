<?php

// use yii\widgets\Pjax;
use yii\helpers\Html;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Halva202</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="html5up-miniport/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/html5up-miniport/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="html5up-miniport/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="html5up-miniport/assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top"><?= $phrasebook['hi'] ?>:)</a></li>
					<li><a href="#work"><?= $phrasebook['activity'] ?></a></li>
					<li><a href="#portfolio"><?= $phrasebook['certificates'] ?></a></li>
					<li><a href="#contact"><?= $phrasebook['contact'] ?></a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit"><img src="/html5up-miniport/images/ava.jpg" alt="" /></span>
						</div>
						<div class="8u 12u(mobile)">
							<header>
								<h1><?= $phrasebook['hi'].'! '.$phrasebook['iAm'] ?> <strong><?= $phrasebook['myName'] ?></strong>.</h1>
							</header>
							<!-- <p>On this website you can learn a little bit about <strong>me</strong>, and keep a <a href="#">diary of your own achievements.</a></p> -->
							<p><?= $phrasebook['aboutSite1'] ?> <strong><?= $phrasebook['aboutSite2'] ?></strong>, <?= $phrasebook['aboutSite3'] ?>.</p>
							<!-- <p>На этом сайте можно узнать немного обо мне, а также вести дневник собственных достижений.</p> -->
							<a href="#work" class="button big scrolly"><?= $phrasebook['learnAboutWhatIdo'] ?></a>
						</div>
						
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2><?= $phrasebook['iDo'] ?></h2>
						<p>Ut quid faciam)</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<!-- <span class="icon featured fa-comments-o"></span> -->
									<span class="icon featured fa-code"></span>
									<h3><a href="webdeveloper"><?= $phrasebook['webDeveloper'] ?></a></h3>
									<p><a href="http://www.upwork.com/o/profiles/users/_~0106dc02a6699ca661/">resume on upwork.com</a></p>
									<p>Yii2, php, MySQL, Git...</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-book"></span>
									<h3><a href="tutor"><?= $phrasebook['tutor'] ?></a></h3>
									<p><a href="http://uchim.biz/board/0-0-11664-0-17">resume on uchim.biz</a></p>
									<p><?= $phrasebook['subjects'] ?>...</p>
									<p><a href="https://yadi.sk/d/ijt3okO9q3aqR"> <?= $phrasebook['books'] ?> </a></p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<!-- <span class="icon featured fa-thumbs-o-up"></span> -->
									<span class="icon featured fa-bicycle"></span>
									<h3><?= $phrasebook['lifestyle'] ?></h3>
									<p><?= $phrasebook['cycling'] ?>, <a href="http://cvr.by/blog/istorii-uspekha/item/118-english-speaking-clubs-v-minske.html"><?= $phrasebook['english'] ?></a>, <a href="volleyball"><?= $phrasebook['volleyball'] ?></a>, <?= $phrasebook['salsa'] ?>...</p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Amo vitam:)</p>
						<a href="#portfolio" class="button big scrolly"><?= $phrasebook['seeCertificates'] ?></a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2><?= $phrasebook['certificates'] ?></h2>
						<p>Omnes extrahi magna diligentia.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="https://drive.google.com/open?id=0B8LhGBJ4e69bS1BLbXd3VHNhY00" class="image featured"><img src="/html5up-miniport/images/oop_uml.jpg" alt="" /></a>
									<h3><?= $phrasebook['oop'] ?></h3>
									<p><?= $phrasebook['minsk'] ?>, 2014.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="https://drive.google.com/open?id=0B8LhGBJ4e69bd0RGU1pQV280Mnc" class="image featured"><img src="/html5up-miniport/images/spbrp.jpg" alt="" /></a>
									<h3><?= $phrasebook['master'] ?></h3>
									<p><?= $phrasebook['sp'] ?>, 2011.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="https://drive.google.com/open?id=0B8LhGBJ4e69bSU4zTHFYbnVuamc" class="image featured"><img src="/html5up-miniport/images/ct.jpg" alt="" /></a>
									<h3><?= $phrasebook['testing'] ?></h3>
									<p><?= $phrasebook['grodno'] ?>, 2005.</p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p> <a href="biography"> <?= $phrasebook['allCertificates'] ?> </a></p>
						<a href="#contact" class="button big scrolly"><?= $phrasebook['touch'] ?></a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2><?= $phrasebook['help'] ?>?</h2>
						<p>Sentire liberum petere quidquid vis.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form>
									<div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="<?= $phrasebook['name'] ?>" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" id="email" placeholder="<?= $phrasebook['email'] ?>" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="<?= $phrasebook['subject'] ?>" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="<?= $phrasebook['message'] ?>"></textarea>
											</div>
										</div>
										<div class="row 200%">
										
											<p id="responseEmail"></p>
											
											<div class="12u">
												<ul class="actions">
													<li><input type="button" value="<?= $phrasebook['sendMessage'] ?>" onclick="sendEmail();"> </li>
													<li><input type="reset" value="<?= $phrasebook['clearForm'] ?>" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3><?= $phrasebook['findMe'] ?> ...</h3>
								<ul class="social">
									<li><a href="https://www.facebook.com/halva202" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://vk.com/halva202" class="icon fa-vk"><span></span></a></li>
									<!-- <li><a href="https://twitter.com/halva202" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
									<li><a href="https://www.linkedin.com/in/halva202" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<!-- <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li> -->
									<li><a href="https://www.youtube.com/channel/UCyYbgYd4iQD3qPlQf5SxZIg" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
									<li><a href="https://github.com/halva202" class="icon fa-github"><span class="label">Github</span></a></li>
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<p>
							<i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i> halva202@gmail.com <img src="/html5up-miniport/images/gmail.png" alt="gmail" />
							<br>
							<i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
							+375 25 6268071 <img src="/html5up-miniport/images/viber.png" alt="viber" /> 
							<br>
							<i class="fa fa-skype fa-2x" aria-hidden="true"></i>
							viktar.akulenka 
						</p>
						
						<!-- <p><a href="indexfull"><?php //echo $phrasebook['fullVersion']; ?></a></p> -->
						<p><a href="index" target="blank">Main page</a></p>
						
						<p>
							<a href="/set/language?language=ru"><img src="/images/icons/russia_round_icon_64.png" alt="" /></a>
							<a href="/set/language?language=en"><img src="/images/icons/united_kingdom_round_icon_64.png" alt="" /></a>
						</p>
						
						<ul id="copyright">
							<li>
							&copy; Halva202
							</li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="/html5up-miniport/assets/js/jquery.min.js"></script>
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
			<script src="/html5up-miniport/assets/js/jquery.scrolly.min.js"></script>
			<script src="/html5up-miniport/assets/js/skel.min.js"></script>
			<script src="/html5up-miniport/assets/js/skel-viewport.min.js"></script>
			<script src="/html5up-miniport/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="html5up-miniport/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/html5up-miniport/assets/js/main.js"></script>



<?php
$this->registerJsFile('/js/sendEmail.js',  ['position' => yii\web\View::POS_END]);
//маркер конца строки, обязательно сразу, без пробелов и табуляции
// $this->registerJs($script, yii\web\View::POS_READY);