let budget = prompt("vul hier uw budget in")

function BudgetCheck(){
    var product = 60;

    if(budget > product){
        alert("transactie voltooid")
        document.getElementById("voldoende").style.color = "green";
        document.getElementById("voldoende").innerHTML= "transactie voltooid";
    }   else{
        alert("transactie mislukt")
        document.getElementById("voldoende").style.color = "red";
        document.getElementById("voldoende").innerHTML= "transactie mislukt";
    }
}