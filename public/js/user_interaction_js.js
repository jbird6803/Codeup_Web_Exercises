// todo: Ask the user for their name.
//       Keep asking if an empty input is provided.

do {
	var response = prompt('What is your name?');
} while (response == "");

if (response == null) {
	alert('bye Felicia');
	exit(0);
} else {
	alert('Whats up ' + response);
}



// todo: Show an alert message that welcomes the user based on their input.

var confirmed = confirm('Do you like pizza?');

if (confirmed) {
	alert('Of course you do.')
} else {
	alert('What is wrong with you?')
}
// todo: Ask the user if they like pizza.
//       Based on their answer tell show a creative alert message.