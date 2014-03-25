<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
	<head>
		<title>Sprout - Voxel Coloring Book</title>
		<link rel="stylesheet" href="main.css" type="text/css" />
		<link rel="shortcut icon" href="http://cdn.spout.org/img/ico/spout.ico" />
	</head>
	<body>
		<table>
			<tr>
				<td>
					<div id="main">
						<div class="central">
							<a href="./"><img src="sprout-logo.png" /></a>
							<a id="back-link" href="/sprout/gallery/">Back To Gallery</a><div id="final-img"><img src="<?php print $_GET['i']; ?>.png" /></div>
							<div id="share-links">
								<div>
									<span>Page Link:</span>
									<input onclick="this.focus();this.select()" type="text" value="http://www.spout.org/sprout/<?php print $_GET['i']; ?>" readonly />
								</div>
								<div>
									<span>Embed Link:</span>
									<input onclick="this.focus();this.select()" type="text" value="http://www.spout.org/sprout/<?php print $_GET['i']; ?>.png" readonly />
								</div>
								<div style="margin: auto; width: 282px"><a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="sprout">Tweet</a><g:plus action="share"></g:plus></div>
								<div class="fb-like" data-href="http://www.spout.org/sprout/<?php print $_GET['i']; ?>" data-send="true" data-width="320" style="margin: 10px 40px 0" data-show-faces="true" data-font="arial"></div>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr id="footer">
				<td>
					<div class="central">
						<a href="//forums.spout.org">Continue to the forums</a>
					</div>
				</td>
			</tr>
		</table>
		<div id="fb-root"></div>
		<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=284455501596417"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<script src="https://apis.google.com/js/plusone.js"></script>
	</body>
</html>