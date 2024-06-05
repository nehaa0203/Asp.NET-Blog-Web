<?php 
    require('connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Blogger</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <section class="main_pg">
        <header></header>
        <nav>
            <a href="index.html"><img src='Logo_5.gif'></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                    <li><button type="button" onclick="popup('login_popup')">LOGIN</button></li>
                    <li><button type="button" onclick="popup('reg_popup')">REGISTER</button></li>   
                </ul>
            </div>  
        </nav>
        </header>

        <div class="popup-container" id="login_popup">
            <div class="popup">
                <form method="POST" action="login_reg.php">
                    <h2>
                        <span>LOGIN</span>
                        <button type="reset" onclick="popup('login_popup')">X</button>
                    </h2>
                    <input type="text" placeholder="Email or Username" name="email_username" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" class="login_btn" name="login">LOGIN</button>
                </form>
            </div>
        </div>
        <div class="popup-container" id="reg_popup">
            <div class="reg popup">
                <form method="POST" action="login_reg.php">
                    <h2>
                        <span>REGISTER</span>
                        <button type="reset" onclick="popup('reg_popup')">X</button>
                    </h2>
                    <input type="text" placeholder="First Name" name="firstname" required>
                    <input type="text" placeholder="Last Name" name="lastname" required>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" class="reg_btn" name="register">REGISTER</button>
                </form>
            </div>
        </div>
        

        <script type="text/javascript">
            function popup(popup_name)
            {
                get_popup=document.getElementById(popup_name);
                if(get_popup.style.display=="flex")
                {
                    get_popup.style.display="none";
                }
                else
                {
                    get_popup.style.display="flex";
                }
            }
        </script>
    </section>
</body>
</html>