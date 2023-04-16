const nevMenu = document.getElementById("nevvaltoztatas");
const jelszoMenu = document.getElementById("jelszovaltoztatas");

const nevGomb = document.getElementById("changeName");
const jelszoGomb = document.getElementById("changePass");

const deleteGomb = document.getElementById("deleteAcc");

var torold = false;

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
        show(deleteGomb);
        nevGomb.innerText = "Vissza";
        hide(jelszoGomb);
        hide(deleteGomb);
    }
    else if(nevGombCounter==2){
        hide(nevMenu);
        hide(deleteGomb);
        nevGomb.innerText = "Névváltoztatás";
        show(jelszoGomb);
        show(deleteGomb);
        nevGombCounter=0;
    }
});

var jelszoGombCounter=0;
jelszoGomb.addEventListener("click", function(e){
    jelszoGombCounter++;
    if(jelszoGombCounter==1)
    { 
        show(jelszoMenu);
        show(deleteGomb);
        jelszoGomb.innerText = "Vissza";
        hide(nevGomb);
        hide(deleteGomb);
    }
    else if(jelszoGombCounter==2){
        hide(jelszoMenu);
        hide(deleteGomb);
        jelszoGomb.innerText = "Jelszóváltoztatás";
        show(nevGomb);
        show(deleteGomb);
        jelszoGombCounter=0;
    }
});

var delCounter=0;
deleteGomb.addEventListener("click", function(e){
    delCounter++;
    if(delCounter==1)
    { 
        deleteGomb.innerText = "Biztos vagy benne?";
        deleteGomb.style.backgroundColor = "crimson";
    }
    else if(delCounter==2){
        torold=true;
        deleteAccount();
        torold=false;
        // deleteGomb.innerText = "Done";
        delCounter=0;
    }
});

hide(nevMenu);
hide(jelszoMenu);

function deleteAccount() {
    let data = new FormData();
    data.append("toroljemAzAccot",torold);

    fetch("/webterv/php/accountDeleter.php",
        {
            method: "POST",
            body: data
        }
    );
    // window.location="/webterv/html/index.html";
}