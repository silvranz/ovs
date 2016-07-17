<!DOCTYPE html>
<html>
    <head>
        <title>Ovs - Build Your Awesome Website</title>
		<link rel="stylesheet" href="{{url("css/normalize.css")}}" />
		<link rel="stylesheet" href="{{url("css/skeleton.css")}}" />
		<link rel="stylesheet" href="{{url("css/custom.css")}}" />
		<link rel="stylesheet" href="{{url("css/top-navbar.css")}}" />
		<link rel="stylesheet" href="{{url("css/modal.css")}}" />
		<link rel="stylesheet" href="{{url("css/font.css")}}" />		
		<link rel="shortcut icon" href="{{url("images/ovs.ico")}}">
		<script>
			{{ partial("partial/config-js") }}
		</script>
    </head>
    <body>
		<header>
			{{ partial("partial/header") }}
		</header>
        <div id="content">{{content()}}</div>

		<footer class="bs-docs-footer" role="contentinfo">
			{{ partial("partial/footer") }}
		<footer>
		<div>
			{{ partial("partial/main-modal") }}
		</div>		
		<script type="text/javascript" src="{{url("js/jquery.js")}}"></script>
		<script type="text/javascript" src="{{url("js/main.js")}}"></script>
		<script type="text/javascript" src="{{url("js/skeleton-modal/classie.js")}}"></script>
		<script type="text/javascript" src="{{url("js/skeleton-modal/modalEffects.js")}}"></script>
		<script type="text/javascript" src="{{url("js/functions.js")}}"></script>
    </body>
</html>