var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'green'; // todo, change this to your favorite color from the list

console.log('The color is: ' + color);
console.log('------------------------------');

if (color == 'red') {
	console.log('Red is the color of Lone Star Beer');
} else if (color == 'orange') {
	console.log('Orange is the color of an orange');
} else if (color == 'yellow') {
	console.log('Yellow is the color of a banana');
} else if (color == 'green') {
	console.log('Green is the color of money');
} else if (color == 'blue') {
	console.log('Blue is the color of Lone Star Lite');
} else {
	console.log('I do not know anything by that color');
}

console.log('------------------------------')

if (favorite == color) {
	console.log('That is my favorite color');
} else console.log('That color is stupid');

var message = (favorite == color) ? 'AAA' : 'BBB';
console.log('------------------------------');
console.log(message);