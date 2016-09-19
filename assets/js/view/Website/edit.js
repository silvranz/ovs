$(document).ready(function() {
	if(activeMenu==""){
		$("#generalsetting").addClass("active");
	}
	else{
		$("#"+activeMenu).addClass("active");
	}
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
				location.href=basePage+"generalsetting";
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
				location.href=basePage+"generalsetting";
            }
        });
	})
	$("#addNewAbout").click(function(){
		$("#aboutUsModal #titleTxt").val("");
		$("#aboutUsModal #contentTxt").val("");
	});
	$(".editAbout").click(function(){
		var parent =$(this).closest(".aboutus-item");
		$("#aboutUsModal #titleTxt").val($(".titleAbout",parent).text());
		$("#aboutUsModal #contentTxt").val($(".descAbout",parent).text());
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
				alert("About us deleted");
				location.href=basePage+"aboutus";
			}
		});
	})
	$(".editProduct").click(function(){
		$("#newProduct").click();
		$("#formProduct").attr("edit",$(this).closest("tr").attr("dataTag"));
	})
	$("#newProduct").click(function(){
		$("#addProductModal #name").val("");
		$("#addProductModal #desc").val("");
		$("#addProductModal #productImage").val("");
	});
	$(".delProduct").click(function(){
		$.ajax({
			type: 'POST',
			url:serviceUri+"website/delProduct",
			data:{
				store:$("#container").attr("store"),
				product:$(this).closest("tr").attr("dataTag")
			},
			success:function(data){
				alert("Product deleted");
				location.href=basePage+"product";
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
		}
		else{
			target = serviceUri+"website/addProduct";
		}
		formData.append("categoryName",$("#cat option:selected",parent).text());
		formData.append("fileName",$("#productImage").val());
        $.ajax({
            url : target,
            type : 'POST',
            data : formData,
            cache : false,
            contentType : false,
            processData : false,
			popup:this,
            success : function(data) {
				if(data!=""){
					$("#productError").text(data);
				}
				else{
					$(this.popup).removeAttr("edit");
					location.href=basePage+"product";
				}
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
			popup:this,
			success:function(data){
				console.log(data);
				if(data!=""){
					$("#aboutUsError").text(data);
				}
				else{
					$(this.popup).removeAttr("edit");
					location.href=basePage+"aboutus";
				}
			}
		});
	})
});