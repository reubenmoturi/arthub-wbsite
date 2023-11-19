<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./contactus.css">
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
    <main>
    <hr>
    <section id="contact">
        <h2>Send us a message</h2>

        <br>
        <br>
        
        <form class="" action="send.php" method="post">

            <label for="email">Email:</label>
            <input type="email" name="email" value="" required>

            <label for="Subject">Subject:</label>
            <input type="text" name="subject" value="" required>

            <label for="message">Message:</label>
            <textarea type="text" name="message" value="" required></textarea>

            <button type="submit">Send</button>
        </form>
        <p>Have any questions or need assistances? we are here for help!</p>
        <p>Contact us through the following methods:</p>
        <ul>
            <li><strong>Phone:</strong> (+254) 792565487</li>
            <li><strong>Email:</strong> (reubenmoturim@gmail.com)</li>
            <li><strong>Visit Us:</strong> 320 Matunda, Kona Mbaya, 
                (kitale-eldoret road), Kenya</li>
        </ul>
        <p>Feel free to reach out with any inquiries or feedback.</p>
    </section>
</main>
    <footer>
        <?php
        echo "&copy;" .date("D:M:Y");
        ?><br> REUBEN MOTURI   <br> COM/M/0047/2021</footer>
</body>
</html>