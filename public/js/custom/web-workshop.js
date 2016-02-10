var mappingShape = {
	"h1":{
		tag:"text",
		style:{
			"font-size":"34px"
		}
	},
	"h2":{
		tag:"text",
		style:{
			"font-size":"30px"
		}
	},
	"h4":{
		tag:"text",
		style:{
			"font-size":"28px"
		}
	},
	"h6":{
		tag:"text",
		style:{
			"font-size":"20px"
		}
	},
	"p":{
		tag:"text"
	}
};
var mappingDraw = {
	"text":drawText
};
var svg,svgNS;
var bBoxPadding = 5;
function drawText(shape){
	var text = document.createElementNS(svgNS,'text');
	text.setAttribute('x',parseInt(window.scrollX + window.innerWidth/2));
	text.setAttribute('y',parseInt(window.scrollY + window.innerHeight/2));
	text.setAttribute('text-anchor','middle');
	for(key in shape.style){
		text.style[key] = shape.style[key];
	}
	var tspan = document.createElementNS(svgNS,'tspan');
	tspan.textContent = "Hello";
	text.appendChild(tspan);
	svg.appendChild(text);
	return text;
}
function loadShape(shape){
	var newShape = mappingDraw[shape.tag](shape);
	$(newShape)
	.hover(function(){
		var newBBox = this.getBBox();
		$("#boudingBoxHover").show();
		$("#boudingBoxHover").attr("x",newBBox.x-bBoxPadding);
		$("#boudingBoxHover").attr("y",newBBox.y-bBoxPadding);
		$("#boudingBoxHover").attr("width",newBBox.width+2*bBoxPadding);
		$("#boudingBoxHover").attr("height",newBBox.height+2*bBoxPadding);
		$("#boudingBoxHover").show();
	},function(){
		$("#boudingBoxHover").hide();
	}).css({
		"cursor":"move"
	})
	.mousedown(function(e){
		$(this).data("isDrag",true);
		$(this).data("divX",$(this).attr("x"));
		$(this).data("divY",true);
	})
	.mousemove(function(e){
		if($(this).data("isDrag")){
			var parentOffset = $(this).parent().offset(); 
			$(this).attr("x", e.pageX - parentOffset.x);
			$(this).attr("y", e.pageY - parentOffset.y);
		}
	})
	.mouseup(function(e){
		$(this).data("isDrag",false);
	});
}
$(document).ready(function(){
	svg = $("#editor-container")[0];
	svgNS = svg.namespaceURI;
	$(".left-control-list").click(function(e){
		$(".left-content[id!="+$(this).attr("trigger-content-id")+"]").hide();
		$("#"+$(this).attr("trigger-content-id")).slideToggle(0);
	})
	$("#add-content .category-list li").click(function(e){
		var parent = $("#add-content");
		$(".category-content[id!="+$(this).attr("trigger-panel-id")+"]",parent).hide();
		$("#"+$(this).attr("trigger-panel-id"),parent).show();
	})
	$("#page-background-content .bg-items").click(function(e){
		$("#editor-container").css("background-color",$(this).css("background-color"));
	})
	$("form").submit(function(e){
		e.preventDefault();
	})
	$("#page-background-content form").submit(function(e){
		$("#editor-container").css("background-color","#"+$("#page-background-content #txtHexColor").val());
	})
	$("#page-background-content #btnSetBackgroundColor").click(function(e){
		$("#editor-container").css("background-color","#"+$("#page-background-content #txtHexColor").val());
	})
	$(".draggable-element").click(function(e){
		loadShape(mappingShape[$(this).attr("map")]);
	})
})