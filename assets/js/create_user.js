try{
	var $id         = $("input#id_user");
	var $usuario    = $("input#usuario");
	var $email      = $("input#email");
	var $password   = $("input#password");
	var $telefono   = $("input#telefono");
	var $direccion  = $("input#direccion");
	var $guardar    = $("input#guardarusuario");
	var $actualizar = $("input#actualizar");


	var $fnJS = {
		ajax_index: function (accion, obj) {
			// defino variables comunes
			var url_ajax, Datos, Mensaje;
			// creacion de objeto con una accion
			var datosRegistro ;
			switch(accion) {// switch accion
				case 'guardarUsuario':
					datosRegistro= {'usuario': obj.usuario, 'email' : obj.email,
					'password' : obj.password, 'telefono': obj.telefono, 'direccion' : obj.direccion};
					url_ajax = "guardar_usuario";
					break;
				case 'actualizarUsuario':
					datosRegistro= {'id_usuario': obj.id_usuario, 'usuario': obj.usuario, 'email' : obj.email,
						'password' : obj.password, 'telefono': obj.telefono, 'direccion' : obj.direccion};
					url_ajax = "../guardar_update";
					break;
			}
			// Llamado ajax
			$.ajax({
				beforeSend: function() { },
				url      : url_ajax,
				data     : datosRegistro,
				type     : 'POST',
				dataType : 'json',
				cache    : false,
				async    : false,
				success  : function (r) {// success
					Datos      = r.Datos;
					Mensaje    = r.men;
					switch(accion) {// switch accion
						case 'guardarUsuario':
								firebase.auth().createUserWithEmailAndPassword($email.val(), $password.val()).catch(function(error){
									var errorCode    = error.code;
									var errorMessage = error.message;
									alert("verifique su correo y contraseña");
								});

							const database = firebase.firestore();
							const userCollection = database.collection('usuarios');
							userCollection.doc("ids").set({
								nombre: obj.usuario,
								email: obj.email,
								password: obj.password,
								telefono: obj.telefono,
								direccion: obj.direccion
							})
								.then(() => {
									console.log("Document successfully written!");
								})
								.catch((error) => {
									console.error("Error writing document: ", error);
								});



							break;
						case 'actualizarUsuario':
							break;
					}
				},// success
				error: function (e) {
					console.log(e);
					return false;
				},
				dataType: 'html'
			}); // Termina la llamada AJAX
		},
	};
	$guardar.click(function(){
		event.preventDefault()
		let datos       = {};
		datos.usuario   = $usuario.val();
		datos.email     = $email.val();
		datos.password  = $password.val();
		datos.telefono  = $telefono.val();
		datos.direccion = $direccion.val();
		$fnJS.ajax_index('guardarUsuario', datos);
	});

	$actualizar.click(function(){
		event.preventDefault()
		let datos        = {};
		datos.id_usuario = $id.val();
		datos.usuario    = $usuario.val();
		datos.email      = $email.val();
		datos.password   = $password.val();
		datos.telefono   = $telefono.val();
		datos.direccion  = $direccion.val();
		$fnJS.ajax_index('actualizarUsuario', datos);
	});

}catch (e) {
	console.log(onmessageerror);
}
