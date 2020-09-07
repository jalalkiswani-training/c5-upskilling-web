module.exports.Person = class Person {

    constructor() {
        this.id = 0;
        this.name = null;
        this.salary = 0;
    }

    hello() {
        console.log(`Hello, my name is ${this.name}`);
    }
}