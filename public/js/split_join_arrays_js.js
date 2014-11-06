var planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Saturn', 'Jupiter', 'Neptune', 'Uranus', 'Pluto'];

console.log(planets);

var planetsAsString = planets.join(' | ');

console.log(planetsAsString);

var planetsAsArray = planetsAsString.split(' | ');

console.log(planetsAsArray);