$(document).ready(function() {
	$(".editButton").click(function(){
		$("#triggerPopup").click();
		$("#customAboutUs").attr("edit",$(this).closest(".aboutus-item").attr("dataTag"));
	})
	$(".delButton").click(function(){
		$.ajax({
			type: 'POST',
			url:serviceUri+"website/delAboutUs",
			data:{
				store:$("#container").attr("store"),
				aboutUs:$(this).closest(".aboutus-item").attr("dataTag")
			},
			success:function(data){
			}
		});
	})
	$("#customAboutUs").click(function(){
		var parent = $(this).closest(".modal-content");
		var target = "";
		var data = {};
		if($(this)[0].hasAttribute("edit")){
			target = serviceUri+"website/editAboutUs";
			data = {
					title:$("#titleTxt",parent).val(),
					content:$("#contentTxt",parent).val(),
					store:$("#container").attr("store"),
					aboutUs:$(this).attr("edit")
				};
			$(this).removeAttr("edit");
		}
		else{
			target = serviceUri+"website/addAboutUs";
			data = {
					title:$("#titleTxt",parent).val(),
					content:$("#contentTxt",parent).val(),
					store:$("#container").attr("store")
				};
		}
		$.ajax({
			type: 'POST',
			url:target,
			data:data,
			success:function(data){
			}
		});
	})
});