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
<body>
    <div class="projecte carruselOff"  id="PROJ1">
        <div class="capcalera capcaweb">
            <div class="explicacio">
            <h1><?php echo $lang["WEB_H2_01"]; ?></h1> 
            <a href="https://www.carlosruizzafon.com" target="_blank">Visita la web</a>
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ1')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_12.webp" alt="Carlos Ruiz Zafón" loading="lazy" >
                    <p><?php echo $lang["WEB_H2_01_desc"]; ?></p>
                </div>
                <div class="centre2">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_01.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_02.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_03.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_04.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_05.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_06.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_07.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_08.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_09.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_10.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                    <img src="img/gallery/content/CRZ/carlosruizzafon_11.webp" alt="Carlos Ruiz Zafón" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="projecte carruselOff"  id="PROJ2">
        <div class="capcalera capcaweb">
            <div class="explicacio">
                <h1><?php echo $lang["WEB_H2_02"]; ?></h1>
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ2')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/inferno/inferno_01.webp" alt="Dan Brown's Inferno" style="margin-bottom: 30px;" loading="lazy">
                    <p><?php echo $lang["WEB_H2_02_desc"]; ?></p>
                </div>
                <div class="centre2">
                    <img src="img/gallery/content/inferno/inferno_02.webp" alt="Dan Brown's Inferno" loading="lazy">
                    <img src="img/gallery/content/inferno/inferno_03.webp" alt="Dan Brown's Inferno" style="margin-bottom: 30px;" loading="lazy">
                    <img src="img/gallery/content/inferno/inferno_04.webp" alt="Dan Brown's Inferno" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="projecte carruselOff"  id="PROJ3">
        <div class="capcalera capcaweb">
            <div class="explicacio">
                <h1><?php echo $lang["WEB_H2_03"]; ?></h1> 
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ3')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/aleph/aleph_03.webp" alt="Paulo Coelho, Aleph" loading="lazy">
                    <p><?php echo $lang["WEB_H2_03_desc"]; ?></p>
                </div>
                <div class="centre2">
                    <img src="img/gallery/content/aleph/aleph_01.webp" alt="Paulo Coelho, Aleph" style="margin-bottom: 30px;" loading="lazy">
                    <img src="img/gallery/content/aleph/aleph_02.webp" alt="Paulo Coelho, Aleph" loading="lazy">
                    <img src="img/gallery/content/aleph/aleph_04.webp" alt="Paulo Coelho, Aleph" style="margin-bottom: 30px;" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="projecte carruselOff"  id="PROJ4">
        <div class="capcalera capcaweb">
            <div class="explicacio">
                <h1><?php echo $lang["WEB_H2_04"]; ?></h1> 
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ4')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/estivill/estivill_01.webp" alt="Dr. Estivill" style="margin-bottom: 30px;" loading="lazy">
                    <p><?php echo $lang["WEB_H2_04_desc"]; ?></p>
                </div>
                <div class="centre2">
                    <img src="img/gallery/content/estivill/estivill_05.webp" alt="Dr. Estivill" style="margin-bottom: 30px;" loading="lazy">
                    <img src="img/gallery/content/estivill/estivill_03.webp" alt="Dr. Estivill" style="margin-bottom: 30px;" loading="lazy">
                    <img src="img/gallery/content/estivill/estivill_02.webp" alt="Dr. Estivill" loading="lazy">
                    <img src="img/gallery/content/estivill/estivill_04.webp" alt="Dr. Estivill" style="margin-bottom: 30px;" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="projecte carruselOff"  id="PROJ5">
        <div class="capcalera capcaweb">
            <div class="explicacio">
                <h1><?php echo $lang["WEB_H2_05"]; ?></h1> 
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ5')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/bibliotecaup/bibliotecaup_03.webp" alt="Biblioteca UP" loading="lazy">
                    <p><?php echo $lang["WEB_H2_05_desc"]; ?></p>
                </div>
                <div class="centre2">
                    <img src="img/gallery/content/bibliotecaup/bibliotecaup_06.webp" alt="Biblioteca UP" loading="lazy">
                    <img src="img/gallery/content/bibliotecaup/bibliotecaup_01.webp" alt="Biblioteca UP" loading="lazy">
                    <img src="img/gallery/content/bibliotecaup/bibliotecaup_02.webp" alt="Biblioteca UP" loading="lazy">
                    <img src="img/gallery/content/bibliotecaup/bibliotecaup_04.webp" alt="Biblioteca UP" loading="lazy">
                    <img src="img/gallery/content/bibliotecaup/bibliotecaup_05.webp" alt="Biblioteca UP" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="projecte carruselOff"  id="PROJ7">
        <div class="capcalera capcaweb">
            <div class="explicacio">
                <h1><?php echo $lang["WEB_H2_07"]; ?></h1> 
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ7')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/CIE/CIE-Home.webp" alt="Ciclo de Innovación Educativa" loading="lazy">
                    <img src="img/gallery/content/CIE/CIE-interior.webp" alt="Ciclo de Innovación Educativa" loading="lazy">
                </div>
                <div class="centre2">
                    <p><?php echo $lang["WEB_H2_07_desc"]; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="projecte carruselOff"  id="PROJ8">
        <div class="capcalera capcaweb">
            <div class="explicacio">
                <h1><?php echo $lang["WEB_H2_08"]; ?></h1> 
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ8')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/JGJ/JuanGjurado_02.webp" alt="Juan Gómez-Jurado" loading="lazy">
                    <img src="img/gallery/content/JGJ/JuanGjurado_03.webp" alt="Juan Gómez-Jurado" loading="lazy">
                </div>
                <div class="centre2">
                    <p><?php echo $lang["WEB_H2_08_desc"]; ?></p>
                </div>
                <div class="centre2">       
                    <img src="img/gallery/content/JGJ/JuanGjurado_01.webp" alt="Juan Gómez-Jurado" loading="lazy">
                    <img src="img/gallery/content/JGJ/JuanGjurado_04.webp" alt="Juan Gómez-Jurado" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="projecte carruselOff"  id="PROJ9">
        <div class="capcalera capcaweb">
            <div class="explicacio">
                <h1><?php echo $lang["WEB_H2_09"]; ?></h1> 
                <a href="https://mariaduenas.es/maria-duenas.php" target="_blank">visita la web</a>
            </div>
            <a href="web.php" target="_self"><img src="img/cross-blanc.svg" alt="tancar" loading="lazy"></a><!--javascript:tancarCarruselWeb('#PROJ9')-->
        </div>
        <div class="contents">
            <div class="centre">
                <div class="centre2">
                    <img src="img/gallery/content/mariaduenas/mariaduenas_06.webp" alt="Maria Dueñas" loading="lazy">
                    <p><?php echo $lang["WEB_H2_09_desc"]; ?></p>
                </div>
                <div class="centre2">
                    <img src="img/gallery/content/mariaduenas/mariaduenas_01.webp" alt="Maria Dueñas" loading="lazy">
                    <img src="img/gallery/content/mariaduenas/mariaduenas_04.webp" alt="Maria Dueñas" loading="lazy">
                    <img src="img/gallery/content/mariaduenas/mariaduenas_03.webp" alt="Maria Dueñas" loading="lazy">
                    <img src="img/gallery/content/mariaduenas/mariaduenas_02.webp" alt="Maria Dueñas" loading="lazy">
                    <img src="img/gallery/content/mariaduenas/mariaduenas_05.webp" alt="Maria Dueñas" loading="lazy">
                </div>
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