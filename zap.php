<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>
		<script src="js/vendor/modernizr-2.7.1.min.js"></script>
	</head>
	<body>
		
		<div id ="nav">
			<div id="menu">
				<a href="index.html"><img src="img/logo.png" id="logo" /></a>
				<div id ="menuR">
					<a href ="http://www.nerdist.com/podcast/sex-nerd-sandra/" target="podcast"> The Podcast</a>
					<a href="book.html"> Book Sandra</a>
					<a href="resources.html"> Resources </a>
					<a href="frame.html" target="sheg" onclick="window.open('frame.html', 'newwindow', 'width=700, height=250'); return false;"> UpComing</a>
					
					<a> Blog </a>
				</div>
			</div>
		</div>

		<div id="back1"></div>
		<div id ="content2">

			<div id ="top">
				<h1> Done & Done</h1>
				<p id ="ped">
				Sandra would now send you updates	
				</p>
			</div>
			<div id ="mid">

			</div>
			<div id="low">

			</div>
		</div>
		<div id ="footer2">
			<p>
				© Sex Nerd Sandra. Website crafted by <a href="http://samokoro.com/" target="blank">Sam</a>
			</p>
		</div>

		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')
		</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			( function(b, o, i, l, e, r) {
					b.GoogleAnalyticsObject = l;
					b[l] || (b[l] = function() {
						(b[l].q = b[l].q || []).push(arguments)
					});
					b[l].l = +new Date;
					e = o.createElement(i);
					r = o.getElementsByTagName(i)[0];
					e.src = '//www.google-analytics.com/analytics.js';
					r.parentNode.insertBefore(e, r)
				}(window, document, 'script', 'ga'));
			ga('create', 'UA-XXXXX-X');
			ga('send', 'pageview');
		</script>
	</body>
</html>
<?php
require ("phpmailing/PHPMailer/class.phpmailer.php");

$mail = new PHPMailer();
// defaults to using php "mail()"

$body = $_GET['email'];


$mail -> SetFrom("Sex Nerd Website");

$mail -> AddReplyTo("samelf360@gmail.com", "Sex Nerd");

$address = "samelf360@gmail.com";
$mail -> AddAddress($address, "Sam Okoro");

$mail -> Subject = "New Sex Nerd ";

$mail -> AltBody = "To view the message, please use an HTML compatible email viewer!";
// optional, comment out and test

$mail -> MsgHTML($body);

if (!$mail -> Send()) {
	echo "Mailer Error: " . $mail -> ErrorInfo;
} else {
	echo "Message sent!";
}
?>
