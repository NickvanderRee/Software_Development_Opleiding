var myCanvas = document.getElementById("myCanvas"); //koppeling naar het canvas
var ctx = myCanvas.getContext("2d"); // ctx naar 2d canvas

var spritePosX = 50; //horizontale locatie
var spritePosY = 50; //verticale locatie
var blokje = 50; //grootte van het blokje
var speed = 5; //snelheid van het blokje

tekenSprite(); //dit laat het vierkant tevoorschijn komen

document.addEventListener("keydown", (event) => { // detecteerd toetsindruk en voert een funcite uit
        let keypressed = event.key;
        console.log(keypressed);
        switch(keypressed){
            case "ArrowUp" : spritePosY -= speed; //beweegt sprite omhoog
            tekenSprite();
            break;
        
            case "ArrowDown" : spritePosY += speed; //beweegt sprite omlaag
            tekenSprite();
            break;
        
            case "ArrowLeft" : spritePosX -= speed; //beweegt sprite naar links
            tekenSprite();
            break;

            case "ArrowRight" : spritePosX += speed; //beweegt sprite naar rechts
            tekenSprite();
            break;
            default: break;
        }
    }
);


function tekenSprite() //dit maakt het vierkant
{
    var breed = myCanvas.offsetWidth - blokje; //breedte van canvas
    var hoog = myCanvas.offsetHeight - blokje; //hoogte van canvas
    if(spritePosX <= 0){
        spritePosX = 0;
    }
    if(spritePosY <= 0){
        spritePosY = 0;
    }
    if(spritePosX >= breed)
    {
        spritePosX = breed;
    }
    if(spritePosY >= hoog)
    {
        spritePosY = hoog;
    }
    ctx.clearRect(0, 0, myCanvas.offsetWidth, myCanvas.offsetHeight);
    ctx.fillStyle = "red";
    ctx.fillRect(spritePosX, spritePosY, blokje, blokje);
}