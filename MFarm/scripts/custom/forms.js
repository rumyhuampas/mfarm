jQuery(document).ready(function(){
	
	//FORM VALIDATION
	$("#form1").validate({
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
	$("#formnewcerda").validate({
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
	$("#formsearchcerda").validate({
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
	$("#formeditcerda").validate({
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
	$("#formnewestado").validate({
		rules: {
			name: "required"
		},
		messages: {
			name: "Por favor ingrese el nombre del estado"
		}
	});
	
	//FORM VALIDATION
	$("#formnewservicio").validate({
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
	$("#formnewparto").validate({
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
	$("#formnewdestete").validate({
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
	$("#formnewlactancia").validate({
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
	$("#formedituser").validate({
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
				required: "Por favor ingrese la contraseņa actual",
				minlength: "El password debe tener al menos 4 caracteres"
			},
			newpass: {
				required: "Por favor ingrese la contraseņa nueva",
				minlength: "El password debe tener al menos 4 caracteres"
			},
			newpass2: {
				required: "Por favor repita la contraseņa nueva",
				minlength: "El password debe tener al menos 4 caracteres"
			}
		}
	});
	
	//FORM VALIDATION
	$("#formnewuser").validate({
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
				required: "Por favor ingrese la contraseņa",
				minlength: "El password debe tener al menos 4 caracteres"
			},
			newpass2: {
				required: "Por favor repita la contraseņa",
				minlength: "El password debe tener al menos 4 caracteres"
			}
		}
	});	
	
	//FORM VALIDATION
	$("#formnewcliente").validate({
		rules: {
			cuil: {
				required: true,
				minlength: 10
			},
			name: {
				required: true
			}
		},
		messages: {
			cuil: {
				required: "Por favor ingrese el cuil del cliente",
				minlength: "El cuil debe tener al menos 10 caracteres"
			},
			name: {
				required: "Por favor ingrese el nombre del cliente"
			}
		}
	});
	
	//FORM VALIDATION
	$("#formeditcliente").validate({
		rules: {
			dni: {
				required: true
			},
			cuil: {
				required: true,
				minlength: 10
			},
			name: {
				required: true
			}
		},
		messages: {
			dni: {
				required: "Por favor ingrese el dni del cliente"
			},
			cuil: {
				required: "Por favor ingrese el cuil del cliente",
				minlength: "El cuil debe tener al menos 10 caracteres"
			},
			name: {
				required: "Por favor ingrese el nombre del cliente"
			}
		}
	});	
	
	//for checkbox
	$('input[type=checkbox]').each(function(){
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
