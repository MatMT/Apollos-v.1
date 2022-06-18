
$(function() {
	var tab = $('.tabs h3 a');
	var newTitle = '';
	tab.on('click', function(event, newTitle) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');
		tab_content = $(this).attr('href');
		$('div[id$="tab"]').removeClass('active');
		$(tab_content).addClass('active');
	
		if($(document).attr("title") == "Inicia sesión | Apollo's")
		{
    		$(document).attr("title", "Registrate | Apollo's");
		}else if($(document).attr("title")== "Registrate | Apollo's")
		{
			$(document).attr("title", "Inicia sesión | Apollo's");
		}

	});
});

