const Student = require("./student.js");
std = require("./std.js");


var x1 = 10;
var x2 = 20;

console.log(x1 + x2);

console.log(std);

console.log(std.name);


var std = new Student();
std.id = 10;
std.name = "Essa";
std.avg = 50;

console.log(std)
console.log(std.name)
console.log(std.hello())

function x() {
    console.log("Hi from X function");
}

x();

var f = (name) => console.log("Function in a variable " + name);
f("Ata");