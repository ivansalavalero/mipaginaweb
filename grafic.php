<?php
    include ('lang/configuracion.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang["idioma"]; ?>">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JN8W0VHDHR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JN8W0VHDHR');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?php echo $lang["meta_titol_corp"]; ?>">
    <meta name="descriptiom" content="<?php echo $lang["meta_descripcio_corp"]; ?>">
    <meta name="keywords" content="<?php echo $lang["meta_keywords_corp"]; ?>">
    <title><?php echo $lang["Title_grafic"]; ?></title>
    <link href="fontawesome/css/brands.css" rel="stylesheet" type="text/css">
    <link href="fontawesome/css/solid.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4cd9ccfeae.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300;400;500;600;700&family=DynaPuff:wght@400..700&family=Gochi+Hand&family=Kufam:ital,wght@0,400..900;1,400..900&family=Lobster&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style-2025.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="assets/script.js"></script>
</head>
<body style="position: relative;">
    <!--    INDEX DE PROJECTES  -->
    <div class="galeria" id="corporatiu">
        <div class="capcalera">
            <h1><?php echo $lang["AP01_ap2"]; ?></h1>
            <a href="index.php#porfoli" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a>
        </div>
        <div class="expo">
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ10')">-->
                <a href="detall_corp.php?accion=PROJ10&seccio=corp">
                    <img src="img/gallery/PF01-10.webp" alt="Babou Handmade" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_10"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ6')">-->
                <a href="detall_corp.php?accion=PROJ6&seccio=corp">
                    <img src="img/gallery/PF01-06.webp" alt="Clickedu" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_06"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ3')">-->
                <a href="detall_corp.php?accion=PROJ3&seccio=corp">
                    <img src="img/gallery/PF01-03.webp" alt="XX.SS. Clickedu" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_03"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ5')">-->
                <a href="detall_corp.php?accion=PROJ5&seccio=corp">
                    <img src="img/gallery/PF01-05.webp" alt="Triptic corporatiu" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_05"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ8')">-->
                <a href="detall_corp.php?accion=PROJ8&seccio=corp">
                    <img src="img/gallery/PF01-11.webp" alt="PowerG" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_11"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ4')">-->
                <a href="detall_corp.php?accion=PROJ4&seccio=corp">
                    <img src="img/gallery/PF01-04.webp" alt="Coffeing" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_04"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ2')">-->
                <a href="detall_corp.php?accion=PROJ2&seccio=corp">
                    <img src="img/gallery/PF01-02.webp" alt="PimeCava" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_02"]; ?></p></div>
                </a>
            </div>
            
            <div class="item">
                <!--<a href="javascript:obreCarruselGrafic('#PROJ7')">-->
                <a href="detall_corp.php?accion=PROJ7&seccio=corp">
                    <img src="img/gallery/PF01-07.webp" alt="Secció Àurea" loading="lazy">
                    <div class="titular"><p><?php echo $lang["DG_TIT_07"]; ?></p></div>
                </a>
            </div>
        </div>
    </div>

    <div class="contactodetall">
        <div class="contactclaim">
            <h2><?php echo $lang["AP03_titol"]; ?></h2>
        </div>
        <form id="formdetall">
            <div class="fornom">
                <label for="nombre"><?php echo $lang["AP03_camp01"]; ?></label>
                <input type="text" id="nombre" name="nombre" placeholder="<?php echo $lang["PH_NOM"]; ?>" >
            </div>
            <div class="formail">
                <label for="email"><?php echo $lang["AP03_camp02"]; ?></label>
                <input type="email" id="email" name="email" placeholder="<?php echo $lang["PH_MAIL"]; ?>" >
            </div>
            <div class="formsg">
                <label for="mensaje"><?php echo $lang["AP03_camp03"]; ?></label><br>
                <textarea name="mensaje" id="mensaje" cols="32" placeholder="<?php echo $lang["PH_MSG"]; ?>" ></textarea>
            </div>
            <div class="d-none" id="mensajeExito"><?php echo $lang["OK_FORM"]; ?></div>
            <div class="d-none" id="mensajeError"><?php echo $lang["KO_FORM"]; ?></div>
            <div class="forbtn">
                <button type="submit" aria-label="Envia el formulari"><?php echo $lang["AP03_button01"]; ?></button>
            </div>
        </form>
    </div>

    <footer>
        <div class="credits">&#169; 2025 <a href="mailto:ivansalavalero@gmail.com">Ivan Sala Valero</a> | <a href="https://maps.app.goo.gl/27LqJk13vTjR3DiJ8" target="_blank">08023 Barcelona</a> |<!-- <a href="javascript:obrirPrivacidad()"><?php //echo $lang["FOOT_link01"]; ?></a> |--> <a href="javascript:obrirtextCookies()"><?php echo $lang["FOOT_link02"]; ?></a></div>
        <div class="xarxes">
            <a href="https://www.linkedin.com/in/ivansalavalero" class="btn btn-outline text-white" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/ivansalacreatiu/" class="btn btn-outline text-white" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/ivansalavalero/" class="btn btn-outline text-white" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </div>
    </footer>
    <div class="textCookiesoff" id="textCookies">
        <div class="capcalera">
            <h2><?php echo $lang["COOKIES_T1"]; ?></h2>
            <a href="javascript:tancartextCookies()"><img src="img/cross-blau.svg" alt="tancar" loading="lazy"></a>
        </div>
        <div class="cookiecontent">
            <p><?php echo $lang["COOKIES_P1"]; ?></p>
            <p><?php echo $lang["COOKIES_P2"]; ?></p>
            <p><?php echo $lang["COOKIES_P3"]; ?></p>
            <p><?php echo $lang["COOKIES_P4"]; ?></p>
            <h2><?php echo $lang["COOKIES_T2"]; ?></h2>
            <p><?php echo $lang["COOKIES_P01"]; ?></p>
            <h2><?php echo $lang["COOKIES_T3"]; ?></h2>
            <p><?php echo $lang["COOKIES_P02"]; ?></p>
        </div>
    </div>
</body>
</html>