const hostName = "Ata";
var x1 = 10;
var x2 = 20;

function sayHello(name) {
    let x3 = 10;
    alert(x3);
    console.log(`Hello from  uncle ${name}, my name is ${hostName}`);
}

function sayHello2(name) {
    document.getElementById("txtResults").innerHTML = `Hello from uncle ${name}`;
}