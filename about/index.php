<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <title>A Propos | TFA | Rogien Danielle</title>

        <meta name='viewport' content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat:400,700|Open+Sans:400,700|Quicksand:400,700" rel="stylesheet">

        <link rel="stylesheet" href="css/about.css"/>
        <link href="../headsupgrid/hugrid.css" type="text/css" rel="stylesheet" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="headsupgrid/hugrid.js"></script>
        <script src="js/parallax.js"></script>
	    <script src="js/main.js"></script>
        <script type="text/javascript">
            definegrid = function() {
                var browserWidth = $(window).width(); 
                if (browserWidth > 1440) 
                {
                    pageUnits = 'px';
                    colUnits = 'px';
                    pagewidth = 1440;
                    columns = 8;
                    columnwidth = 159;
                    gutterwidth = 24;
                    pagetopmargin = 35;
                    rowheight = 20;
                    gridonload = 'off';
                    makehugrid();
                } 
                if (browserWidth <= 1440) 
                {
                    pageUnits = 'px';
                    colUnits = 'px';
                    pagewidth = 960;
                    columns = 6;
                    columnwidth = 140;
                    gutterwidth = 24;
                    pagetopmargin = 35;
                    rowheight = 20;
                    gridonload = 'off';
                    makehugrid();
                } 
                if (browserWidth <= 1000) 
                {
                    pageUnits = '%';
                    colUnits = '%';
                    pagewidth = 94;
                    columns = 3;
                    columnwidth = 32;
                    gutterwidth = 2;
                    pagetopmargin = 35;
                    rowheight = 20;
                    gridonload = 'off';
                    makehugrid();
                }
                if (browserWidth <= 768) 
                {
                    pageUnits = '%';
                    colUnits = '%';
                    pagewidth = 96;
                    columns = 2;
                    columnwidth = 49;
                    gutterwidth = 2;
                    pagetopmargin = 35;
                    rowheight = 20;
                    gridonload = 'off';
                    makehugrid();
                }
            }
            $(document).ready(function() {
                definegrid();
                setgridonload();
            });    
            
            $(window).resize(function() {
                definegrid();
                setgridonresize();
            });
        </script>

        <!-- favicon --> 
        <link rel="apple-touch-icon" sizes="57x57" href="../fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../fav/favicon-16x16.png">
        <link rel="manifest" href="../fav/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../fav/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    
    <body>

        <header class="header" id="scene">
            <div data-depth="0.2">
                <img class="nuage" src="../img/nuage6-header.png" alt="nuage6" />
                <img class="nuage" src="../img/nuage6-header.png" alt="nuage6" />
                <img class="nuage" src="../img/nuage5-header.png" alt="nuage5" />
                <img class="nuage" src="../img/nuage6-header.png" alt="nuage6" />
                <img class="nuage" src="../img/nuage5-header.png" alt="nuage5" />
                <img class="nuage" src="../img/nuage6-header.png" alt="nuage6" />
            </div>
            <nav class="menu">
                <ul class="menu__list">
                    <li><a class="link">Side Project</a></li>
                    <li><a class="link link--active">À propos</a></li>
                    <li><a class="link">Case study</a></li>
                </ul>
            </nav>

            <div class="header__wrapper">
                <div class="content">
                    <h1>À Propos</h1>

            </div>
            <svg class="header__ground" viewBox="0 0 100 100" preserveAspectRatio="none">
                <g>
                    <polygon points="0,40 0,0 100,0" vector-effect="non-scaling-stroke" stroke="#82cbfe" fill="#82cbfe" />
                    <path d="M-1,40 C10,120 90,120 101,0 Z" vector-effect="non-scaling-stroke" stroke="#82cbfe" fill="#82cbfe"/>
                </g>
            </svg>
        </header>
        </header>
        
        
        <section class="text">
            <div class="container">
                <div class="content">
                    <h2>Pssssst ! Je cherche un stage</h2>
                    <p>Hey ! Alors moi c’est Danielle, j’ai 21 ans et je suis étudiante en 2ème année en Design Web et Mobile à la Haute Ecole Albert Jacqurd de Namur (HEAJ) et je suis actuellement 
                        à la rechercher d’un stage de 3 mois (novembre 2018 à janvier 2019) en Design (UI) et ergonomie/expérience utilisateur (UX) mais également en animations CSS. Le code pure et 
                        dure ce n’est pas trop mon truc mais je ne demande qu’à m’améliorer !</p>

                    <p>J’ai décidé de créer “Accroche-toi!” car étant moi-même dyslexique et dyscalculique j’aurais aimé disposer de ce genre d’outils étant petite.</p>
                    <p>Vous pouvez allez jettez un oeil à ma VCard ou à mes projets si vous voulez en voir plus de mon travail, et si je vous intéresse pourquoi ne pas m’envoyer un petit mail ?</p>
                    <p>A bientot j’espère !</p>
                </div>
            </div>
        </section>

                 <section class="contact" id="contact">
            <div class="container">
                <div class="content">
                    <h2>Contact</h2>
                    <form class="contact__form" action="php/script.php" method="POST">
                        <div class="contact__form__content">
                            <label class="<?php if($_GET['errors'][0]) echo 'error'; ?>">Votre nom : </label>
                            <input type="text" class="contact--text <?php if($_GET['errors'][0]) echo 'error'; ?>" name="nom" value="<?php if(isset($_SESSION['nom'])) echo $_SESSION['nom']; ?>">
                        </div>
                        <div class="contact__form__content">
                            <label class="<?php if($_GET['errors'][1]) echo 'error'; ?>">Votre prénom : </label>
                            <input type="text" class="contact--text <?php if($_GET['errors'][1]) echo 'error'; ?>" name="prenom" value="<?php if(isset($_SESSION['prenom'])) echo $_SESSION['prenom']; ?>">
                        </div>
                        <div class="contact__form__content">
                            <label class="<?php if($_GET['errors'][2]) echo 'error'; ?>">Votre tel. :</label>
                            <input type="tel" class="contact--text <?php if($_GET['errors'][2]) echo 'error'; ?>" name="tel" value="<?php if(isset($_SESSION['tel'])) echo $_SESSION['tel']; ?>">
                        </div>
                        <div class="contact__form__content">
                            <label class="<?php if($_GET['errors'][3]) echo 'error'; ?>">Votre mail :</label>
                            <input type="text" class="contact--text <?php if($_GET['errors'][3]) echo 'error'; ?>" name="mail" value="<?php if(isset($_SESSION['mail'])) echo $_SESSION['mail']; ?>">
                        </div>
                        <div class="contact__form__content">
                            <label>Votre message :</label>
                            <textarea class="contact--text contact--text--message" name="message"></textarea>
                        </div>
                    
                        <button type="submit" class="btn">
                            <span class="btn__text">
                                 Envoyer 
                            </span>
                        </button>
                        <?php
                            if(isset($_GET['valid'])){
                                if($_GET['valid']==1){
                                    echo '<label class="message"> Merci pour votre message, je vous réponds dès que possible. </label>';
                                }
                                else {
                                    echo '<label class="message error"> Attention, ces champs ne sont pas corrects. </label>';
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </section>

        <footer class="footer">
            <svg class="curve" viewBox="0 0 100 100" preserveAspectRatio="none">
                <g>
                    <polygon points="0,40 0,0 100,0" vector-effect="non-scaling-stroke" stroke="#fff" fill="#fff" />
                    <path d="M-1,40 C10,120 90,120 101,0 Z" vector-effect="non-scaling-stroke" stroke="#fff" fill="#fff"/>
                </g>
            </svg>
            <div class="container">
                <p>Travail de fin d'année réalisé par Danielle Rogien elève de 2ème en <a class="link" title="Design Web et Mobile" href="http://dwm.re/" target="blank">DWM</a> à la Haute école Albert Jacquard de Namur (Belgique.)</p>
                <p class="footer--small">Je tiens à remercier Emeline et Victoria pour leur aide lors de la réalisation des illustrations. Le jeu sera réalisé dans le courant de l’année 2019 dans le cadre de mon TFE.</p>
                <div class="content">
                    <p>Me contacter:</p>
                    <ul>
                        <li>tel: +32(0)490/43.18.</li>
                        <li>email: danielle.rogien@gmail.com</li>
                    </ul>
                </div>
                <div class="content">
                    <p>Établissement:</p>
                    <ul>
                        <li>Haute école Albert Jacquard (HEAJ) Avenue Comte de Smet de Nayer 20, 5000 Namur</li>
                    </ul>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="#" class="link" target="blank">Side Project</a></li>
                        <li><a href="#" class="link  link--active" target="blank">À Propos</a></li>
                        <li><a href="#" class="link" target="blank">Case Study</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </body>
</html>