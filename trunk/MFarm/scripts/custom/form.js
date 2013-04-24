jQuery(document).ready(function(){
	
	//dual box
	var db = jQuery('#dualselect').find('.ds_arrow .arrow');	//get arrows of dual select
	var sel1 = jQuery('#dualselect select:first-child');		//get first select element
	var sel2 = jQuery('#dualselect select:last-child');			//get second select element
	
	sel2.empty(); //empty it first from dom.
	
	db.click(function(){
		var t = (jQuery(this).hasClass('ds_prev'))? 0 : 1;	// 0 if arrow prev otherwise arrow next
		if(t) {
			sel1.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					var op = sel2.find('option:first-child');
					sel2.append(jQuery(this));
				}
			});	
		} else {
			sel2.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					sel1.append(jQuery(this));
				}
			});		
		}
	});
	
	//FORM VALIDATION
	jQuery("#form1").validate({
		rules: {
			firstname: "required",
			lastname: "required",
			email: {
				required: true,
				email: true,
			},
			location: "required",
			selection: "required"
		},
		messages: {
			firstname: "Please enter your first name",
			lastname: "Please enter your last name",
			email: "Please enter a valid email address",
			location: "Please enter your location"
		}
	});
	
	//FORM VALIDATION
	jQuery("#formnewcerda").validate({
		rules: {
			number: "required",
			status: "required",
			weight: "required"
		},
		messages: {
			number: "Por favor ingrese el numero de cerda",
			status: "Por favor ingrese el estado de la cerda",
			weight: "Por favor ingrese el peso de la cerda"
		}
	});
	
	//FORM VALIDATION
	jQuery("#formnewestado").validate({
		rules: {
			name: "required"
		},
		messages: {
			name: "Por favor ingrese el nombre del estado"
		}
	});
	
	//FORM VALIDATION
	jQuery("#formedituser").validate({
		rules: {
			oldpass: "required",
			newpass: "required",
			newpass2: "required"
		},
		messages: {
			oldpass: "Por favor ingrese la contraseña actual",
			newpass: "Por favor ingrese la contraseña nueva",
			newpass2: "Por favor repita la contraseña nueva"
		}
	});
	
	//FORM VALIDATION
	jQuery("#formnewuser").validate({
		rules: {
			username: "required",
			newpass: "required",
			newpass2: "required"
		},
		messages: {
			username: "Por favor ingrese el nombre de usuario",
			newpass: "Por favor ingrese la contraseña nueva",
			newpass2: "Por favor repita la contraseña nueva"
		}
	});
	
	
	//for checkbox
	jQuery('input[type=checkbox]').each(function(){
		var t = jQuery(this);
		t.wrap('<span class="checkbox"></span>');
		t.click(function(){
			if(jQuery(this).is(':checked')) {
				t.attr('checked',true);
				t.parent().addClass('checked');
			} else {
				t.attr('checked',false);
				t.parent().removeClass('checked');
			}
		});
	});	

});
