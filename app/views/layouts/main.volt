<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="{{url("css/normalize.css")}}" />
		<link rel="stylesheet" href="{{url("css/skeleton.css")}}" />
		<link rel="stylesheet" href="{{url("css/custom.css")}}" />
		<link rel="stylesheet" href="{{url("css/top-navbar.css")}}" />
		<link rel="stylesheet" href="{{url("css/modal.css")}}" />		
		<link rel="shortcut icon" href="{{url("images/ovs.ico")}}">
        <title>Ovs - Build Your Own Website</title>
    </head>
    <body>
		<header>
			{{ partial("partial/header") }}
		</header>
        <div id="content">{{content()}}</div>

		<footer class="bs-docs-footer" role="contentinfo">
			{{ partial("partial/footer") }}
		<footer>
    </body>
</html>