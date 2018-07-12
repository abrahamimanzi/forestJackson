function SubmitFormData() {
	var name = $("#name").val();
	var email = $("#email").val();
	var telephone = $("#telephone").val();
	var subject = $("#subject").val();
	var content = $("#content").val();
	// var gender = $("input[type=radio]:checked").val();
	$.post("submit.php", { name: name, email: email, telephone: telephone, subject: subject, content: content },
	   function(data) {
		 $('#results').html(data);
		 $('#myForm')[0].reset();
	   });
}

