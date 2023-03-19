let nyertNev ="ezt a majmot nyerted";
var kepId = 1;

(function(){
    const pop = new Audio("../hang/pop1.flac");
    const wheel = document.getElementById("kerek");
    const spinBtn = document.getElementById("spinButton");
    // const resultDiv = document.querySelector(".result");
    const resultContainerDiv = document.querySelector(".resultContainer");
    const nyeremenyDiv = document.querySelector(".nyeremeny");
    let deg=0;
    // let kepId = 1;

    spinBtn.addEventListener("click", ()=> {
        spinBtn.style.backgroundColor = "coral";
        spinBtn.style.pointerEvents = "none";
        deg = Math.floor(Math.random() * 3000 + 3000);
        wheel.style.transition = `all 10s cubic-bezier(.3,0,0,1)`;
        wheel.style.transform = `rotate(${deg}deg)`;

        kepId = 20-Math.round((deg%360/18));
        console.log(deg);
        console.log(deg%360);
        console.log(kepId);
        
        pop.load();
        pop.play();
        kerekMajmot(kepId);
    });

    wheel.addEventListener("transitionend", ()=>{
        spinBtn.style.backgroundColor = "#04AA6D";
        spinBtn.style.pointerEvents = "auto";
        wheel.style.transition = "none";
        const currRot = deg % 360;
        wheel.style.transform = `rotate(${currRot}deg)`;

        // resultContainerDiv.removeChild(resultDiv);

        empty(resultContainerDiv);

        pop.load();
        pop.play();

        const resultDiv = document.createElement("div");
        resultDiv.classList.add("result");
        resultContainerDiv.appendChild(resultDiv);

        resultDiv.innerHTML = '<img src="../majmok/majom' + kepId + '.jpg">'
        + '<p>' + nyertNev + ' személyesen' + '</p>';
        // resultDiv.innerHTML = "xds";
        nyeremenyDiv.innerHTML="Nyereményed:"
    });

})();

function setName(name){
    nyertNev=name;
}

function empty(element) {
    while(element.firstElementChild) {
       element.firstElementChild.remove();
    }
  }