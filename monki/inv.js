const myList = (document.querySelector(".monkeyList") ? document.querySelector(".monkeyList") : document.querySelector(".fakeList"));
const addMonke = document.querySelector(".majomButton");
const clearMonke = document.getElementById("majomButton1");

var storedInv = localStorage.getItem('inventory');

const vezNev = ["Gelencsér", "Lakatos", "Bagacsi", "Lopodi", "Raffai", "Zsoldos", "Miksi", "Kab", "Pap","Budai","Foltos","Lantos","Lapp","Mondok","Pupák","Sonkolyos","Csápi","Kalapos","Galamb","Rozs","Mészöly"];
const kerNev = ["Tamás", "Ulrich", "Herold", "Botond", "Alajos", "Mór", "Szabi", "Leopold","Balambér","Gilbert","Taksony","Habakuk","Tódor","Tóbiás","Juszuf","Barni","Kázmér","Oszvald","Tihamér","عبد المجيد"];

function kerekMajmot(){
    const li = document.createElement("li");
    const img = document.createElement("img");
    img.width = 100;
    img.height=100;
    img.src="majom" + (Math.floor(Math.random() * 21) +1)+ ".jpg";

    var nev = (vezNev[Math.floor(Math.random() * vezNev.length)]+" "+kerNev[Math.floor(Math.random() * kerNev.length)]);

    li.appendChild(img);
    li.appendChild(document.createTextNode(nev));

    myList.prepend(li);

    saveToLocal();
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
        kerekMajmot();
        
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