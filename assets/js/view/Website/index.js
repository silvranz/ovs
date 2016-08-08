$(document).ready(function() {
	$("#createWebsite").click(function(){
		location.href=serviceUri+"template/find";
	})
	$("#websiteContainer").scrolling({
		url:serviceUri+"website/getWebsite",
		startButton:$("#startLoad"),
		itemPerLoad:2,
		callback:function(data){
			var ajaxObj = this;
			for(var i=0;i<data.length;i++){
				var newWebsite = $("#templateItem").clone().removeAttr("id").removeClass("hide").data("templateId",data[i].TemplateID);
				$(".website-title",newWebsite).text(data[i].StoreName);
				$(".created-date",newWebsite).text(data[i].CreatedDate);
				$(".domain-name",newWebsite).text(data[i].StoreDomain).attr("href","http://localhost/"+data[i].StoreDomain);
				$(".screen-shot",newWebsite).attr("src",serviceUri+"assets/images/screen-shot/"+data[i].StoreImage);
				$(".previewButton",newWebsite).click(function(e){
					e.preventDefault();
					$(".domain-name",$(this).closest(".itemPanel"))[0].click();
				});
				$(".editButton",newWebsite).click(function(e){
					e.preventDefault();
					location.href=serviceUri+"website/edit";
				});
				$("#websiteContainer").append(newWebsite);
			}
		}
	})
});