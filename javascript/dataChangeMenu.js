const nevMenu = document.getElementById("nevvaltoztatas");
const jelszoMenu = document.getElementById("jelszovaltoztatas");

const nevKiiras = document.getElementById("displayFelNev");

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
        delCounter=0;
        deleteGomb.innerText = "Felhasználó Törlése";
        deleteGomb.style.backgroundColor = "coral";
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
        delCounter=0;
        deleteGomb.innerText = "Felhasználó Törlése";
        deleteGomb.style.backgroundColor = "coral";
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
        deleteGomb.style.backgroundColor = "crimson";
        hide(jelszoGomb);
        hide(nevGomb);
        nevKiiras.innerText="Sikeresen kitörölted a fiókod!";
        deleteGomb.innerText = "Kijelentkezés";

        // delCounter=0;

        // window.location="/webterv/html/index.html";
    }
    else if(delCounter==3){
        // deleteGomb.innerText = "Jelentkezz be újra";
        delCounter=0;
        window.location="../html/index.html";
    }
});

hide(nevMenu);
hide(jelszoMenu);

function deleteAccount() {
    let data = new FormData();
    data.append("toroljemAzAccot",torold);

    fetch("../php/accountDeleter.php",
        {
            method: "POST",
            body: data
        }
    );
}