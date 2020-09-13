class Student {
    constructor() {
        this.id = 0;
        this.name = null;
        this.avg = 0;
    }

    hello() {
        return `My name is ${this.name} and my avg is ${this.avg}`;
    }
}

var std = { id: 20, name: "Jalal", avg: 99 };

module.exports = Student;