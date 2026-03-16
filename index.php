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
    <meta name="title" content="<?php echo $lang["meta_titol"]; ?>">
    <meta name="description" content="<?php echo $lang["meta_descripcio"]; ?>">
    <meta name="keywords" content="<?php echo $lang["meta_keywords"]; ?>">
    <title><?php echo $lang["Title_index"]; ?></title>
    <link href="fontawesome/css/brands.css" rel="stylesheet" type="text/css">
    <link href="fontawesome/css/solid.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4cd9ccfeae.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300;400;500;600;700&family=DynaPuff:wght@400..700&family=Gochi+Hand&family=Kufam:ital,wght@0,400..900;1,400..900&family=Lobster&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style-2025.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="assets/script.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <div class="titol">
            <h1 class="atma-semibold">ivansala</h1><h2><?php echo $lang["capcalera"]; ?></h2>
            </div>
            <img class="imagotip" src="img/ivansala-ilustrat2.webp" alt="imagotip" width="200" loading="lazy">
            <nav>
                <a href="https://www.linkedin.com/in/ivansalavalero" class="btn btn-outline text-white lk" target="_blank" aria-label="Linkedin"><i class="fab fa-linkedin-in fa-2x"></i></a>
                <a href="https://www.instagram.com/ivansalacreatiu/" class="btn btn-outline text-white ins" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://www.facebook.com/ivansalavalero/" class="btn btn-outline text-white fb" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a>
                <div class="idioma" >
                    <a class="<?php echo $lang["Idioma_ca"]; ?>" href="index.php?lang=ca" aria-label="Tradueix en catalá"><?php echo $lang["Idioma_menu_ca"]; ?></a>
                    <a class="<?php echo $lang["Idioma_es"]; ?>" href="index.php?lang=es" aria-label="Traduce al castellano"><?php echo $lang["Idioma_menu_es"]; ?></a>
                    <a class="<?php echo $lang["Idioma_en"]; ?>" href="index.php?lang=en" aria-label="Translate to english"><?php echo $lang["Idioma_menu_en"]; ?></a>
                </div>
            </nav>      
        </div>
    </header>
    <main>
        <div class="porfoli"  id="porfoli">
            <div class="apartat intro">
                <h2><?php echo $lang["AP01_titol"]; ?></h2>
                <p><?php echo $lang["AP01_text"]; ?></p>
            </div>
            <a href="web.php" target="_self" aria-label="<?php echo $lang["AP01_ap1"]; ?>"><div class="apartat web"><?php echo $lang["AP01_ap1"]; ?></div></a>
            <a href="grafic.php" target="_self" aria-label="<?php echo $lang["AP01_ap2"]; ?>"><div class="apartat corp"><?php echo $lang["AP01_ap2"]; ?></div></a>
            <a href="illustracio.php" target="_self" aria-label="<?php echo $lang["AP01_ap3"]; ?>"><div class="apartat ilus"><?php echo $lang["AP01_ap3"]; ?></div></a>
            <div class="iconografia">
                <img src="img/ico-web-blau.webp" alt="Desenvolupament web" width="50" loading="lazy">
                <img src="img/ico-grafico-blau.webp" alt="Disseny Gràfic" width="50" loading="lazy">
                <img src="img/ico-ilus-blau.webp" alt="Il·lustració" width="50" loading="lazy">
            </div>
        </div>
        <div class="sobre">
            <div class="perfil"><img src="img/perfil.webp" style="display:none" alt="perfil Ivan Sala" loading="lazy"></div>
            <div class="info">
                <div class="text">
                    <h1><?php echo $lang["AP02_text00"]; ?></h1>
                    <p><?php echo $lang["AP02_text01"]; ?></p>
                    <p><?php echo $lang["AP02_text02"]; ?></p>
                    <p><?php echo $lang["AP02_text03"]; ?></p>
                </div>
                <div class="curriculum">
                    <p><?php echo $lang["AP02_text04"]; ?></p>
                    <button type="button"  onClick="javascript:window.open('resume/index.php', '_blank');" aria-label="<?php echo $lang["AP02_button"]; ?>"><?php echo $lang["AP02_button"]; ?></button>
                </div>
                <div class="icones">
                    <img src="img/ico-transmision-ocre.webp" alt="musica" width="40" loading="lazy">
                    <img src="img/ico-claqueta-ocre.webp" alt="cine" width="40" loading="lazy">
                    <img src="img/ico-comic-ocre.webp" alt="comic" width="40" loading="lazy">
                </div>
            </div>
        </div>
        <div class="contacto">
            <h2><?php echo $lang["AP03_titol"]; ?></h2>
            <p><?php echo $lang["AP03_text"]; ?></p>
            <form id="form">
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
    </main>
    <div class="slider-wrapper">
        <a class="prev-btn">❮</a>
        <div class="slider-container">
            <div class="slider-track">
                <div class="slide-group">
                    <a href="detall_corp.php?accion=PROJ8&seccio=corp" target="_self"><img src="img/gallery/PF01-11.webp" alt="PowerG" loading="lazy"></a>
                    <a href="detall_ilustracio.php?accion=PROJ8&seccio=ilu" target="_self"><img src="img/gallery/PF03-11.webp" alt="Decàleg de bones maneres" loading="lazy"></a>
                    <a href="detall_web.php?accion=PROJ9&seccio=web" target="_self"><img src="img/gallery/PF02-09.webp" alt="Maria Dueñas" loading="lazy"></a>
                    <a href="detall_corp.php?accion=PROJ5&seccio=corp" target="_self"><img src="img/gallery/PF01-05.webp" alt="Tríptic Clickedu" loading="lazy"></a>
                </div>
                <div class="slide-group">
                    <a href="detall_corp.php?accion=PROJ7&seccio=corp" target="_self"><img src="img/gallery/PF01-07.webp" alt="Presentació Powerpoint" loading="lazy"></a>
                    <a href="detall_ilustracio.php?accion=PROJ2&seccio=ilu" target="_self"><img src="img/gallery/PF03-02.webp" alt="Planificador de Tasques" loading="lazy"></a>
                    <a href="detall_web.php?accion=PROJ4&seccio=web" target="_self"><img src="img/gallery/PF02-04.webp" alt="Web Dr. Estivill" loading="lazy"></a>
                    <a href="detall_corp.php?accion=PROJ2&seccio=corp" target="_self"><img src="img/gallery/PF01-02.webp" alt="Pimecava" loading="lazy"></a>
                </div>
                <div class="slide-group">
                    <a href="detall_corp.php?accion=PROJ10&seccio=corp" target="_self"><img src="img/gallery/PF01-10.webp" alt="Babou Handmade" loading="lazy"></a>
                    <a href="detall_ilustracio.php?accion=PROJ4&seccio=ilu" target="_self"><img src="img/gallery/PF03-04.webp" alt="Mural Clickedu" loading="lazy"></a>
                    <a href="detall_web.php?accion=PROJ7&seccio=web" target="_self"><img src="img/gallery/PF02-07.webp" alt="Web CIE" loading="lazy"></a>
                    <a href="detall_corp.php?accion=PROJ3&seccio=corp" target="_self"><img src="img/gallery/PF01-03.webp" alt="Campaña Covid" loading="lazy"></a>
                </div>
            </div>
        </div>
        <a class="next-btn">❯</a>
    </div>
    <footer>
        <div class="credits">&#169; 2025 <a href="mailto:ivansalavalero@gmail.com">Ivan Sala Valero</a> | <a href="https://maps.app.goo.gl/27LqJk13vTjR3DiJ8" target="_blank">08023 Barcelona</a> | <!--<a href="javascript:obrirPrivacidad()"><?php //echo $lang["FOOT_link01"]; ?></a> |--> <a href="javascript:obrirtextCookies()"><?php echo $lang["FOOT_link02"]; ?></a></div>
        <div class="xarxes">
            <a href="https://www.linkedin.com/in/ivansalavalero" class="btn btn-outline text-white" target="_blank" aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/ivansalacreatiu/" class="btn btn-outline text-white" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/ivansalavalero/" class="btn btn-outline text-white" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        </div>
    </footer>
    <!--        POLÍTIQUES DE PRIVACITAT I COOKIES         -->
    <div class="cookieson cookie-disclaimer" id="cookies">
        <div class="aviso">
            <p><?php echo $lang["COOKIES_WARNING"]; ?></p>
        </div>
        <div class="cookiesbtn accept-cookie">
            <button type="button" class="cookon accept-cookie" ><?php echo $lang["COOKIES_BTN"]; ?></button>
        </div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>
</html>