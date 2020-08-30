var $ = jQuery;
$(document).ready(function () {
    $('#submit').click(function () {

		var name 				= $("#name").val();
		var phone 				= $("#phone").val();
		var email 				= $("#email").val();
		var validacion_email 	= /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
		var business 			= $("#business").val();
		var aceptar 			= $("#aceptar").is(":checked");

		if (name == "" || phone == "" || email == "" || business == "" || !aceptar) {
			if (name == "") {
				$(".name + .error").removeClass("d-none");
				$("#name").focus();
				return false;
			} else {
				$(".name + .error").addClass("d-none");
			}
			if (phone == "") {
				$(".phone + .error").removeClass("d-none");
				$("#phone").focus();
				return false;
			} else {
				$(".phone + .error").addClass("d-none");
			}
			if (email == "" || !validacion_email.test(email)) {
				$(".email + .error").removeClass("d-none");
				$("#email").focus();
				return false;
			} else {
				$(".email + .error").addClass("d-none");
			}
			if (business == "") {
				$(".business + .error").removeClass("d-none");
				$("#business").focus();
				return false;
			} else {
				$(".business + .error").addClass("d-none");
			}
			if (!aceptar) {
				$(".aceptar + label + .error").removeClass("d-none");
				$("#aceptar").focus();

				return false;
			} else {
				$(".aceptar + label + .error").addClass("d-none");
			}
		} else {
			$(".aceptar + .error").addClass("d-none");
			var datos = '&name=' + name +
				'&phone=' + phone +
				'&email=' + email +
				'&business=' + business;
			$.ajax({
				method: "Post",
				url: "/wp-content/themes/sicotheme/bigrecord.php",
				dataType: "json",
				data: datos,
			}).done(function (msg) {
				if (msg.success) {
					$('.alerta p').fadeIn("slow");
					$('.alerta p').html('Muchas Gracias por contáctarnos, pronto nos estaremos comunicando contigo.');
					$('#name').val("");
					$('#phone').val("");
					$('#email').val("");
					$('#business').val("");
				} else {
					$('.alerta p').fadeIn("slow");
					$('.alerta p').html('Error, intente más tarde por favor.');
				}
			});
			return false;
		}
	});
});
