$(document).ready(function() {
	$("#domainName").blur(function(){
		$.ajax({
			url:serviceUri+"template/checkDomain",
			data:{domainName:$(this).val()},
			type:"POST",
			dataType:"JSON",
			success:function(data){
				if(data==1){
					if($(".availability").hasClass("glyphicon-remove")){
						$(".availability").removeClass("glyphicon-remove").addClass("glyphicon-ok");
					}
				}
				else{
					if($(".availability").hasClass("glyphicon-ok")){
						$(".availability").removeClass("glyphicon-ok").addClass("glyphicon-remove");
					}
				}
			}
		})
	})
	$("#submitForm").click(function(e){
		e.preventDefault();
		$.ajax({
			url:serviceUri+"template/createStore",
			data:{
				storeName:$("#storeName").val(),
				domainName:$("#domainName").val(),
				clientInfo:navigator,
				key:$("#keyValue").val()
			},
			type:"POST",
			success:function(data){
				location.href=serviceUri+"website";
			}
		})
	})
})