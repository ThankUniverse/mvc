 <?php
 
 	if (isset($_GET['page']) && !empty($_GET['page'])) {
		switch ($_GET['page']) {
			case 'content':
				$view = "view/index.php";
				$controller = "controller/content_controller.php"
				include $controller;
			break;
			default;

	}
}

?>
		<?php
			include "./view/head.php";
			include "./view/partials/section1/header.php";
			include "./view/partials/section1/footer.php";
			include "./view/partials/section2/header.php";
			include "./view/partials/section2/footer.php";
		?>



		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Mollis posuere<br />
						lectus lacus</h2>
					</header>
					<p>Rhoncus mattis egestas sed fusce sodales rutrum et etiam ullamcorper. Etiam egestas scelerisque ac duis magna lorem ipsum dolor.</p>
				</div>
			</article>

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Magnis parturient</h2>
					<p>Justo phasellus et aenean dignissim<br />
					placerat cubilia purus lectus.</p>
				</header>
				<div class="inner gallery">
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/07.jpg" class="image fit"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/08.jpg" class="image fit"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</article>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>