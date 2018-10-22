
$(document).ready(function(){
	$("#form").submit(function(){
		$.ajax({
			type: "POST",
			url:"mail.php",
			data: $(this).serialize(),
			success: function(data){
					if(data == "Success"){
						$("#alert").html("");
						alert("Вы успешно зарегистрированы");
						$(this).find("input").val("");
						$("#form").trigger("reset");
						$(".modal").modal("hide");
					} else{
						$("#alert").html(data);
					}
			}
		});
		return false; 
	});
	$(".modal").on("hidden.bs.modal", function() {
		$("#alert").html("");
	});
});