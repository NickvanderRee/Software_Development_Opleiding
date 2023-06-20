function Plus()
{
    var getal1 = parseInt(window.document.getElementById("getal1").value);
    var getal2 = parseInt(window.document.getElementById("getal2").value);
    if(getal1 == 0 || getal2 == 0)
    {
        document.getElementById("awnser").innerHTML = "Het getal is te laag";
    }
    else
    {
        var awnser = getal1 + getal2;
        document.getElementById("awnser").innerHTML = "Het antwoord is:" + awnser;
    }
}

function Minus()
{
    var getal1 = parseInt(window.document.getElementById("getal1").value);
    var getal2 = parseInt(window.document.getElementById("getal2").value);
    if(getal1 == 0 || getal2 == 0)
    {
        document.getElementById("awnser").innerHTML = "Het getal is te laag";
    }
    else
    {
        var awnser = getal1 - getal2;
        document.getElementById("awnser").innerHTML = "Het antwoord is:" + awnser;
    }
}

function Multiply()
{
    var getal1 = parseInt(window.document.getElementById("getal1").value);
    var getal2 = parseInt(window.document.getElementById("getal2").value);
    if(getal1 == 0 || getal2 == 0)
    {
        document.getElementById("awnser").innerHTML = "Het getal is te laag";
    }
    else
    {
        var awnser = getal1 * getal2;
        document.getElementById("awnser").innerHTML = "Het antwoord is:" + awnser;
    }
}

function Divide()
{
    var getal1 = parseInt(window.document.getElementById("getal1").value);
    var getal2 = parseInt(window.document.getElementById("getal2").value);
    if(getal1 == 0 || getal2 == 0)
    {
        document.getElementById("awnser").innerHTML = "Het getal is te laag";
    }
    else
    {
        var awnser = getal1 / getal2;
        document.getElementById("awnser").innerHTML = "Het antwoord is:" + awnser;
    }
}