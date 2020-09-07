class Person {
    constructor() {
        this.id = 0;
        this.name = null;
        this.salary = 0;
    }

    hello() {
        return `Hello, my name is ${this.name}, and my salary is: ${this.salary}`;
    }
}

p1 = new Person(); //construction
p1.name = "Ata";
p1.id = 10;

p2 = new Person();
p2.name = "Essa";
p2.salary = 200;

console.log(p1.hello());
console.log(p2.hello());
console.log(p1.hello());