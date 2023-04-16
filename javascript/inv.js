const myList = (document.querySelector(".monkeyList") ? document.querySelector(".monkeyList") : document.querySelector(".fakeList"));
const addMonke = document.querySelector(".majomButton");
const clearMonke = document.getElementById("clearMajomButton");

var torold = false;

// const pop = new Audio("../hang/pop1.flac");

var storedInv = localStorage.getItem('inventory');

const vezNev = ["Lápi","Kapolcs","Illés","Virág","Gelencsér", "Lakatos", "Bagacsi", "Lopodi", "Raffai", "Zsoldos", "Miksi", "Kab", "Pap","Budai","Foltos","Lantos","Lapp","Mondok","Pupák","Sonkolyos","Csápi","Kalapos","Galamb","Rozs","Mészöly"];
const kerNev = ["Lambert","Huba","Kázmér","Illés","Ármin","Krisztián","Tamás", "Ulrich", "Herold", "Botond", "Alajos", "Mór", "Szabi", "Leopold","Balambér","Gilbert","Taksony","Habakuk","Tódor","Tóbiás","Juszuf","Barni","Kázmér","Oszvald","Tihamér","عبد المجيد"];
function kerekMajmot(ujKepId){

    myList.innerHTML="";
    const li = document.createElement("li");
    const img = document.createElement("img");
    img.width = 50;
    img.height = 50;
    img.alt="";
    if(ujKepId==-1)
    {
        img.src="../kepek/majom" + (Math.floor(Math.random() * 20) +1)+ ".jpg";
    }else if(ujKepId==0){
        img.src="../kepek/majom" + 20+ ".jpg";
    }
    else if(ujKepId>0){
        img.src="../kepek/majom" + (ujKepId)+ ".jpg";
    }


    var nev = (vezNev[Math.floor(Math.random() * vezNev.length)]+" "+kerNev[Math.floor(Math.random() * kerNev.length)]);
    // ujNev=nev;

    li.appendChild(img);
    li.appendChild(document.createTextNode(nev));

    myList.prepend(li);

    // saveToLocal();
    saveInv();
    //nem mindig letezik ez a fuggveny;
    setName(nev);
}

const saveToLocal = ()=>
{
    // saveInv();
    localStorage.setItem('inventory', myList.innerHTML);

}

function LoadInv()
{
    if(myList)
    {
        myList.innerHTML = storedInv;
        // loadInvPhp();
    }
}

// LoadInv();
// loadInvPhp();

//addMonke.addEventListener("click", kerekMajmot());
if(addMonke)
{
    addMonke.addEventListener("click", function(e) {
        // addMonke.innerText="meg";
        // pop.load();
        // pop.play();
        kerekMajmot(-1);
        
    });
}

var kokany = 0;

if(clearMonke)
{
    
    clearMonke.addEventListener("click", function(e) {
        // clearMonke.innerText="rip";

        // localStorage.clear();

        // pop.load();
        // pop.play();

        // storedInv = "";
        // LoadInv();

        // kokany++;
        // if(kokany==2)
        // {
        //     torold=true;
        //     delInv()
        //     torold=false;
        //     kokany=0;
        //     this.innerHTML("Raktár ürítése");
        // }
        switch(kokany){
            case 0:
                kokany++;
                clearMonke.innerText = "Biztos vagy benne?";
                this.style.backgroundColor = "crimson";
                break;
            case 1:
                myList.innerHTML="";
                this.style.backgroundColor = "coral";
                torold=true;
                delInv()
                torold=false;
                kokany=0;
                clearMonke.innerText ="Raktár ürítése";
        }
        // saveInv();
    });
}

function saveInv() {
    let data = new FormData();
    data.append("invTartalom",myList.innerHTML);

    fetch("../php/inventoryManager.php",
        {
            method: "POST",
            body: data
        }
    );
}

function delInv() {
    let data = new FormData();
    data.append("toroljem",torold);

    fetch("../php/inventoryManager.php",
        {
            method: "POST",
            body: data
        }
    );
}