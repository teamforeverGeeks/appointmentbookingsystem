<html>
<head>
	<title>Responsive Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
	<div class="mobile-menu" id="mobile-menu"> 
		Menu <img src="http://www.shoredreams.net/wp-content/uploads/2014/02/show-menu-icon.png">
	</div>

	
			
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

	<nav>
		<ul>

			<a href="contacts.php"><li><b>Contact us</b></li></a>
	        <a href="services.php"><li><b>Services</b></li></a>
	 
	        <a href="about.php"><li><b>About us</b></li></a>
	        <a href="homepage.php"><li><b>Home</b></li></a>
	        <a href='adminpage.php'><li><b>Admin Page</b></li></a>
	         <?php
	         session_start();   /// this is session and session is helpfull in nevigation system and  //
	        if(isset($_SESSION['f_name']) || isset($_SESSION['f_name']))  /// this fname and Fname is come from database so when user login so they can see their name on home page.
	        {}
	        else{
	        	echo "<a href='signup1.php'><li><b>Sign up</b></li></a>";
	        	echo "<a href='login.php'><li><b>Login</b></li></a>";

	        }
	        ?>
	        
	    </ul>
	    <hr>




	
</body>
</html>