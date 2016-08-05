$(document).ready(function() {
	$("#sortingOption").change(function(){
		updateParam();
	})
	$(".subCategory").click(function(e){
		e.preventDefault();
		var currDOM = $(this).next();
		while(currDOM.length>0&&!currDOM.hasClass("subCategory")){
			currDOM.addClass("list-group-item-warning");
			currDOM = currDOM.next();
		}
		updateParam();
	})
	$(".categoryFilter").click(function(e){
		e.preventDefault();
		if($(this).hasClass("list-group-item-warning")){
			$(this).removeClass("list-group-item-warning");
		}
		else{
			$(this).addClass("list-group-item-warning");
		}
		updateParam();
	})
	loadTemplate();
});
function updateParam(){
	var listCategory = "";
	$("#listCategoryContainer .list-group-item-warning").each(function(){
		listCategory += $(this).closest(".categoryFilter").attr("id")+",";
	})
	loadTemplate(listCategory.slice(0,-1),$("#sortingOption").val());
}

function loadTemplate(listCategory,mode){
	listCategory = (typeof listCategory == "undefined")?"":listCategory;
	mode = (typeof mode == "undefined")?0:mode;
	$("#templateContainer").scrolling({
		url:serviceUri+"template/getTemplate",
		requestData:{
			categoryId:listCategory.slice(0,-1),
			mode:mode
		},
		startButton:$("#startLoad"),
		itemPerLoad:2,
		callback:function(data){
			var ajaxObj = this;
			for(var i=0;i<data.length;i++){
				var newTemplate = $("#templateItem").clone().removeAttr("id").removeClass("hide").data("templateId",data[i].TemplateID);
				var rate = data[i].TemplateRating==null?'0':Math.round(data[i].TemplateRating * 10) / 10;
				$(".template-title",newTemplate).text(data[i].TemplateTitle);
				if(data[i].FlagUse!=1){
					$(".rating-input",newTemplate).attr("data-readonly",true);
				}
				$(".rating-input",newTemplate).rating('rate',rate ).on('change', function () {
					$.ajax({
						url:serviceUri+"template/rateTemplate",
						data:{
							template:$(this).closest(".itemPanel").data("templateId"),
							rate:$(this).val()
						},
						type:"POST",
						dataType:"JSON",
						success:updateParam
					})
				});
				$(".total-use",newTemplate).text(data[i].NumberOfUser);
				$(".total-rating",newTemplate).text(rate);
				$(".screen-shot",newTemplate).attr("src",serviceUri+"assets/images/screen-shot/"+data[i].TemplateImage);
				$(".useButton",newTemplate).click(function(){
					console.log($(this).closest(".itemPanel"));
					location.href=serviceUri+"template/form-fillment?key="+$(this).closest(".itemPanel").data("templateId");
				});
				$("#templateContainer").append(newTemplate)
			}
		}
	})
}