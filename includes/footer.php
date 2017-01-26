<?php

$fbPath = '../../new-street-records/img/svg/facebook.svg';
$twitPath = '../../new-street-records/img/svg/twitter.svg';

?>

<footer class="flex-container" role="contentinfo">

	<div class="flex-item">

		<h2>Other Links</h2>

		<ul>
			<li><a href="terms-conditions.php">Terms &amp; Conditions</a></li>
			<li><a href="terms-conditions.php">Join the Label</a></li>
			<li><a href="terms-conditions.php">Contact Us</a></li>
		</ul>

	</div>

	<div class="flex-item social">

		<h2>Follow Us</h2>

		<a href="#" title="External link to our facebook page">

			<img src="<?php echo $fbPath; ?>" alt="facebook link">

		</a>

		<a href="#" title="">

			<img src="<?php echo $twitPath; ?>" alt="Kiwi standing on oval">

		</a>

	</div>

	<p id="copyright">&copy; Copyright New Street Records <?php echo date("Y"); ?></p>

</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/nav.js"></script>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>

</html>
