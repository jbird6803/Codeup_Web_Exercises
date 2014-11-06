// // todo:
// // Create an array of months for printing dates without Moment.js.
// var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];



// // todo:
// // Create the date corresponding to your birthday using the JavaScript Date object.
// //var jsBirthday

// var jsBirthday = new Date(1985, 4, 24);
// console.log(jsBirthday.format());

// todo:
// Log your birthday in the format: January 1, 2014 using the JavaScript Date object.
// See link below for methods needed:
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date#Getter
// console.log('Here is my birthday using vanilla js: ');

// create the date corresponding to your birthday using Moment.js.
var momentBirthday = moment();
var bday = momentBirthday.format("YYYY, MMMM, DD");
console.log(bday);

var a = moment("19850524", "YYYYMMDD").fromNow();
console.log(a);

// todo:
// Log your birthday in the format: January 1, 2014 using Moment.js.
// console.log('Here is my birthday using Moment.js: ');