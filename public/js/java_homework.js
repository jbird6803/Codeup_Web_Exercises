var random = Math.floor((Math.random()*100)+1);

console.log(random);

var confirmed = confirm('Do you want to play a game?');

if (confirmed)	{

	var response = prompt("I'm thinking of a number 1 - 100. What number am I thinking?");

	count = 1;

	while (response != random) {
		
		if (response > random) {
			var response = prompt("Guess Lower");
		} else if (response < random) {
			var response = prompt("Guess Higher");
		} else {
			var response = prompt("Hey genius, why don't you try a number this time");
		}
		count++;	
		}
} else {
	alert ('Bye Felicia');
}

if (count < 5) {
		alert("It only took you " + count + " times. You think you're smart or something?");
	} else if (count > 8) {
		alert(count + " guesses? Do you even number bro?");
	} else {
		alert(count + " guesses. Not bad, but not good either."); 
	}


