jQuery(document).ready(function(){
	
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
			number: {
				required: true,
				digits: true
			},
			status: "required",
			weight: {
				required: true,
				number: true,
				min: 1
			}
		},
		messages: {
			number: {
				required: "Por favor ingrese el numero de cerda",
				digits: "Debe ingresar solo numeros"
			},
			status: "Por favor ingrese el estado de la cerda",
			weight: {
				required: "Por favor ingrese el peso de cerda",
				number: "Debe ingresar solo numeros",
				min: "El valor debe ser mayor que 0"
			}
		}
	});
	
	//FORM VALIDATION
	jQuery("#formsearchcerda").validate({
		rules: {
			numbersearch: {
				required: true,
				digits: true
			}
		},
		messages: {
			numbersearch: {
				required: "Por favor ingrese el numero de cerda",
				digits: "Debe ingresar solo numeros"
			}
		}
	});
	
	//FORM VALIDATION
	jQuery("#formeditcerda").validate({
		rules: {
			number: {
				required: true,
				digits: true
			},
			date: 'required',
			estado: "required",
			weight: {
				required: true,
				number: true,
				min: 1
			}
		},
		messages: {
			number: {
				required: "Por favor ingrese el numero de cerda",
				digits: "Debe ingresar solo numeros"
			},
			date: "Por favor ingrese la fecha",
			estado: "Por favor ingrese el estado de la cerda",
			weight: {
				required: "Por favor ingrese el peso de cerda",
				number: "Debe ingresar solo numeros",
				min: "El valor debe ser mayor que 0"
			}
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
	jQuery("#formnewservicio").validate({
		rules: {
			number: {
				required: true,
				digits: true
			},
			date: 'required',
			male: "required"
		},
		messages: {
			number: {
				required: "Por favor ingrese el numero de cerda",
				digits: "Debe ingresar solo numeros"
			},
			date: "Por favor ingrese la fecha",
			male: "Por favor ingrese el macho"
		}
	});
	
	//FORM VALIDATION
	jQuery("#formnewparto").validate({
		rules: {
			number: {
				required: true,
				digits: true
			},
			date: 'required',
			alive: {
				required: true,
				digits: true,
				min: 0
			},
			dead: {
				required: true,
				digits: true,
				min: 0
			},
			momif: {
				required: true,
				digits: true,
				min: 0
			}
		},
		messages: {
			number: {
				required: "Por favor ingrese el numero de cerda",
				digits: "Debe ingresar solo numeros"
			},
			date: "Por favor ingrese la fecha",
			alive: {
				required: "Por favor ingrese el numero de cerdos vivos",
				digits: "Debe ingresar solo numeros",
				min: "El valor debe ser positivo"
			},
			dead: {
				required: "Por favor ingrese el numero de cerdos muertos",
				digits: "Debe ingresar solo numeros",
				min: "El valor debe ser positivo"
			},
			momif: {
				required: "Por favor ingrese el numero de cerdos momificados",
				digits: "Debe ingresar solo numeros",
				min: "El valor debe ser positivo"
			}
		}
	});
	
	//FORM VALIDATION
	jQuery("#formnewdestete").validate({
		rules: {
			number: {
				required: true,
				digits: true
			},
			date: 'required',
			lechones: {
				required: true,
				digits: true,
				min: 1
			},
			days: {
				required: true,
				digits: true,
				min: 1
			},
			weight: {
				required: true,
				number: true,
				min: 1
			}
		},
		messages: {
			number: {
				required: "Por favor ingrese el numero de cerda",
				digits: "Debe ingresar solo numeros"
			},
			date: "Por favor ingrese la fecha",
			lechones: {
				required: "Por favor ingrese el numero de lechones",
				digits: "Debe ingresar solo numeros",
				min: "El valor debe ser mayor que 0"
			},
			days: {
				required: "Por favor ingrese la cantidad de dias",
				digits: "Debe ingresar solo numeros",
				min: "El valor debe ser mayor que 0"
			},
			weight: {
				required: "Por favor ingrese el peso total",
				number: "Debe ingresar solo numeros",
				min: "El valor debe ser mayor que 0"
			}
		}
	});
	
	//FORM VALIDATION
	jQuery("#formnewlactancia").validate({
		rules: {
			number: {
				required: true,
				digits: true
			},
			date: 'required',
			adopt: {
				required: true,
				digits: true,
				min: 0
			},
			dead: {
				required: true,
				digits: true,
				min: 0
			}
		},
		messages: {
			number: {
				required: "Por favor ingrese el numero de cerda",
				digits: "Debe ingresar solo numeros"
			},
			date: "Por favor ingrese la fecha",
			adopt: {
				required: "Por favor ingrese el numero de lechones adoptados",
				digits: "Debe ingresar solo numeros",
				min: "El valor debe ser positivo"
			},
			dead: {
				required: "Por favor ingrese el numero de lechones muertos",
				digits: "Debe ingresar solo numeros",
				min: "El valor debe ser positivo"
			}
		}
	});
	
	//FORM VALIDATION
	jQuery("#formedituser").validate({
		rules: {
			oldpass: {
				required: true,
				minlength: 4
			},
			newpass: {
				required: true,
				minlength: 4
			},
			newpass2: {
				required: true,
				minlength: 4
			}
		},
		messages: {
			oldpass: {
				required: "Por favor ingrese la contraseña actual",
				minlength: "El password debe tener al menos 4 caracteres"
			},
			newpass: {
				required: "Por favor ingrese la contraseña nueva",
				minlength: "El password debe tener al menos 4 caracteres"
			},
			newpass2: {
				required: "Por favor repita la contraseña nueva",
				minlength: "El password debe tener al menos 4 caracteres"
			}
		}
	});
	
	//FORM VALIDATION
	jQuery("#formnewuser").validate({
		rules: {
			username: {
				required: true,
				minlength: 4
			},
			newpass: {
				required: true,
				minlength: 4
			},
			newpass2: {
				required: true,
				minlength: 4
			}
		},
		messages: {
			username: {
				required: "Por favor ingrese el nombre de usuario",
				minlength: "El nombre de usuario debe tener al menos 4 caracteres"
			},
			newpass: {
				required: "Por favor ingrese la contraseña",
				minlength: "El password debe tener al menos 4 caracteres"
			},
			newpass2: {
				required: "Por favor repita la contraseña",
				minlength: "El password debe tener al menos 4 caracteres"
			}
		}
	});
	
	
	//for checkbox
	jQuery('input[type=checkbox]').each(function(){
		var t = jQuery(this);
		if(t.is(':checked')){
			t.wrap('<span class="checkbox checked"></span>');
		}
		else{
			t.wrap('<span class="checkbox"></span>');
		}
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
