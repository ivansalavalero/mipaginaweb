<?php
    include ('lang/configuracion.php')
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
    <meta name="title" content="<?php echo $lang["meta_titol_web"]; ?>">
    <meta name="descriptiom" content="<?php echo $lang["meta_descripcio_web"]; ?>">
    <meta name="keywords" content="<?php echo $lang["meta_keywords_web"]; ?>">
    <title><?php echo $lang["Title_web"]; ?></title>
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
    <div class="galeria" id="web">
        <div class="capcalera">
            <h1><?php echo $lang["AP01_ap1"]; ?></h1> 
            <a href="index.php#porfoli" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a>
        </div>
        <div class="expo">
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ1')">-->
                <a href="detall_web.php?accion=PROJ1&seccio=web">
                    <img src="img/gallery/PF02-01.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_01"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ2')">-->
                <a href="detall_web.php?accion=PROJ2&seccio=web">
                    <img src="img/gallery/PF02-02.webp" alt="Infierno - Dan Brown" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_02"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ9')">-->
                <a href="detall_web.php?accion=PROJ9&seccio=web">
                    <img src="img/gallery/PF02-09.webp" alt="María Dueñas" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_09"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ8')">-->
                <a href="detall_web.php?accion=PROJ8&seccio=web">
                    <img src="img/gallery/PF02-08.webp" alt="Juan Gómez-Jurado" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_08"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ3')">-->
                <a href="detall_web.php?accion=PROJ3&seccio=web">
                    <img src="img/gallery/PF02-03.webp" alt="Aleph - Paulo Coelho" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_03"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ4')">-->
                <a href="detall_web.php?accion=PROJ4&seccio=web">
                    <img src="img/gallery/PF02-04.webp" alt="Que no te quiten el sueño - Eduard Estivill" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_04"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ5')">-->
                <a href="detall_web.php?accion=PROJ5&seccio=web">
                    <img src="img/gallery/PF02-05.webp" alt="Universidad de padres - José Antonio Marina" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_05"]; ?></p></div>
                </a>
            </div>
            <div class="item">
                <!--<a href="javascript:obreCarruselWeb('#PROJ7')">-->
                <a href="detall_web.php?accion=PROJ7&seccio=web">
                    <img src="img/gallery/PF02-07.webp" alt="Ciclo de Innovación Educativa" loading="lazy">
                    <div class="titular"><p><?php echo $lang["WEB_TIT_07"]; ?></p></div>
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
            
        </div>
        <a href="javascript:tancartextCookies()"><img src="img/cross-blau.svg" alt="tancar" loading="lazy"></a>
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