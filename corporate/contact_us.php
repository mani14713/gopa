<!DOCTYPE html>
<html lang="en">
<head>
    <!----------------- Meta Tags ------------------>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" 
                CONTENT="Data Science is a science website.">
    
    <!---------------------- Meta Tages End -------------------->

    <!---------------------- Bootstrap Cdn---------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!------------------------ Bootstrap Cdn Ends-------------------->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact Us</title>
</head>
<body>
    
<!-- header section starts -->
<header>
    <div class="container">
        <div class="nav">
            <a href="#" class="logo">
                <img src="assets/images/logo.svg" alt="main logo"/>
            </a>
        
            <nav class="navbar borderYtoX">
                <a href="index.php#home">Home</a>
                <a href="index.php#howworks">How it works</a>
                <a href="index.php#solution">Solution</a>
                <a href="index.php#pricing">Pricing</a>
            </nav>
        
        
            <div class="icons">
                <img src="assets/images/bars.svg" data-swap="assets/images/times.svg" data-src="assets/images/bars.svg" id="menu-bars" alt="toggle-bars"/>
                <a href="contact_us.php" class="contact-us">
                    CONTACT US
                </a>
            </div>
        </div>
    </div>
</header>
<!-- header section ends -->


<div class="contact-banner">
    <h3>Contact Us</h3>
</div>

<div class="container">
    <div class="contact-form">
        <label>Let’s Collaborate With Us</label>
        <form method="" action="">
            <div class="fields">
                <input type="text" placeholder="First Name"/>
                <input type="text" placeholder="Last Name"/>
            </div>
            <input type="email" placeholder="Email"/>
            <textarea placeholder="Message"></textarea>

            <button type="submit" id="submit-btn">SEND</button>
        </form>
    </div>
</div>


<div class="footer">
    <div class="container footer-rows">
        
        <div class="footer-content">

            <div class="left-side">
                <img src="assets/images/footer-logo.svg" alt="footer-logo"/>
                <p>Notre équipe est à votre disposition pour répondre à toutes vos questions.</p>
            </div>

            <div class="middle">
                <label class="footer-label">Follow Us</label>
                <div class="icons">
                    <a href="#">
                        <img src="assets/images/facebook.svg" alt="facebook"/>
                    </a>
                    <a href="#">
                        <img src="assets/images/twitter.svg" alt="twitter"/>
                    </a>
                    <a href="#">
                        <img src="assets/images/youtube.svg" alt="youtube"/>
                    </a>
                    <a href="#">
                        <img src="assets/images/tiktok.svg" alt="tiktok"/>
                    </a>
                    <a href="#">
                        <img src="assets/images/linkedin.svg" alt="linkedin"/>
                    </a>
                    <a href="#">
                        <img src="assets/images/insta.svg" alt="instagram"/>
                    </a>
                    <a href="#">
                        <img src="assets/images/snapchat.svg" alt="snapchat"/>
                    </a>
                </div>
            </div>

            <div class="right">
                <label class="footer-label">Contact Us</label>
                <a href="contact@gopamine.com">
                    contact@gopamine.com 
                </a>
            </div>

        </div>
        
        <div class="copyright">
            <div class="reserve-right">© 2021 Gopamine, Tous droits réservés</div>
            <div class="links">
                <a href="#">Informations légales</a>
                <a href="#">Cookies</a>
                <a href="#">Données personnelles</a>
            </div>
        </div>
    </div>
</div>

<!-- header section ends-->

























<!--------------------------------- Jquery --------------------------->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<!-------------------------------- Jquery Ends------------------------------->

<!--------------------------------- Popper Js ------------------------------->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--------------------------------- Popper Js Ends----------------------------->

<!--------------------------------- Bootstrap 5 cdn ---------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!------------------------------------ Bootstrap 5 cdn Ends--------------------->

<script src="https://unpkg.com/scrollreveal"></script>
<!----------------------------scrollreveal---------------------------->

<!-- custom js file link  -->
<script src="assets/js/script.js"></script>
</body>
</html>