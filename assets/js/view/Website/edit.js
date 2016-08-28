$(document).ready(function() {
	$(".editAbout").click(function(){
		$("#triggerPopup").click();
		$("#customAboutUs").attr("edit",$(this).closest(".aboutus-item").attr("dataTag"));
	})
	$(".delAbout").click(function(){
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
	$(".editProduct").click(function(){
		$("#newProduct").click();
		$("#customProduct").attr("edit",$(this).closest("tr").attr("dataTag"));
	})
	$(".delProduct").click(function(){
		$.ajax({
			type: 'POST',
			url:serviceUri+"website/delProduct",
			data:{
				store:$("#container").attr("store"),
				product:$(this).closest("tr").attr("dataTag")
			},
			success:function(data){
			}
		});
	})
	$("#customProduct").click(function(){
		var parent = $(this).closest(".modal-content");
		var target = "";
		var data = {};
		if($(this)[0].hasAttribute("edit")){
			target = serviceUri+"website/editProduct";
			data = {
					store:$("#container").attr("store"),
					name:$("#name",parent).val(),
					desc:$("#desc",parent).val(),
					image:$("#desc",parent).val(),
					category:$("#cat",parent).val(),
					categoryName:$("#cat option:selected",parent).text()
				};
			$(this).removeAttr("edit");
		}
		else{
			target = serviceUri+"website/addProduct";
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
	$("#customProduct").click(function(){
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