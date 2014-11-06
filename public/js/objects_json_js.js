// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

var books = [
				{	
					"Title": "Lonesome Dove",
					"Author": 	{
								"First": "Larry",
								"Last": "McMurtry"
								}
				},
				
				{
					"Title": "Cash",
					"Author": 	{
								"First": "Johnny",
								"Last": "Cash"
								}
				},
				
				{
					"Title": "I Hope They Serve Beer In Hell",
					"Author": 	{
								"First": "Tucker",
								"Last": "Max"
								}
				},
				
				{	
					"Title": "Miracle in the Andes",
					"Author": 	{
								"First": "Nando",
								"Last": "Parrado"
								}
				},
				
				{
					"Title": "The Giving Tree",
					"Author": 	{
								"First": "Shel",
								"Last": "Silverstein"
								}
				}
			];

console.log(books);
	
	
	


// log out the books array


books.forEach(function (element, index, array) {

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
    console.log("Book #" + index);
    console.log("Title: " + element.Title);
    console.log("Author: " + element.First + element.Last);
    console.log("---");

}
// end loop here













