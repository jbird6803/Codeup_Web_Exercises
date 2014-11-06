// todo:
// Create person object with firstName and lastName properties (set to your first and last name).
// var person = todo;

var person = {};

person.first = "Jason";
person.last = "Birdwell";

console.log(person);

// todo:
// Add a say hello method to the person object that alerts hello using the firstName and lastName properties.

person.hello = function () {
	alert('Hello ' + this.first + ' ' + this.last);
};

person.hello();

// Say hello from the person object.
// person.sayHello();

