var size = '20px'

$('document').ready(function() {
	$('.codeup').css('border', 'ridge grey 10px');
	
	$('li').css('font-size', size);
	
	$('p, h1, li').css('background-color', '#00FF00');
	
	$('h1').click(function() {
		$(this).css('background-color', 'yellow')
	});
	
	$('p').dblclick(function() {
		$(this).css('font-size', '18px')
	});
	
	$('li').hover(
			function() {
				$(this).css('background-color', 'red');
			},
			function() {
				$(this).css('background-color', '#00FF00');
			}
	);
});




$('document').ready(function() {
    var contents = $('h1').html();
    alert(contents);
});