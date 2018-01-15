// check off items

$("ul").on("click","li", function(){
	$(this).toggleClass("completed");

	$.post('done.php',
		{id: $(this).attr('id')},
		function (data, status) {

	});
});


$('#newTask').keypress(function(event){

	// console.log(event.which);

	if (event.which == 13) {
	var todoText = $(this).val();
	// console.log(todoText);

	$(this).val('');

	$.post('create.php',
		{task: todoText},
		function(data, status){
		// console.log(data);
			$('ul').append('<li id="' + data + '"><span><i class="fa fa-trash"></i></span>'+ todoText +'</li>');
		});

	}
});


$('ul').on('click', 'span', function() {
	// remove list items
	$(this).parent().fadeOut(500, function(){
		$(this).remove();
	});

	// console.log($(this).parent().attr('id'));

	//ajax request to update json
	$.post('delete.php', {id: $(this).parent().attr('id') }, function(data, status){

	});
});