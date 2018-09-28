
$(document).ready(function(){
	$("#form-feedback").submit(function(){
		$.ajax({
			type: "POST",
			url:"js/mail.php",
			dataType:'json',
			data: $(this).serialize()
		}).done(function(data){
				
				switch(data){
					case 3:
					alert("Все данные введены верно, ваше сообщение отправлено");
					$(this).find("input").val("");
					$("#form-feedback").trigger("reset");
					break;
					case 2:
					alert("E-mail введен не верно");
					break;
					case 1:
					alert("Маленькая длина у имени или сообщения");
					break;
					case 0:
					alert("Данные введены не корректно");
					break;
				}
			});
		return false; 
	});
});