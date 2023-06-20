var canvas = document.getElementById("mijnCanvas");
var ctx = canvas.getContext("2d");
var vierhoek = canvas.getContext("2d");

ctx.font = "20px Arial";
ctx.fillText("Hallo", 70, 180);

vierhoek.fillStyle = "#DD0000";
vierhoek.fillRect(10, 10, 180, 40);