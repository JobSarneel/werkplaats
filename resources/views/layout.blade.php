<html>
<head>

<title>
Testing...
</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/pure/0.5.0/base-min.css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

</head>

<body>

<div class="pure-g">
    <div class="pure-u-1-5"></div>
    <div class="pure-u-3-5">    
    
	    <div class="pure-menu pure-menu-open pure-menu-horizontal">
	    <ul>
	        <li><a href="/">Home</a></li>
	        <li class="pure-menu-selected"><a href="about">About</a></li>
	        <li><a href="#">Blog</a></li>
	        <li><a href="#">Links</a></li>
	        <li><a href="#">Game</a></li>
	    </ul>
		</div>
	    
	    @yield('content')
	    
	</div>
    <div class="pure-u-1-5"></div>
</div>

</body>

</html>