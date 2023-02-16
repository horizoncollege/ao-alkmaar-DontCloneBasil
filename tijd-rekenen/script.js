let number = document.querySelector("#number");
const button = document.querySelector("#button");
const pi = 3.14;
setInterval(function time() {
    let date = new Date();
    document.querySelector('p').innerText = "het is " + date.toLocaleTimeString();
}, 1);


button.onclick = function () {
    var value = number.value;
    var omtrek = value * pi;
    if (value <= 0) {
        document.querySelector("#omtrek").innerText = "ingevulde getal moet groter zijn dan 0";
        document.querySelector("#opervlakte").innerText = "ingevulde getal moet groter zijn dan 0";
    } else {
        const straal = value / 2;
        const opervlakte = straal * straal * pi;
        document.querySelector("#omtrek").innerText = "de omtrek van de cirkel is " + omtrek;
        document.querySelector("#opervlakte").innerText = "de opervlakte van de cirkel is " + opervlakte;
    }
};