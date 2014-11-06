// for (var i = 100; i >= 5; i = (i - 5)) {
// 	console.log(i);
// }

// ///////////////////////////////////////////

for (var a = 0; a < 100; a++){
	if ((a % 3 != 0) && (a % 5 != 0)) {
		console.log(a);
	}	else if ((a % 3 == 0) && (a % 5 == 0)) {
			console.log("FizzBuzz");
		}	else if (a % 3){
			console.log("fizz");
		}	else {
			console.log("buzz");
		}	
}