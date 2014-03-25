<?php

$img = imagecreatetruecolor(480, 480);
$thumb = imagecreatetruecolor(80, 80);

//
// Globals
//

$imgs = array(
	"sprout",
	"cat",
	"midget",
	"affy",
	"wulf",
	"mau5ie",
	"contex",
	"grinch",
	"tux",
	"olloth",
	"orcem",
	"owexz",
	"raph",
	"roy",
	"wind",
	"zidane",
	"zml",
	"berger",
	"ddos",
	"greatman",
	"mikenon",
	"sleaker",
	"thedudeguy"
);

$colors = array(
	imagecolorallocate($img, 255, 0, 0),
	imagecolorallocate($img, 255, 106, 0),
	imagecolorallocate($img, 255, 255, 0),
	imagecolorallocate($img, 0, 255, 0),
	imagecolorallocate($img, 0, 255, 255),
	imagecolorallocate($img, 0, 0, 255),
	imagecolorallocate($img, 255, 0, 106),
	imagecolorallocate($img, 102, 102, 102),
	imagecolorallocate($img, 255, 255, 255),
	imagecolorallocate($img, 0, 0, 0)
);

//
// Generate image
//
for ($i = 0; $i < 16 * 16; $i++) {
	$x = ($i % 16) * 30;
	$y = floor($i / 16) * 30;
	imagefilledrectangle($img, $x, $y, $x + 30, $y + 30, $colors[substr($_GET['v'], $i, 1)]);
}

$outline = imagecreatefrompng("paintings/" . $imgs[$_GET['i']] . ".png");
imageAlphaBlending($outline, true);
imageSaveAlpha($outline, true);

imagecopy($img, $outline, 0, 0, 0, 0, 480, 480);

imagecopyresampled($thumb, $img, 0, 0, 0, 0, 80, 80, 480, 480);

//
// Generate random id
//
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$fname = '';
do {
	for ($i = 0; $i < 5; $i++) {
		$fname .= $characters[rand(0, strlen($characters) - 1)];
	}
} while (file_exists("final/" . $fname . ".png"));

//
// Save it!
//
imagepng($img, "/home/spout/sites/spout.org/forums/public/sprout/final/" . $fname . ".png");
imagepng($thumb, "/home/spout/sites/spout.org/forums/public/sprout/final/" . $fname . "-t.png");
header("Location: " . $fname);

?>