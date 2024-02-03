<?php

session_start();

if($_SESSION['email']) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Jost:wght@600&family=Roboto:wght@300&display=swap" rel="stylesheet">
<style type="text/css">

.background{
    height: 87vh;
    width: 100%;
    background-color: rgb(55, 81, 126);

}

.navbar{
    justify-content: center;
}

li{
    list-style-type: none;
    display: inline;
}

.link a{
    text-decoration: none;
    color: white;
    padding: 20px;
    font-size: large;
}

li button{
    background-color: rgb(55, 81, 126);
    border: 3px solid rgb(71, 178, 228);
    border-radius: 20px;
    padding: 5px;
}

.link a:hover{
    color: rgb(71, 178, 228);
}

.link button:hover{
    background-color: rgb(71, 178, 228);
}

.link button a:hover{
    color: white;
}

.main{
    margin-top: 5%;
    margin-right: 8%;
    margin-left: 8%;
    margin-bottom: 5%;

}

.one{
    width: 40%;
    color: white;
    text-align: left;
    font-size: larger;
    padding-top: 70px;
    float: left;
}

.one p{
    color: rgb(175, 185, 203);
}

.one p,h1{
    font-family: 'Jost', sans-serif;
}

.one button{
    margin-top: 20px;
    background-color: rgb(71, 178, 228);
    border: 3px solid rgb(71, 178, 228);
    font-family: 'Jost', sans-serif;
    border-radius: 25px;
    padding: 5px;
}

.one a{
    text-decoration: none;
    color: white;
    padding: 20px;
    font-size: large;

}

.one button:hover{
    background-color: rgb(55, 153, 251);
    border-color: rgb(55, 153, 251);
}

.play{
    width: 40%;
    float: right;
    margin-top: 20px;
    margin-right: 145px;
}

.play img{
    width: 20%;
}

.play a:hover{
    color: rgb(71, 178, 228);
}

.two img{
    width: 40%;
    float: right;
}
.client{
    background-color: rgb(243,245,250);
}
.client img{
    float: left;
    width: 6%;
    margin-left: 135px;
    margin-top: 20px;
    margin-bottom: 20px;
/*    margin-right: 10px;*/
}

</style>
</head>

<body>
    <div class="background">
        <div class="navbar">
            <ul>
                <li class="link"><a href="#home">Home</a></li>
                <li class="link"><a href="#About">About</a></li>
                <li class="link"><a href="#Services">Services</a></li>
                <li class="link"><a href="#Portfolio">Portfolio</a></li>
                <li class="link"><a href="#Team">Team</a></li>
                <li class="link"><a href="#Contact">Contact</a></li>
                <li class="link"><button><a href="#GetStarted">Get Started</button></a></li>
            </ul>
        </div>
        <div class="main">
            <div class="one">
                <h1>Better Solutions For Your Business</h1>
                <p>We are team of talented designers making websites <br> with Bootstrap</p>
                <button><a href="#">Get Started</a></button>
                <div class="play">
                    <a href="#"><img src="play_circle.png" alt="">Watch Video</a>
                   
                </div>
            </div>
            <div class="two">
                <img src="home_img1.png" alt="Here is an image">
            </div>
        </div>
    </div>
    <div class="clientnav">
        <div class="client">
            <img src="home_img2.png" alt="">
            <img src="home_img3.png" alt="">
            <img src="home_img4.png" alt="">
            <img src="home_img5.png" alt="">
            <img src="home_img6.png" alt="">
            <img src="home_img7.png" alt="">
        </div>
    </div>
   
</body>

</html>
 <?php

        }else{
            echo "<script>alert('Oops! Something Went Wrong');window.location.href='login.php'</script>";
        }
    ?>