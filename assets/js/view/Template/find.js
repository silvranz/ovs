$(document).ready(function() {
	$(".sortFilter").click(function(){
		$(".btn-danger").not(this).removeClass("btn-danger").addClass("btn-default");
		if($(this).hasClass("btn-danger")){
			$(this).removeClass("btn-danger").addClass("btn-default");
		}
		else{
			$(this).removeClass("btn-default").addClass("btn-danger");
		}
	})
	$(".categoryFilter").click(function(e){
		e.preventDefault();
		if($("kbd",this).length==0){
			$("li",this).wrapInner("<kbd>");
		}
		else{
			$("kbd",this).contents().unwrap();
		}
	})
	$(".filterOption").click(function(){
		var listCategory = "";
		$("#listCategoryContainer kbd").each(function(){
			listCategory += $(this).closest(".categoryFilter").attr("id")+",";
		})
		loadTemplate(listCategory.slice(0,-1),$(".sortFilter.btn-danger").attr("data-mode"));
	})
	loadTemplate();
});

function loadTemplate(listCategory,mode){
	listCategory = (typeof listCategory == "undefined")?"":listCategory;
	mode = (typeof mode == "undefined")?0:mode;
	console.log({
			categoryId:listCategory,
			mode:mode
		});
	$.ajax({
		url:serviceUri+"template/getTemplate",
		type:"POST",
		data:{
			categoryId:listCategory,
			mode:mode
		},
		dataType:"json",
		success:function(data){
			$("#templateContainer>div:not(#templateItem)").remove();
			//TemplateID: "3", TemplateTitle: "Casual Much", TemplateImage: "asd.jpg", TemplateSubCategoryID: "1", TemplateCategoryID: "1", CreatedDate: "2016-07-20 16:23:49", TemplateRating: null, NumberOfUser: "0"
			for(var i=0;i<data.length;i++){
				var newTemplate = $("#templateItem").clone().removeAttr("id").removeClass("hide").data("templateId",data[i].TemplateID);
				$(".template-title",newTemplate).text(data[i].TemplateTitle);
				$(".total-use",newTemplate).text(data[i].NumberOfUser);
				$(".total-rating",newTemplate).text(data[i].TemplateRating==null?'0':Math.round(data[i].TemplateRating * 10) / 10);
				$(".screen-shot",newTemplate).attr("src",serviceUri+"assets/images/screen-shot/"+data[i].TemplateImage);
				$("#templateContainer").append(newTemplate)
			}
		}
	})
}