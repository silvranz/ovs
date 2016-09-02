$(document).ready(function() {
	$("#profilePictureImage").click(function(){
		$("#profilePic").click();
	})
	$("#changeProfile").click(function(){
		if($("#profilePic").val()!=""){
			$("#formPicture").submit();
		}
		$("#formProfile").submit();
	})
	$("#formPicture").submit(function(e){
		e.preventDefault();
		var formData = new FormData(e.target);
        $.ajax({
            url : serviceUri+"users/updateProfilePic",
            type : 'POST',
            data : formData,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
				console.log(data);
            }
        });
	})
	$("#formProfile").submit(function(e){
		e.preventDefault();
		var formData = new FormData(e.target);
        $.ajax({
            url : serviceUri+"users/updateProfile",
            type : 'POST',
            data : formData,
			processData: false,
			contentType: false,
            success : function(data) {
				console.log(data);
            }
        });
	})
});