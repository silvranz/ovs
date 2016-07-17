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
	},
	"button-primary":{
		tag:"button",
		textColor:"white",
		attr:{
			"stroke":"#33C3F0",
			"stroke-width":"5",
			"stroke-linejoin":"bevel",
			"fill":"#33C3F0"
		}
	},
	"button-danger":{
		tag:"button",
		textColor:"white",
		attr:{
			"stroke":"#C9302C",
			"stroke-width":"5",
			"stroke-linejoin":"bevel",
			"fill":"#C9302C"
		}
	},
	"button-success":{
		tag:"button",
		textColor:"white",
		attr:{
			"stroke":"#5CB85C",
			"stroke-width":"5",
			"stroke-linejoin":"bevel",
			"fill":"#5CB85C"
		}
	},
	"textbox":{		
		tag:"textbox",
		textColor:"black",
		attr:{
			"stroke":"#D1D1D1",
			"stroke-width":"1",
			"stroke-linejoin":"bevel",
			"fill":"#FFFFFF"
		}
	},
	"radio":{		
		tag:"radio",
		textColor:"black",
		attr:{
			"stroke":"#D1D1D1",
			"stroke-width":"1",
			"stroke-linejoin":"bevel",
			"fill":"#FFFFFF"
		}
	},
	"checkbox":{		
		tag:"checkbox",
		textColor:"black",
		attr:{
			"stroke":"#D1D1D1",
			"stroke-width":"1",
			"stroke-linejoin":"bevel",
			"fill":"#FFFFFF"
		}
	},
	"container":{		
		tag:"container",
		attr:{
			"stroke":"#000000",
			"stroke-width":"1",
			"fill":"#FFFFFF"
		}
	}
};
var mappingDraw = {
	"text":drawText,
	"button":drawButton,
	"radio":drawRadio,
	"checkbox":drawCheckbox,
	"container":drawContainer,
	"textbox":drawTextBox
};
var svg,svgNS;
var bBoxPadding = 5;
var defaultWidth = 100;
var defaultHeight = 30;
function drawContainer(shape){	
	var group = document.createElementNS(svgNS,'g');
	var rect = document.createElementNS(svgNS,'rect');
	group.setAttribute('transform',"translate("+parseInt(window.scrollX + window.innerWidth/2)+","+parseInt(window.scrollY + window.innerHeight/2)+")");
	rect.setAttribute('x',0);
	rect.setAttribute('y',0);
	rect.setAttribute("class","frame");
	rect.setAttribute("width",defaultWidth*4);
	rect.setAttribute("height",defaultHeight*4);
	for(key in shape.style){
		rect.style[key] = shape.style[key];
	}
	for(key in shape.attr){
		rect.setAttribute(key,shape.attr[key]);
	}
	group.appendChild(rect);
	svg.appendChild(group);
	return group;
}
function drawCheckbox(shape){	
	var group = document.createElementNS(svgNS,'g');
	var rect = document.createElementNS(svgNS,'rect');
	var text = document.createElementNS(svgNS,'text');
	group.setAttribute('transform',"translate("+parseInt(window.scrollX + window.innerWidth/2)+","+parseInt(window.scrollY + window.innerHeight/2)+")");
	rect.setAttribute('x',0);
	rect.setAttribute('y',0);
	rect.setAttribute("class","frame");
	rect.setAttribute("width",defaultWidth/8);
	rect.setAttribute("height",defaultHeight/2);
	for(key in shape.style){
		rect.style[key] = shape.style[key];
	}
	for(key in shape.attr){
		rect.setAttribute(key,shape.attr[key]);
	}
	var tspan = document.createElementNS(svgNS,'tspan');
	tspan.textContent = "Hello";
	text.appendChild(tspan);
	group.appendChild(rect);
	group.appendChild(text);
	svg.appendChild(group);
	var bbox = rect.getBBox();
	text.setAttribute('x',bbox.x+bbox.width+bBoxPadding);
	text.setAttribute('y',bbox.y+bbox.height-bBoxPadding);
	return group;
}
function drawRadio(shape){	
	var group = document.createElementNS(svgNS,'g');
	var circle = document.createElementNS(svgNS,'circle');
	var text = document.createElementNS(svgNS,'text');
	group.setAttribute('transform',"translate("+parseInt(window.scrollX + window.innerWidth/2)+","+parseInt(window.scrollY + window.innerHeight/2)+")");
	circle.setAttribute('cx',0);
	circle.setAttribute('cy',0);
	circle.setAttribute("class","frame");
	circle.setAttribute("r",defaultHeight/4);
	for(key in shape.style){
		circle.style[key] = shape.style[key];
	}
	for(key in shape.attr){
		circle.setAttribute(key,shape.attr[key]);
	}
	var tspan = document.createElementNS(svgNS,'tspan');
	tspan.textContent = "Hello";
	text.appendChild(tspan);
	group.appendChild(circle);
	group.appendChild(text);
	svg.appendChild(group);
	var bbox = circle.getBBox();
	text.setAttribute('x',bbox.x+bbox.width+bBoxPadding);
	text.setAttribute('y',bbox.y+bbox.height-bBoxPadding);
	return group;
}
function drawTextBox(shape){	
	var group = document.createElementNS(svgNS,'g');
	var rect = document.createElementNS(svgNS,'rect');
	var line = document.createElementNS(svgNS,'line');
	group.setAttribute('transform',"translate("+parseInt(window.scrollX + window.innerWidth/2)+","+parseInt(window.scrollY + window.innerHeight/2)+")");
	rect.setAttribute('x',0);
	rect.setAttribute('y',0);
	line.setAttribute('x1',bBoxPadding);
	line.setAttribute('y1',0.2*defaultHeight);
	line.setAttribute('x2',bBoxPadding);
	line.setAttribute('y2',1.2*defaultHeight);
	line.setAttribute('opacity',0);
	rect.setAttribute("class","frame");
	rect.setAttribute("width",2*defaultWidth);
	rect.setAttribute("height",1.4*defaultHeight);
	for(key in shape.style){
		rect.style[key] = shape.style[key];
	}
	for(key in shape.attr){
		rect.setAttribute(key,shape.attr[key]);
	}
	group.appendChild(rect);
	group.appendChild(line);
	svg.appendChild(group);
	return group;
}
function drawButton(shape){
	var group = document.createElementNS(svgNS,'g');
	var rect = document.createElementNS(svgNS,'rect');
	var text = document.createElementNS(svgNS,'text');
	rect.setAttribute('x',0);
	rect.setAttribute('y',0);
	rect.setAttribute("class","frame");
	group.setAttribute('transform',"translate("+parseInt(window.scrollX + window.innerWidth/2)+","+parseInt(window.scrollY + window.innerHeight/2)+")");
	rect.setAttribute("width",defaultWidth);
	rect.setAttribute("height",defaultHeight);
	for(key in shape.style){
		rect.style[key] = shape.style[key];
	}
	for(key in shape.attr){
		rect.setAttribute(key,shape.attr[key]);
	}
	var tspan = document.createElementNS(svgNS,'tspan');
	tspan.textContent = "Hello";
	text.appendChild(tspan);
	group.appendChild(rect);
	group.appendChild(text);
	svg.appendChild(group);
	text.setAttribute('fill',shape.textColor);
	text.setAttribute('text-anchor','middle');
	text.setAttribute('stroke','none');
	text.setAttribute('x',defaultWidth/2);
	text.setAttribute('y',(defaultHeight+text.getBBox().height/2)/2);
	return group;
}
function drawText(shape){
	var group = document.createElementNS(svgNS,'g');
	var text = document.createElementNS(svgNS,'text');
	group.setAttribute('transform',"translate("+parseInt(window.scrollX + window.innerWidth/2)+","+parseInt(window.scrollY + window.innerHeight/2)+")");
	for(key in shape.style){
		text.style[key] = shape.style[key];
	}
	var tspan = document.createElementNS(svgNS,'tspan');
	tspan.textContent = "Hello";
	text.appendChild(tspan);
	group.appendChild(text);
	svg.appendChild(group);
	text.setAttribute('x',0);
	text.setAttribute('y',text.getBBox().height/16);
	return group;
}
function loadShape(shape){
	var newShape = mappingDraw[shape.tag](shape);
	$(newShape)
	.attr({
		"id":newShape.tagName+$(newShape.tagName).length,
		"stroke":"#000",
		"fill":"#000"
	})
	.hover(function(){
		var newBBox = this.getBBox();
		$("#boudingBoxHover").attr("x",newBBox.x-bBoxPadding);
		$("#boudingBoxHover").attr("y",newBBox.y-bBoxPadding);
		$("#boudingBoxHover").attr("width",newBBox.width+2*bBoxPadding);
		$("#boudingBoxHover").attr("height",newBBox.height+2*bBoxPadding);
		$("#boudingBoxHover").attr("transform",this.getAttribute("transform"));
		$("#boudingBoxHover").show();
	},function(){
		$("#boudingBoxHover").hide();
	}).css({
		"cursor":"move"
	})
	.contextmenu(function(e){
		e.preventDefault();
	})
	.mousedown(function(e){
		e.stopPropagation();
		e.preventDefault();
		var bBox = this.getBBox();
		var tMatrix = this.getCTM();
		switch (e.which) {
			case 1:
					$(this).closest("svg").data("dragged",$(this).attr("id"));
					$(this).closest("svg").data("divx",e.pageX - (tMatrix.e));
					$(this).closest("svg").data("divy",e.pageY - (tMatrix.f));
				break;
			case 2:
				alert('Middle Mouse button pressed.');
				break;
			case 3:
					$(".contextmenu").data("selectedElement",$(this).attr("id")).css({
						"top":parseInt(bBox.y+tMatrix.f)+"px",
						"left":parseInt(bBox.x+bBox.width+3*bBoxPadding+tMatrix.e)+"px"
					}).show();
				break;
			default:
				alert('You have a strange Mouse!');
		}
	})
}
$(document).ready(function(){
	svg = $("#editor-container")[0];
	svgNS = svg.namespaceURI;
	$("body").mousedown(function(e){
		if(!(e.target == $(".contextmenu")[0]||$(".contextmenu").find(e.target).length>0)){
			$(".contextmenu").hide();
			if(!(e.target == $(".edit-param-element")[0]||$(".edit-param-element").find(e.target).length>0)){
				$(".edit-param-element").hide();
			}
		}
	})
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
		pageJSON[pageIndex]["background-color"] = $(this).css("background-color");
	})
	$("form").submit(function(e){
		e.preventDefault();
	})
	$("#page-background-content #txtHexColor").val("#FFFFFF");
	$("#page-background-content #btnSetBackgroundColor").click(function(e){
		$("#editor-container").css("background-color",$("#page-background-content #txtHexColor").val());
		pageJSON[pageIndex]["background-color"] = $("#page-background-content #txtHexColor").val();
	})
	$(".draggable-element").click(function(e){
		e.preventDefault();
		loadShape(mappingShape[$(this).attr("map")]);
		return;
	})
	$(svg)
	.mousemove(function(e){
		var draggedElement = $(this).data("dragged");
		if(draggedElement){
			$("#boudingBoxHover").hide();
			$("#"+draggedElement)
			.attr("transform","translate("+(e.pageX-$(this).data("divx"))+","+(e.pageY-$(this).data("divy"))+")");
		}
	})	
	.mouseup(function(e){
		$(this).data("dragged",false);
	});
	$(".contextmenu li").click(function(){
		var parent = $(".contextmenu")[0];
		var el = $("#"+$(parent).data("selectedElement"))[0];
		switch($(this).attr("type")){
			case "properties":
				$(".edit-param-element .title").text("Properties");
				$(".edit-param-element").slideDown("fast");
			break;
			case "events":
			break;
		}
	})
	$(".edit-param-element .param").change(function(){
		$("#"+$(".contextmenu").data("selectedElement")+" .frame").removeAttr($(this).attr("attribute"));
		$("#"+$(".contextmenu").data("selectedElement")).attr($(this).attr("attribute"),$(this).val());
	})
	$(".edit-param-element .param-style").change(function(){
		$("#"+$(".contextmenu").data("selectedElement")).css($(this).attr("attribute"),$(this).val());
	})
	$(".edit-param-element #element-text").change(function(){
		var text = $("#"+$(".contextmenu").data("selectedElement"))[0];
		if(text.tagName != "text")
			text = $("#"+$(".contextmenu").data("selectedElement")).find("text")[0];
		var maxWidth = text.getBBox().width;
		var s = $(this).val();
		$(text).empty();
		var tspan = document.createElementNS(svgNS,'tspan');
		tspan.textContent = s;
		text.appendChild(tspan);
	})
})