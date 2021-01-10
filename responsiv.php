<html>
<head>
	<title>Responsive Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
	<div class="mobile-menu" id="mobile-menu"> 
		Menu <img src="http://www.shoredreams.net/wp-content/uploads/2014/02/show-menu-icon.png">
	</div>
	<nav>
		<ul>

			<li><b>Contact us</b></li>
	        <a href="booking3.html"><li><b>Services</b></li></a>
	 
	        <a href="Aboutus.html"><li><b>About us</b></li></a>
	        <li><b>Home</b></li>
	        <a href="login.html"><li><b>Login</b></li></a>
	    </ul>
	
			
	</nav>
	<script type="text/javascript">
	$(function() {
        var pull = $('#mobile-menu');
        menu = $('nav ul');
        menuHeight = menu.height();
        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
	</script>
</body>
</html>