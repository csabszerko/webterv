const myList = (document.querySelector(".monkeyList") ? document.querySelector(".monkeyList") : document.querySelector(".fakeList"));
const addMonke = document.querySelector(".majomButton");
const clearMonke = document.getElementById("clearMajomButton");

var storedInv = localStorage.getItem('inventory');

const vezNev = ["Lápi","Kapolcs","Illés","Virág","Gelencsér", "Lakatos", "Bagacsi", "Lopodi", "Raffai", "Zsoldos", "Miksi", "Kab", "Pap","Budai","Foltos","Lantos","Lapp","Mondok","Pupák","Sonkolyos","Csápi","Kalapos","Galamb","Rozs","Mészöly"];
const kerNev = ["Huba","Kázmér","Illés","Ármin","Krisztián","Tamás", "Ulrich", "Herold", "Botond", "Alajos", "Mór", "Szabi", "Leopold","Balambér","Gilbert","Taksony","Habakuk","Tódor","Tóbiás","Juszuf","Barni","Kázmér","Oszvald","Tihamér","عبد المجيد"];

function kerekMajmot(ujKepId){

    const li = document.createElement("li");
    const img = document.createElement("img");
    img.width = 100;
    img.height=100;
    if(ujKepId==0)
    {
        img.src="../majmok/majom" + (Math.floor(Math.random() * 20) +1)+ ".jpg";
    }else{
        img.src="../majmok/majom" + (ujKepId)+ ".jpg";
    }

    var nev = (vezNev[Math.floor(Math.random() * vezNev.length)]+" "+kerNev[Math.floor(Math.random() * kerNev.length)]);
    // ujNev=nev;

    li.appendChild(img);
    li.appendChild(document.createTextNode(nev));

    myList.prepend(li);

    saveToLocal();
    //nem mindig letezik ez a fuggveny;
    setName(nev);
}

const saveToLocal = ()=>
{
    localStorage.setItem('inventory', myList.innerHTML);
}

function LoadInv()
{
    if(myList)
    {
        myList.innerHTML = storedInv;
    }
}

LoadInv();

//addMonke.addEventListener("click", kerekMajmot());
if(addMonke)
{
    addMonke.addEventListener("click", function(e) {
        // addMonke.innerText="meg";
        kerekMajmot(0);
        
    });
}

if(clearMonke)
{
    clearMonke.addEventListener("click", function(e) {
        // clearMonke.innerText="rip";
        localStorage.clear();
        storedInv = "";
        LoadInv();
    });
}