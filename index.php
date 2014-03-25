<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
	<head>
		<title>Sprout - Voxel Coloring Book</title>
		<link rel="stylesheet" href="main.css" type="text/css" />
		<script src="script.js"></script>
		<link rel="shortcut icon" href="http://cdn.spout.org/img/ico/spout.ico" />
	</head>
	<body onmouseup="setPainting(false)">
		<table>
			<tr>
				<td>
					<div id="main">
						<div class="central">
							<a href="./"><img src="sprout-logo.png" /></a>
							<div id="paint">
								<div id="paint-sel"></div><div id="paint-area"><div id="paint-interact"></div><img draggable="false" id="bgimg" /><div id="paint-bg"></div></div><div id="paint-img"></div>
								<div id="share-bar"><a href="#" onclick="window.location='render.php?i=' + img + '&v='+gen; return false">Save</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<a href="gallery/">View Gallery</a></div>
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
		<script>load()</script>
	</body>
</html>