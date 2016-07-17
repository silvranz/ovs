<script>
	var pageJSON = [];
	var pageIndex = 0;
	function loadJSON(json){
		
	}
	function changePage(index){
		var json = pageJSON[index];
		pageIndex = index;
		loadJSON(json);
	}
	function newPageJSON(item,newPage){
		if(newPage){
			pageJSON.push(newPage);
		}
		else{
			pageJSON.push({
				"background-color":"#FFFFFF",
				"background-image":"none",
				"pageName":"Page "+(pageJSON.length+1)
			});
		}
		pageIndex = pageJSON.length-1;
		$(".page-name",item).val(pageJSON[pageIndex].pageName);
		$("#currentPageName").text(pageJSON[pageIndex].pageName);
		$(item).attr("index",pageIndex);
	}
	function newPageDOM(){		
		var parent = $(".box-list-page").find("ul");
		var newPage = $("#item-template",parent).clone().show().removeAttr("id");
		$(".btnTriggerDeletePageModal",newPage).click(function(e){
			e.preventDefault();
			var index = $(this).closest(".page-item").attr("index");
			$(this).closest(".page-item").remove();
			pageJSON.splice(index,1);
			if(index == pageIndex){
				changePage(index-1);
			}
		})
		$(".btnDuplicatePage",newPage).click(function(e){
			e.preventDefault();
			var parent = $(this).closest(".page-item");
			var index = parent.attr("index");
			var duplicatePage = parent.clone();
			$(".switch-input.switch-homepage",parent).click();
			$(".box-list-page").find("ul").append(duplicatePage);
			newPageJSON(duplicatePage,pageJSON[index]);
			changePage(index);
		})
		$(parent).append(newPage);
		return newPage;
	}
	$(document).ready(function(){
		$("#btnOpenBoxPage").click(function(e){
			e.preventDefault();
			$(".box-page").slideToggle(0);
		})
		$(".box-list-page").on("click",".switch-input.switch-homepage",function(e){
			$(".switch-input.switch-homepage").prop("checked",false);
			$(this).prop("checked",true);
		})
		$("#btnOpenModalAddPage").click(function(e){
			e.preventDefault();
			newPageJSON(newPageDOM());
		});
		$("#btnOpenModalAddPage").click();
		$(".switch-input.switch-homepage:last").click();
	})
</script>