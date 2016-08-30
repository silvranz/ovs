$(document).ready(function() {
	$("#logoImage").change(function(e){
		$(this).closest("form").submit();
	})
	$("#formLogo").submit(function(e){
		e.preventDefault();
		var formData = new FormData(e.target);
        $.ajax({
            url : serviceUri+"website/updateLogo",
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
	$("#logoBtn").click(function(e){
		$(this).parent("label").click();
	})
	$("#bannerImage").change(function(e){
		$(this).closest("form").submit();
	})
	$("#bannerBtn").click(function(e){
		$(this).parent("label").click();
	})
	$("#formBanner").submit(function(e){
		e.preventDefault();
		var formData = new FormData(e.target);
        $.ajax({
            url : serviceUri+"website/updateBanner",
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
	$(".editAbout").click(function(){
		var parent =$(this).closest(".aboutus-item");
		$("#aboutUsModal #titleTxt").val($(".titleAbout",parent).text());
		$("#aboutUsModal #contentTxt").val($(".descAbout",parent).text());
		console.log($(".descAbout",parent).text());
		$("#addNewAbout").click();
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
		$("#formProduct").attr("edit",$(this).closest("tr").attr("dataTag"));
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
		$("#formProduct").submit();
	})
	$("#formProduct").submit(function(e){
		e.preventDefault();
		var parent = $(this).closest(".modal-content");
		var target = "";
		var formData = new FormData(e.target);
		if($(this)[0].hasAttribute("edit")){
			target = serviceUri+"website/editProduct";
			formData.append("prodId",$(this).attr("edit"));
			$(this).removeAttr("edit");
		}
		else{
			target = serviceUri+"website/addProduct";
		}
		formData.append("categoryName",$("#cat option:selected",parent).text());
        $.ajax({
            url : target,
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