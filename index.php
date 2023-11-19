<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ARtHub WEbsite</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
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
    <main>
        <h2>Home Page</h2>

        <!--table content is here-->

        <table>
            <thead>
                <tr>
                    <th>Type of the art</th>
                    <th>Price without Frame </th>
                    <th>Price with Frame</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A2 size protrait</td>
                    <td>Ksh. 1,500</td>
                    <td>Ksh. 4,500</td>
                </tr>
                <tr>
                    <td>A3 size protrait</td>
                    <td>Ksh. 1,000</td>
                    <td>Ksh. 2,500</td>
                </tr>
                <tr>
                    <td>A4 size protraits</td>
                    <td>Ksh. 600</td>
                    <td>Ksh. 1,500</td>
                </tr>
            </tbody>
        </table>

        <!--image-->

        <div>
            <img src="./image/IMG_20230818_135409_492.jpg" alt="">
        </div>
        <h2>Items We Draw</h2>
        <ul type="square">
            <li>Pencils protraits for your picture</li>
            <li>Color Pencils protraits for your picture</li>
            <li>Cartoons protraits for kids</li>
            <li>Wall decorations protraits</li>
        </ul>
        <video controls>
            <source src="./video/Drawing pencils.mp4" type="video/mp4">
            </video>
        </video>
        <hr>
        <br>
        <center>
        <a href="https://www.facebook.com/profile.php?id=100077753770529" target="_blank">
            <i class="fab fa-facebook"></i> Visit us on Facebook Page
        </a>
        </center>
    </main>
    <footer><?php
    // php code
    echo "&copy;" .date("D:M:Y");
    ?>
    <br>
     REUBEN MOTURI   <br> COM/M/0047/2021</footer>
    <br>
    <center><a href="#">BACK TO THE TOP</a></center>
    <br>
</body>
</html>