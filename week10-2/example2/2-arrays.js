var x1 = 30;
var x2 = 20;

var arr = ["Ata", "Jamal", "Essa"];
console.log(arr);

var f1 = function(item, index) {
    console.log(`Item at ${index} = ${item} `)
};

arr.forEach(f1);


/*
arr.forEach(function(item, index) {
    console.log(`Item at ${index} = ${item} `)
});
*/

var item = arr.pop();

console.log(`Item ${item} was removed`);
arr.push("Kamal");

arr.forEach((item, index) => {
    console.log(`Item at ${index} = ${item} `)
});