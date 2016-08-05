$(document).ready(function() {
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
				$(".domain-name",newWebsite).text(data[i].StoreDomain).attr("href","http://"+data[i].StoreDomain);
				$(".screen-shot",newWebsite).attr("src",serviceUri+"assets/images/screen-shot/"+data[i].StoreImage);
				$("#websiteContainer").append(newWebsite);
				console.log(newWebsite);
			}
		}
	})
});