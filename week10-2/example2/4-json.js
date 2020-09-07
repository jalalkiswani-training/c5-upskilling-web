var person = {
    id: "10",
    name: "Jalal",
    salary: 100,
    hello() {
        return `Hello, my name is ${this.name}`;
    }
};

//var personJson = { "id": "10", "name": "Jalal", "salary": 200 };

var jsonText = JSON.stringify(person);
console.log("Json format: " + jsonText);


var obj2 = JSON.parse(jsonText);
console.log(`JavaScript objects format: ${JSON.stringify(obj2)}`);