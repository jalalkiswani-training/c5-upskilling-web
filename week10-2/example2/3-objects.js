var person = {
    id: "10",
    name: "Jalal",
    salary: 100,
    hello() {
        return `Hello, my name is ${this.name}`;
    }
};

console.log(person);

console.log(person.name);
person.salary = 300;

console.log(person.salary);
console.log(person.hello())