<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
	<head>
		<title>Sprout - Voxel Coloring Book</title>
		<link rel="stylesheet" href="/sprout/main.css" type="text/css" />
		<link rel="shortcut icon" href="http://cdn.spout.org/img/ico/spout.ico" />
	</head>
	<body>
		<table>
			<tr>
				<td>
					<div id="main">
						<div class="central">
							<a href="/sprout"><img src="/sprout/sprout-logo.png" /></a>
							<div id="gallery">
<?php

$files = array();
$times = array();

if ($handle = opendir('final')) {
	while (false !== ($entry = readdir($handle))) {
		$fname = basename($entry, ".png");
		if ($entry != "." && $entry != ".." && substr($fname, -2) != "-t") {
			$files[] = $fname;
			$times[] = filemtime("final/" . $entry);
		}
	}
}

array_multisort($times, SORT_DESC, $files);

foreach ($files as $fname) {
	?><a href="/sprout/<?php print $fname; ?>"><img src="/sprout/<?php print $fname; ?>-t.png" /></a><?php
}

?>
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
	</body>
</html>