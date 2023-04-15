const nevMenu = document.getElementById("nevvaltoztatas");
const jelszoMenu = document.getElementById("jelszovaltoztatas");

const nevGomb = document.getElementById("changeName");
const jelszoGomb = document.getElementById("changePass");

function show(kokany){
    kokany.style.display = "block";
}
function hide(kokany){
    kokany.style.display = "none";
}

var nevGombCounter=0;
nevGomb.addEventListener("click", function(e){
    nevGombCounter++;
    if(nevGombCounter==1)
    { 
        show(nevMenu);
        nevGomb.innerText = "Vissza";
        hide(jelszoGomb);
    }
    else if(nevGombCounter==2){
        hide(nevMenu);
        nevGomb.innerText = "Névváltoztatás";
        show(jelszoGomb);
        nevGombCounter=0;
    }
});

var jelszoGombCounter=0;
jelszoGomb.addEventListener("click", function(e){
    jelszoGombCounter++;
    if(jelszoGombCounter==1)
    { 
        show(jelszoMenu);
        jelszoGomb.innerText = "Vissza";
        hide(nevGomb);
    }
    else if(jelszoGombCounter==2){
        hide(jelszoMenu);
        jelszoGomb.innerText = "Jelszóváltoztatás";
        show(nevGomb);
        jelszoGombCounter=0;
    }
});

hide(nevMenu);
hide(jelszoMenu);