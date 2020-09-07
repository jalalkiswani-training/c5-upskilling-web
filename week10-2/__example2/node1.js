var person = {
    id: "10",
    name: "Kamal",
    salary: 100,
    hello() { return `Hello my name is ${this.name}` }
};

console.log(person.hello());