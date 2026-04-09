<?php
    include ('../lang/configuracion_resume.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang["idioma"];?>">
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
    <title><?php echo $lang["curri_titol"];?></title>
    <script src="https://kit.fontawesome.com/4cd9ccfeae.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400..900;1,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="../assets/style_resume.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="contacte">
            <ul>
                <li><a href="tel:+34676617507"><span>676.61.75.07</span><i class="fa-solid fa-mobile-screen"></i></a></li>
                <li><a href="mailto:ivansalavalero@gmail.com"><span>ivansalavalero@gmail.com</span><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href="https://ivansala.net" target="_blank"><b><span>www.ivansala.net</span></b><i class="fa-solid fa-house"></i></a></li>
                <li><a href="<?php echo $lang["curri_descarga"];?>"><span><?php echo $lang["curri_btn"];?></span><i class="fa-solid fa-file-pdf"></i></a></li>
            </ul>
        </div>
        <div class="capcalera">
            <h1><?php echo $lang["curri_nom"];?></h1>
            <h2><?php echo $lang["curri_prof"];?></h2>
        </div>
        <div class="idioma" >
                    <a class="<?php echo $lang["Idioma_ca"]; ?>" href="index.php?lang=ca"><?php echo $lang["Idioma_menu_ca"]; ?></a>
                    <a class="<?php echo $lang["Idioma_es"]; ?>" href="index.php?lang=es"><?php echo $lang["Idioma_menu_es"]; ?></a>
                    <a class="<?php echo $lang["Idioma_en"]; ?>" href="index.php?lang=en"><?php echo $lang["Idioma_menu_en"]; ?></a>
        </div>
    </header>
    <main>
        <!--------------------------------------------------------------->
        <!-------------------        PRESENTACIÓ     -------------------->
        <!--------------------------------------------------------------->
        <div class="presentacio">
            <p><?php echo $lang["curri_presentacio_01"];?></p>
        </div>
        <!--------------------------------------------------------------->
        <!------------------        COMPETÈNCIES     -------------------->
        <!--------------------------------------------------------------->
        <div class="competencies">
            <h2><i class="fa-solid fa-user-gear"></i><?php echo $lang["curri_know"]; ?></h2>
            <div class="contingut">
                <h3><?php echo $lang["curri_altres"]; ?></h3>            
                <ul>
                    <li><?php echo $lang["curri_altres_04"];?></li>
                    <li><?php echo $lang["curri_altres_05"];?></li>
                    <li><?php echo $lang["curri_altres_06"];?></li>
                    <li><?php echo $lang["curri_altres_07"];?></li>
                    <li><?php echo $lang["curri_altres_01"];?></li>
                    <li><?php echo $lang["curri_altres_02"];?></li>
                    <li><?php echo $lang["curri_altres_03"];?></li>
                </ul>
                <h3><?php echo $lang["curri_altres2"]; ?></h3>
                <ul>
                    <li><b><?php echo $lang["curri_altres2_01"]; ?></b></li>
                    <li><?php echo $lang["curri_soft_01"]; ?></li>
                    <li><?php echo $lang["curri_soft_06"]; ?></li>
                    <li><?php echo $lang["curri_soft_07"]; ?></li>
                    
                    <li><b><?php echo $lang["curri_altres2_02"]; ?></b></li>
                    <li><?php echo $lang["curri_soft_02"]; ?></li>
                    <li><?php echo $lang["curri_soft_08"]; ?></li>
                    <li><?php echo $lang["curri_soft_09"]; ?></li>
                    
                    <li><b><?php echo $lang["curri_altres2_04"]; ?></b></li>
                    <li><?php echo $lang["curri_soft_04"]; ?></li>
                    <li><?php echo $lang["curri_soft_05"]; ?></li>
                    
                    <li><b><?php echo $lang["curri_altres2_05"]; ?></b></li>
                    <li><?php echo $lang["curri_soft_11"]; ?></li>
                    
                    <li><b><?php echo $lang["curri_altres2_03"]; ?></b></li>
                    <li><?php echo $lang["curri_soft_03"]; ?></li>
                    <li><?php echo $lang["curri_soft_10"]; ?></li>
                </ul>
            </div>
        </div>
        <!--------------------------------------------------------------->
        <!---------------------        IDIOMES     ---------------------->
        <!--------------------------------------------------------------->
        <div class="idiomes">
            <h2><i class="fa-solid fa-earth-americas"></i><?php echo $lang["curri_lang"]; ?></h2>
            <div class="contingut">
                <ul>
                    <li><b>Català</b> - <?php echo $lang["curri_lang_nat"]; ?> C2<!--<div class="coneixement" style="text-align: right;"><div style="background-color: #115a8a; height: 10px; width: 140px;" ></div></div>--></li>
                    <li><b>Español</b> - <?php echo $lang["curri_lang_nat"]; ?> C2<!--<div class="coneixement"><div style="background-color: #115a8a; height: 10px; width: 140px;" ></div></div>--></li>
                    <li><b>English</b> - <?php echo $lang["curri_lang_inter"]; ?> B2<!--<div class="coneixement"><div style="background-color: #115a8a; height: 10px; width: 102px;" ></div><div style="background-color: #afd7ef; height: 10px; width: 38px;" ></div></div>--></li>
                    <li><b>Português</b> - <?php echo $lang["curri_lang_inter"]; ?> B1<!--<div class="coneixement"><div style="background-color: #115a8a; height: 10px; width: 50px;" ></div><div style="background-color: #afd7ef; height: 10px; width: 90px;" ></div></div>--></li>
                </ul>
            </div>
        </div>
        <!--------------------------------------------------------------->
        <!---------------        EXPERIÈNCIA LABORAL     ---------------->
        <!--------------------------------------------------------------->
        <div class="experiencia">
            <h2><i class="fa-solid fa-briefcase"></i> <?php echo $lang["curri_expe"];?></h2>
            <div class="contingut">
                <h3>CLICKART / CLICKEDU</h3>
                <h4>2010 – 2023 · Senior Web Designer → Brand Manager → Team Lead</h4>
                <p>
                    <ul>
                        <li>Lideratge de la renovació integral del branding corporatiu, millorant la coherència visual en entorns digitals i multicanal</li>
                        <li>Disseny i desenvolupament de webs i microsites per clients com Grup Planeta, Quadis i Philips</li>
                        <li>Coordinació d’equips multidisciplinaris (disseny i desenvolupament)</li>
                        <li>Execució de campanyes digitals i materials promocionals orientats a resultats</li>
                        <li>Gestió de xarxes socials alineades amb la nova identitat de marca</li>
                        <li>Implementació de projectes tècnics (importació de dades), assegurant consistència visual i funcional</li>
                    </ul>
                </p>
            </div>
            <div class="contingut">
                <h3>GPC STUDIO (Upskilling en desenvolupament frontend)</h3>
                <h4>2025 – 2026 · Desenvolupador web</h4>
                <p>
                    <ul>
                        <li>Actualització de competències en desenvolupament web modern</li>
                        <li>Aplicació pràctica de tecnologies frontend en entorns reals</li>
                    </ul>
                </p>
            </div>
            <div class="contingut">
                <h3>AUTÒNOM</h3>
                <h4>2003 – 2010 · Web & Brand Designer</h4>
                <p>
                    <ul>
                        <li>Desenvolupament de projectes de branding i disseny web per a diferents clients</li>
                        <li>Gestió integral de projectes i relació directa amb client</li>
                    </ul>
                </p>
            </div>
            <div class="contingut">
                <h3>STEREO RENT</h3>
                <h4>1999 – 2003 · Dissenyador Gràfic</h4>
                <p>
                    <ul>
                        <li>Disseny i escenografia per a esdeveniments i espais firals</li>
                        <li>Desenvolupament de campanyes visuals per entorns corporatius i institucionals</li>
                    </ul>
                </p>
            </div>
            <!--<div class="contingut"><div class="dates"><h3>2025-2026</h3><p><b><em>GPC Studio</em></b></p></div><div class="triangle"></div><div class="accions"><?php echo $lang["curri_expe_desc_05"]; ?></div></div>
            <div class="contingut"><div class="dates"><h3>2017-2023</h3><p><b><em>Clickart - Clickedu</em></b></p></div><div class="triangle"></div><div class="accions"><?php echo $lang["curri_expe_desc_01"]; ?></div></div>
            <div class="contingut"><div class="dates"><h3>2010-2023</h3><p><b><em>Clickart - Clickedu</em></b></p></div><div class="triangle"></div><div class="accions"><?php echo $lang["curri_expe_desc_02"]; ?></div></div>
            <div class="contingut"><div class="dates"><h3>2003-2010</h3><p><b><em><?php echo $lang["curri_expe_02"];?></em></b></p></div><div class="triangle"></div><div class="accions"><?php echo $lang["curri_expe_desc_03"]; ?></div></div>
            <div class="contingut"><div class="dates"><h3>1999-2003</h3><p><b><em>Stereo Rent</em></b></p></div><div class="triangle"></div><div class="accions"><?php echo $lang["curri_expe_desc_04"]; ?></div></div>-->
        </div>
        <!--------------------------------------------------------------->
        <!--------------------        FORMACIÓ     ---------------------->
        <!--------------------------------------------------------------->
        <div class="formacio">
            <h2><i class="fa-solid fa-graduation-cap"></i><?php echo $lang["curri_form"]; ?></h2>
            <div class="contingut">
                <div>
                    <h3>2025</h3>
                    <p><?php echo $lang["curri_form_07"]; ?></p>
                    <p>Tau Formar </p>
                </div>
                <div>
                    <h3>2025</h3>
                    <p><?php echo $lang["curri_form_06"]; ?></p>
                    <p>Tau Formar </p>
                </div>
                <div>
                    <h3>2024</h3>
                    <p><?php echo $lang["curri_form_05"]; ?></p>
                    <p>Domestika</p>
                </div>
                <div>
                    <h3>2021</h3>
                    <p><?php echo $lang["curri_form_04"]; ?></p>
                    <p>Udemy</p>
                </div>
                <div>
                    <h3>2009-2010</h3>
                    <p><?php echo $lang["curri_form_03"]; ?></p>
                    <p>Escola Eina</p>
                </div>
                <div>
                    <h3>2003</h3>
                    <p><?php echo $lang["curri_form_02"]; ?></p>
                    <p>Soft Obert</p>
                </div>
                <div>
                    <h3>1995-1999</h3> 
                    <p><?php echo $lang["curri_form_01"]; ?></p>
                    <p>Elisava</p>
                </div>
            </div>
        </div>
    </main>
    <!--------------------------------------------------------------->
    <!-------------------        REFERÈNCIES     -------------------->
    <!--------------------------------------------------------------->
    <footer>
        <div class="referencies">
            <h2><i class="fa-solid fa-users"></i><?php echo $lang["curri_ref"];?></h2>
            <div class="contingut">
                <p><?php echo $lang["curri_ref_01"];?></p>
                <p><?php echo $lang["curri_ref_02"];?></p>
                <p><?php echo $lang["curri_ref_03"];?></p>
            </div>
        </div>
    </footer>
</body>
</html>