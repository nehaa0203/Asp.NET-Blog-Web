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
    <style type="text/css">

      /*--------------------------------------------------Car Types-----------------------------------------------*/

      section .b_types
      {
        width: 100%
        height: 100vh;
      }

      .b_types h1
      {
        margin-top: 40px;
        text-align: center;
      }

      .blog__container {
        row-gap: 2rem;
        display: inline-block;
      }

      .blog_types 
      {
        margin-top: 50px;
          box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);
          border-radius: .5rem;
          overflow: hidden;
          float: left;
          width: 300px;
          padding: 5px;
          margin-left: 150px;
      }

      .blog_types img 
      {
        width: 300px;
          transition: 1s;
          border-radius: 10px;
      }

      .blog_types img:hover 
      {
          transform: scale(1.1);
      }

      .blog_types h3
      {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 30px;
      }

    </style>
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
                    <li><a href="#blog">BLOG TYPES</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                    <li><button type="button"><a class="nav-link active" aria-current="page" href="logout.php">LOGOUT</a></button></li> 
                </ul>
            </div>  
        </nav>
        </header>
    </section>


    <!------------------------------------------------------About---------------------------------------------->


    <section class="abt" id="about" style= "width:100%;height:100vh;">
        <h1 style="padding-top: 50px; text-align: center; margin-top: 50px;">ABOUT US</h1>
        <div class="about_details">
            <div>
                <img src="about.jpg" alt="about" style="display: block; margin-top: 40px;margin-left: auto;margin-right: auto; width: 350px; border-radius: .5rem;transition: 1s;">
            </div>
            <div>
                <p style="text-align: center;
                          margin-top: 40px;
                          width: 500px;
                          display: block;
                          margin-left: auto;
                          margin-right: auto;
                          font-size: 20px;
                          margin-bottom: 30px"> 
                A blogging website is a dynamic online platform where individuals, known as bloggers, share their thoughts, expertise, and experiences with a broader audience. It serves as a digital space where content is regularly updated, creating a chronological collection of posts that cover various topics. Blogging websites often have a specific niche or theme, ranging from personal reflections, travel, lifestyle, fashion, technology, to professional advice and more.
                These platforms typically feature a user-friendly interface, allowing bloggers to publish text, images, and multimedia content. Readers can engage with the content by leaving comments, sharing posts on social media, and subscribing for regular updates. The essence of a blogging website lies in its conversational and informal tone, fostering a sense of community and interaction between the blogger and their audience.
                </p>
            </div>
        </div>
    </section>


    <!------------------------------------------------------blog Types---------------------------------------------->

    <section class="b_types" id="blog">
        <h1 style="padding-top: 50px;">BLOG TYPES</h1>
        <div class="blog__container">
            <div class="blog_types">
                <a style="text-decoration: none; color: black;" href="hist_blog.php">
                    <img src="historical_blogs.png" alt="historical_blog">
                    <h3>HISTORICAL BLOGS</h3>
                </a>
            </div>
            <div class="blog_types">
                <a style="text-decoration: none; color: black;" href="food_blog.php">
                    <img src="food_blog.jpg" alt="food_blog">
                    <h3>FOOD BLOGS</h3>
                </a>
            </div>
            <div class="blog_types">
                <a style="text-decoration: none; color: black;" href="travel_blog.php">
                    <img src="travel_blog.jpg" alt="travel_blog">
                    <h3>TRAVEL BLOGS</h3>
                </a>
            </div>
            <div class="blog_types" style="margin-left: 400px;">
                <a style="text-decoration: none; color: black;" href="tech_blog.php">
                    <img src="tech_blog.jpg" alt="tech_blog">
                    <h3>TECH BLOGS</h3>
                </a>
            </div>
            <div class="blog_types">
                <a style="text-decoration: none; color: black;" href="political_blog.php">
                    <img src="political_blog.jpg" alt="political_blog">
                    <h3>POLITICAL BLOGS</h3>
                </a>
            </div>
        </div>
    </section>

    <!------------------------------------------------------Contact---------------------------------------------->

     <section class="con" id="contact" style="width: 100% height: 100vh;">
        <h1 style="margin-top: 60px; text-align: center;">CONTACT US</h1>
        <div class="con_form">
            <form class="form" method="POST" action="contact.php" style="margin-left: auto;
                                                                         margin-right: auto;
                                                                         display: block;
                                                                         width: 100%;
                                                                         margin-top: 50px;
                                                                         display: flex;
                                                                         flex-direction: column;
                                                                         align-items: center;
                                                                         justify-content: center;
                                                                         width: 400px;">
                <input type="text" placeholder="Name" name="name" required style="width: 100%;
                                                                                  margin-bottom: 20px;
                                                                                  border: none;
                                                                                  border-bottom: 2px solid #30475e;
                                                                                  border-radius: 0;
                                                                                  padding: 1px 0;
                                                                                  font-weight: 550;
                                                                                  font-size: 14px;
                                                                                  outline: 2px solid #30475e;
                                                                                  padding: 8px;
                                                                                  border-radius: 3px;" />
                <input type="email" placeholder="Email" name="email" required style="width: 100%;
                                                                                     margin-bottom: 20px;
                                                                                     border: none;
                                                                                     border-bottom: 2px solid #30475e;
                                                                                     border-radius: 0;
                                                                                     padding: 1px 0;
                                                                                     font-weight: 550;
                                                                                     font-size: 14px;
                                                                                     outline: 2px solid #30475e;
                                                                                     padding: 8px;
                                                                                     border-radius: 3px;" />
                <textarea placeholder="Message" name="message" rows="15" cols="50" required style="width: 100%;
                                                                                    margin-bottom: 20px;
                                                                                    border: none;
                                                                                    border-bottom: 2px solid #30475e;
                                                                                    border-radius: 0;
                                                                                    padding: 1px 0;
                                                                                    font-weight: 550;
                                                                                    font-size: 14px;
                                                                                    outline: 2px solid #30475e;
                                                                                    padding: 8px;
                                                                                    border-radius: 3px;">
                </textarea> 
                <button type="submit" class="con_btn" name="contact" style="font-weight: 550;
                                                                            font-size: 15px;
                                                                            color: white;
                                                                            background-color: #30475e;
                                                                            padding: 4px 10px;
                                                                            border: none;
                                                                            outline: none;
                                                                            margin-top: 5px;
                                                                            border-radius: 3px;">SUBMIT</button>
            </form>
        </div>
        <div class="add" style="margin-top: 70px;
                                text-align: center;
                                background-color: #30475e;
                                padding: 25px;
                                margin-bottom: 2px;
                                color: white;">
            <b>Address: </b><p>1/A Sham Complex, Mira Road </p>
            <i class="fa fa-linkedin" aria-hidden="true" style="margin-top: 20px;
                                                                margin-right: 25px;
                                                                cursor: pointer;"></i>
            <i class="fa fa-instagram" aria-hidden="true" style="margin-top: 20px;
                                                                 margin-right: 25px;
                                                                 cursor: pointer;"></i>
            <i class="fa fa-twitter" aria-hidden="true" style="margin-top: 20px;
                                                               margin-right: 25px;
                                                               cursor: pointer;"></i>
        </div>
</body>
</html>