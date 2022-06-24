<!DOCTYPE html>
<html lang="en">
<head>
    <!----------------- Meta Tags ------------------>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" 
                CONTENT="Community Landing Page">
    
    <!---------------------- Meta Tages End -------------------->

    <!---------------------- Bootstrap Cdn---------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!------------------------ Bootstrap Cdn Ends-------------------->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Community New</title>
</head>
<body>
    
<!-- hero section starts-->
<div class="hero-section" id="home">
    <div class="container">   
        <div class="logo">
            <a href="#">
                <img src="assets/images/hero-logo.png" alt="gopamine logo"/>
            </a>
           
        </div>
        <div class="content">
            <div class="left-content">
                <div class="text">
                    <p>Pas besoin d’être influenceur pour gagner de l’argent !</p>
                    <p>Sur Gopamine, lorsque tu aimes une marque, elle te récompense, et quand tu ne l’aimes pas aussi !</p>
                    <h2>Rejoins nos 50 000 membres (à condition que tu aies envie de gagner de l’argent, sinon tu peux toujours continuer à le faire gratuitement)</h2>
                </div>
                <div class="icons-btns">
                    <div class="icons">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-instagram-square"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#">
                           <img src="assets/images/icons/snapchat.png" alt="snapshot icon"/>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="right-content">
                <div class="contact-form">
                    <img src="assets/images/icons/stars-icon.png" alt="three starts icon"/>
                    <h1 class="form-heading">Inscris-toi, c’est gratuit !</h1>

                    <form class="form" enctype="multipart/form-data">
                        <label>Quelle est ton adresse mail ?</label>
                        <input type="text" placeholder="aurelie@mail.com"/>
                        <button type="submit" class="submit-btn">C’est parti !</button>
                    </form>

                    <div class="sign-in-up">
                        <h1>Déjà inscrit ?</h1>
                        <a href="#">se connecter</a>

                        <h1 class="mt-3">Ou connecte toi avec...</h1>
                    </div>
                    <div class="icons mt-5">
                        <a href="#">
                            <img src="assets/images/icons/linked-in.svg" alt="linked-in"/>
                        </a>

                        <a href="#">
                            <img src="assets/images/icons/google.svg" alt="linked-in"/>
                        </a>

                        <a href="#">
                            <img src="assets/images/icons/apple.svg" alt="linked-in"/>
                        </a>
                    </div>
                </div>
                <div class="app-btns">
                    <a href="#" class="g-play"><img src="assets/images/icons/google-play-btn.svg" alt="googly play btn"/></a>
                    <a href="#" class="apple-store"><img src="assets/images/icons/apple-appstore-btn.svg" alt="apple app store btn"/></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero section endss-->


<!-- Likes Section Starts-->
<section class="like-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image">
                    <img src="assets/images/img_mamie.png" alt="like section image"/>
                </div>
                
            </div>
            <div class="col-lg-6 text-col">
                <h1 class="main-title">
                    Tu likes, tu<br>
                     commentes, tu<br> 
                    kiffes ... ou pas<br>
                    Mais tu te fais payer !</h1>
                    <p class="mt-3">Enfin ! Tu peux, toi aussi, être rémunéré pour tes actions sur les réseaux sociaux.</p>
                    <p class="mt-5">Avec Gopamine tu vas enfin pouvoir gagner de l’argent facilement, sans effort pour te faire tes petits plaisirs !</p>
                    <div class="bottom-content">
                        <p>Télécharge gratuitement notre app !</p>
                        <div class="buttons">
                            <a href="#" class="g-play"><img src="assets/images/icons/google-play-btn.svg" alt="google play btn"></a>
                            <a href="#" class="apple-store"><img src="assets/images/icons/apple-appstore-btn.svg" alt="apple play store icon"/></a>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</section>
<!-- Likes Section Ends-->


<!-- Overlay Section Starts Here -->
<section class="overlay">
    <div class="container">
        <div class="content">
            <div class="left-div">
                <h1>Tu le faisais gratuitement jusqu’à maintenant ?</h1>
                <p>Chez Gopamine, on ne fait rien gratuitement, sauf s’inscrire ! Chacune de tes actions te fais gagner de l’argent et te permet de soutenir les marques que tu veux.</p>
                <a href="#" class="btn">Ca m’intéresse</a>
            </div>
            <div class="right-div">
                <p>We would like here dynamic data (money vs number of actions a member can make)</p>
            </div>
        </div>
    </div>
</section>
<!-- Overlay Section Ends Here -->

<!-- You only like section Starts Here -->
<section class="you-only-like">
    <div class="container">
        <div class="content">
            <h1>Tu ne like que ce que tu aimes </h1>
            <h2>Et si tu n’aimes pas, c’est pas grave, tu es payé.e pour donner ton  avis !</h2>
            <h3>Tu as accès à toutes les campagnes qui TE parlent et aux produits qui TE plaisent. </h3>
            <p class="mt-5">Choisis ton style, les marques que tu suis sont sur Gopamine</p>
            <a href="#" class="btn">Rejoins nous !</a>
            <p>(Sauf si tu veux continuer à travailler gratuitement)</p>
        </div>
    </div>
</section>
<!-- You only like section Ends Here -->



<!-- Comments section Starts-->
<section class="comments-section">
    <div class="container">
        <label>Comment ça marche ? </label>
        <div class="cards">
            <div class="card">
                <img src="assets/images/icons/starts-trans.svg" alt="card stars"/>
                <p>Tu t'inscris, c'est gratuit !</p>
            </div>

            <div class="card">
                <img src="assets/images/icons/favourite-trans-icon.svg" alt="card favourite"/>
                <p>Tes marques préférées te donnent rendez-vous</p>
            </div>

            <div class="card">
                <img src="assets/images/icons/thumbs-up.svg" alt="card thumbs"/>
                <p>Tu like, tu commentes, tu share, tu follow (ou pas)</p>
            </div>

            <div class="card">
                <img src="assets/images/icons/euro-trans.svg" alt="euro-trans stars"/>
                <p>Tu screen, t'envoies, t'encaisses</p>
            </div>
        </div>
    </div>
</section>
<!-- Comments section Ends-->


<!-- What are you waiting Starts-->
<section class="waiting-section">
    <div class="container">
        <div class="content">
            <h1>Qu’est-ce que tu attends ?</h1>
            <p>Que tu aies 120 followers ou 220 000 followers, tu es le/la bienvenu.e ! Évidemment, l’inscription est gratuite.</p>
            <a href="#" class="btn">C’est parti !</a>
        </div>
    </div>
</section>
<!-- What are you waiting Ends-->


<!-- footer starts-->
<div class="footer">
    <div class="container">
        <div class="logo">
            <img src="assets/images/icons/footer-logo.svg" alt="footer logo"/>
        </div>
       <div class="content">
           
            <div class="logo-section">
                <p>Notre équipe est à votre disposition pour répondre à toutes vos questions.</p>
                <a href="#" class="mail">contact@gopamine.com </a>
                <div class="icons">
                    <a href="#"><img src="assets/images/icons/fb_trans.png" alt="facebook"/></a>
                    <a href="#"><img src="assets/images/icons/insta-trans.png" alt="Instagram"/></a>
                </div>
            </div>

            <div class="links">
                <label>A propos</label>
                <a href="#">Qui sommes-nous ?</a>
                <a href="#">Mentions légales</a>
                <a href="#">CGV</a>
            </div>

            <div class="links">
                <label>Professionnels</label>
                <a href="#">Prendre rendez-vous</a>
                <a href="#">Déposer une campagne</a>
            </div>

            <div class="links">
                <label>Aide</label>
                <a href="#">Nous contacter</a>
                <a href="#">Comment ca marche </a>
            </div>

       </div>
    


        <div class="copywrite">
                <h1>© 2021 Gopamine, Tous droits réservés </h1>
                <div class="footer-menues">
                    <a href="#">Informations légales</a>
                    <a href="#"> Cookies</a>
                    <a href="#">Données personnelles</a>
                </div>
        </div>


    </div>
 </div>
<!-- footer ends-->

























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