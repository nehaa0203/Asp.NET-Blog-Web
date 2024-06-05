<?php 
    require('connection.php');
    require('login_reg.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="profile_pg">
		
		<nav>
            <a href="index.html"><img src='logo.jpg'></a>
            <div class="nav-links_2" id="navLinks">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">PROFILE</a>
                    	<div class="user_profile">
                    		<ul>
                    			<li><a href="#" onclick="#">EDIT PROFILE</a></li>
                    			<li><a href="logout.php">LOGOUT</a></li>
                    		</ul>
                    	</div>
                    </li>
                </ul>
            </div>  
        </nav>

        <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo "<h1 style= 'text-align: center; margin-top: 200px; color:white;'>Hii- $_SESSION[username]</h1>";
            }
        ?>
    	
    </section>
</body>
</html>