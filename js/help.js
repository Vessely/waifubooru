$(function(){
	//Variables objeto.
	var send_btn = $(".problem-send");
	var name, email, problem;
	var c_n, c_e, c_p;
	var url, type;
	var child_window = "";
	var new_url = "http://localhost/waifubooru/inicio";

	url     = "controller/store_problem_controller.php";
	type    = "POST";

	name    = $("[name='name']");
	email   = $("[name='email']");
	problem = $("[name='problem']");

	c_n = name.val();
	c_e = email.val();
	c_p = problem.val();

	//Funciones handler.
	send_btn.click(function(){

		if( check() ){
			//Se envie.
			send_problem(c_n, c_e, c_p);
		}else{
			$.notify("Revisa tu formulario antes de enviar.", {className: "warn" , showDuration: 1000, position: "right-bottom"});
		}
		send_btn.addClass('disabled').removeClass('problem-send');
	});

	//Funciones.
	function reload_another_page(){
		childWindow.location.href = new_url;
	}
	function send_problem(cn, ce, cp){
		$.ajax({
			url: url,
			type: type,
			dataType: "html",
			data: {cn: cn, ce: ce, cp: cp},
			success:function( data ){
				if( data == "true"){
					$.notify("¡Se ha enviado correctamente tu reporte!", {className: "success" , showDuration: 1000, position: "right-top"});			
					$.notify("Espera nuestro correo con la respuesta : )", {className: "success" , showDuration: 1000, position: "right-top"});			
				}
				console.log( data );
				reload_another_page();
			}
		});
	}

	function check(){
		if(c_n == '' || c_e == '' || c_p == ''){
			return false;

		}else{
			return true;

		}
	}
});
