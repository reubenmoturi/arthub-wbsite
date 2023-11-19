<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./blog.css">
    <link rel="icon" href="./image/iconfinder-501-digital-art-digital-art-education-4212913_114978.png">
</head>
<body>
    <header>
        <h1>Welcome to Our ArtHub WEbsite</h1>
    </header>
    <hr>
    <nav>
        <ul>
            <li><a href="index.php">Home Page</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
    </nav>
    <hr>
    <section id="blog">
        <h2>Lastest BLog Post</h2>
        <article>
            <h3>The Importance of Proper Art Drawn Picture</h3>
            <p>Drawn picture have a clear view of memories
               of a person, He or she can keep the feeling
               of its realness on it.</p>
               <p>Read more at our facebook Page  <a href="https://www.facebook.com/profile.php?id=100077753770529" target="_blank">
                <i class="fab fa-facebook"></i> Click Here For More INfo.
            </a></p>
        </article>
    </section>
    <footer>
        <?php
        echo "&copy;" .date("D:M:Y");
        ?>
        <br> &copy; REUBEN MOTURI   <br> COM/M/0047/2021</footer>
</body>
</html>