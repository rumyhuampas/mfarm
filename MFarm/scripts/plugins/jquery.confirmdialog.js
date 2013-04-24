(function($){

	$.confirmdialog = function(params){

		if($('#confirmOverlay').length){
			// A confirm is already shown on the page:
			return false;
		}

		var buttonHTML = '';
		$.each(params.buttons,function(name,obj){

			// Generating the markup for the buttons:

			buttonHTML += '<a href="#" class="button '+obj['class']+'">'+name+'</a>';

			if(!obj.action){
				obj.action = function(){};
			}
		});

		var markup = [
			'<div id="confirmOverlay">',
			'<div id="confirmBox">',
			'<div id="top-line"></div>',
			'<h2>',params.title,'</h2>',
			'<center><p>',params.message,'</p></center>',
			'<div id="confirmButtons">',
			buttonHTML,
			'</div></div></div>'
		].join('');

		$(markup).hide().appendTo('body').fadeIn();

		var buttons = $('#confirmBox .button'),
			i = 0;

		$.each(params.buttons,function(name,obj){
			buttons.eq(i++).click(function(){

				// Calling the action attribute when a
				// click occurs, and hiding the confirm.

				obj.action();
				$.confirmdialog.hide();
				return false;
			});
		});
	}

	$.confirmdialog.hide = function(){
		$('#confirmOverlay').fadeOut(function(){
			$(this).remove();
		});
	}

})(jQuery);