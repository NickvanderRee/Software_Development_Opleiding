var teller = 0;

function kleuraanpassen()
{
    teller ++; //increment teller
    document.getElementById("teller").innerHTML = "aantal:" + teller; //terugschrijven teller

    const allePs = document.getElementsByTagName("p");

    for(let i = 0; i < allePs.length; i++)
    {
        allePs[i].style.color = randomcolor();
    }
}

//functie om een random kleur te
function randomcolor()
{
    const lettersHex = "0123456789ABCDEF";
    var kleur = '#';
    for(var n = 1; n < 7; n++)
    {
        kleur += lettersHex[Math.floor(Math.random() * 16)];
    }
    return kleur;
}
