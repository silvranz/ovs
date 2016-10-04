$(document).ready(function() {
	$('#aboutUsModal').on('hidden.bs.modal', function () {
		$("#customAboutUs").removeAttr("edit");
	})
	$('#addProductModal').on('hidden.bs.modal', function () {
		$("#formProduct").removeAttr("edit");
	})
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
		if($("#customAboutUs")[0].hasAttribute("edit")){
			$("#aboutUsModalLabel").text("Edit About Us");
		}
		else{
			$("#aboutUsModalLabel").text("Add About Us");
			$("#aboutUsModal #titleTxt").val("");
			$("#aboutUsModal #contentTxt").val("");
		}
	});
	$(".editAbout").click(function(){
		var parent =$(this).closest(".aboutus-item");
		$("#aboutUsModal #titleTxt").val($(".titleAbout",parent).text());
		$("#aboutUsModal #contentTxt").val($(".descAbout",parent).text());
		$("#customAboutUs").attr("edit",$(this).closest(".aboutus-item").attr("dataTag"));
		$("#addNewAbout").click();
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
		var parent = $(this).closest("tr");
		$("#formProduct").attr("edit",parent.attr("dataTag"));
		$("#addProductModal #name").val($(".name",parent).text());
		$("#addProductModal #desc").val($(".desc",parent).text());
		$("#addProductModal #cat option:contains('"+$(".cat",parent).text()+"')").prop("selected",true);
		$("#newProduct").click();
	})
	$("#newProduct").click(function(){
		if($("#formProduct")[0].hasAttribute("edit")){
			$("#addProductModalLabel").text("Edit Product");
		}
		else{
			$("#addProductModalLabel").text("Add Product");
			$("#addProductModal #name").val("");
			$("#addProductModal #desc").val("");
		}
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
		$(".errorValidation").text("");
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
		if($("#newCategory").val()==""){
			formData.append("categoryName",$("#cat option:selected",parent).text());
		}
		else{
			formData.append("categoryName",$("#newCategory").val());
			formData.set("cat", -1);
		}
		formData.append("fileName",$("#productImage").val());
        $.ajax({
            url : target,
            type : 'POST',
            data : formData,
            cache : false,
            contentType : false,
            processData : false,
			popup:this,
			dataType:"json",
            success : function(data) {
				if(data.msg!=""){
					$("#"+data.type+"Error").text(data.msg);
				}
				else{
					location.href=basePage+"product";
				}
            }
        });
	})
	$("#customAboutUs").click(function(){
		$(".errorValidation").text("");
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
			dataType:"json",
			success:function(data){
				if(data.msg!=""){
					$("#"+data.type+"Error").text(data.msg);
				}
				else{
					location.href=basePage+"aboutus";
				}
			}
		});
	})
});