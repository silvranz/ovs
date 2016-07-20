$(document).ready(function() {
	loadTemplate();
});

function loadTemplate(listCategory,mode){
	listCategory = (typeof listCategory == "undefined")?[]:listCategory;
	mode = (typeof mode == "undefined")?0:mode;
	$.ajax({
		url:serviceUri+"template/getTemplate",
		data:{
			categoryId:listCategory,
			mode:mode
		},
		dataType:"json",
		success:function(data){
			//TemplateID: "3", TemplateTitle: "Casual Much", TemplateImage: "asd.jpg", TemplateSubCategoryID: "1", TemplateCategoryID: "1", CreatedDate: "2016-07-20 16:23:49", TemplateRating: null, NumberOfUser: "0"
			for(var i=0;i<data.length;i++){
				var newTemplate = $("#templateItem").clone().removeClass("hide").data("templateId",data[i].TemplateID);
				$(".template-title",newTemplate).text(data[i].TemplateTitle);
				$(".total-use",newTemplate).text(data[i].NumberOfUser);
				console.log(data[i].TemplateRating==null);
				$(".total-rating",newTemplate).text(data[i].TemplateRating==null?'0':Math.round(data[i].TemplateRating * 10) / 10);
				$(".screen-shot",newTemplate).attr("src",serviceUri+"assets/images/screen-shot/"+data[i].TemplateImage);
				$("#templateContainer").append(newTemplate)
			}
		}
	})
}