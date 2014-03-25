imgs = ["sprout", "cat", "midget", "affy", "wulf", "mau5ie", "contex", "grinch", "tux", "olloth", "orcem", "owexz", "raph", "roy", "wind", "zidane", "zml", "berger", "ddos", "greatman", "mikenon", "sleaker", "thedudeguy"];
colors = ["#F00", "#FF6A00", "#FF0", "#0F0", "#0FF", "#00F", "#FF006A", "#666", "#FFF", "#000"];

sel = "#FFF";
idx = 8;
img = 0;
painting = false;
gen = "";

function load() {
	for (i in colors) {
		document.getElementById('paint-sel').innerHTML += "<div class='swatch' onclick='setPaint(" + i + ")' style='background-color: " + colors[i] + "'></div>";
	}
	for (i in imgs) {
		document.getElementById('paint-img').innerHTML += "<img onclick='setImg(" + i + ")' src='paintings/" + imgs[i] + "-icon.png' />";
	}
	for (i = 0; i < 16 * 16; i++) {
		gen += idx;
		document.getElementById('paint-interact').innerHTML += "<div onmousedown='setPainting(true)' onmousemove='paintI(" + i + ")' onclick='paint(" + i + ")'></div>";
		document.getElementById('paint-bg').innerHTML += "<div class='cell' id='cell-" + i + "'></div>";
	}
	setImg(Math.floor(Math.random() * 23));
}
function setImg(v) {
	img = v;
	document.getElementById('bgimg').src = "paintings/" + imgs[v] + ".png";
}
function setPainting(v) {
	painting = v;
}
function setPaint(v) {
	sel = colors[v];
	idx = v;
}
function paintI(x) {
	if (painting) {
		paint(x);
	}
}
function paint(x) {
	gen = gen.substr(0, x) + idx + gen.substr(x+1)
	document.getElementById('cell-' + x).style.backgroundColor = sel;
}