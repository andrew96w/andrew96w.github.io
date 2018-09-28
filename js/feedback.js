/*function validate(){
	var name=document.forms["form"]["name"].value;
	var email=document.forms["form"]["e-mail"].value;
	var message=document.forms["form"]["message"].value;
	at=email.indexOf("@");
	dot=email.indexOf(".")
	if(at<1 || dot<1){
		document.gerElementByName("e-mail").innerHTML="e-mail введен не верно";
		return false;
	}
}*/
$(document).ready(function(){
	alert("dvfdgvf");
	$("#form-feedback").submit(function(){
		$.ajax({
			type: "POST",
			url:"js/mail.php",
			dataType:'json',
			data: $(this).serialize()
			success: function(data){
				if(data===true){
					alert("111")
				}else{
					alert("000")
				}
			}
		})
		/*.done(function(){
			$(this).find("input").val("");
			$("#form-feedback").trigger("reset");
		});*/
		return false;
	});
});