document.addEventListener('DOMContentLoaded', () => {
    // Crear el objeto URLSearchParams para leer la URL
    const parametros = new URLSearchParams(window.location.search);
    
    // Obtener el valor del parámetro 'accion'
    const accionDeseada = '#'+parametros.get('accion');
    const seccionDeseada = parametros.get('seccio');
    
    if (accionDeseada) {
        
        // Usamos un 'switch' o un 'if/else' para controlar qué función llamar
       if(seccionDeseada == 'web'){
            obreCarruselWeb(accionDeseada);
        }else if(seccionDeseada == 'corp'){
            obreCarruselGrafic(accionDeseada);
        }else if(seccionDeseada == 'ilu'){
            obreCarruselIlu(accionDeseada);
        }
    }
    
});
document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.slider-track');
    const groups = document.querySelectorAll('.slide-group');
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');

    let currentGroup = 0;
    const groupCount = groups.length;

    // Obtener el ancho de un solo grupo para el desplazamiento (en píxeles)
    // Asegúrate de que este valor coincida con el ancho establecido en CSS para .slide-group
    const groupWidth = groups[0] ? groups[0].offsetWidth : 0; 
    
    // Función de actualización para mover la pista
    function updateSlider() {
        const offset = -currentGroup * groupWidth;
        track.style.transform = `translateX(${offset}px)`;
    }

    // Navegación al siguiente grupo
    nextBtn.addEventListener('click', () => {
        if (currentGroup < groupCount - 1) {
            currentGroup++;
        } else {
            currentGroup = 0; // Opción: volver al primer grupo
        }
        updateSlider();
    });

    // Navegación al grupo anterior
    prevBtn.addEventListener('click', () => {
        if (currentGroup > 0) {
            currentGroup--;
        } else {
            currentGroup = groupCount - 1; // Opción: ir al último grupo
        }
        updateSlider();
    });

    // Ajustar el ancho inicial si es necesario (ejecutar en el evento de carga y redimensionamiento)
    window.addEventListener('resize', () => {
        // Recalcular groupWidth y actualizar el slider al redimensionar si el ancho es flexible
        // Para este ejemplo de ancho fijo, no es estrictamente necesario, pero es buena práctica.
    });
});



function tancarCookies(){
    let cookies = document.querySelector("#cookies");
    cookies.classList.toggle('cookiesoff');
    cookies.classList.remove('cookieson');
    cookiesOk = false;
}
function acceptarCookies(){
    let cookies = document.querySelector("#cookies");
    cookies.classList.toggle('cookiesoff');
    cookies.classList.remove('cookieson');
    cookiesOk = true;
}
function refusarCookies(){
    let cookies = document.querySelector("#cookies");
    cookies.classList.toggle('cookiesoff');
    cookies.classList.remove('cookieson');
    cookiesOk = false;
}


function tancartextCookies(){
    let textCookies = document.querySelector("#textCookies");
    textCookies.classList.toggle('textCookiesoff');
    textCookies.classList.remove('textCookies');
    textCookies = false;
}
function obrirtextCookies(){
    let textCookies = document.querySelector("#textCookies");
    textCookies.classList.toggle('textCookies');
    textCookies.classList.remove('textCookiesoff');
    textCookies = false;
}

function tancarPrivacidad(){
    let privacidad = document.querySelector("#privacidad");
    privacidad.classList.toggle('privacidadoff');
    privacidad.classList.remove('privacidadon');
}
function obrirPrivacidad(){
    let privacidad = document.querySelector("#privacidad");
    //alert(privacidad);
    privacidad.classList.toggle('privacidadon');
    privacidad.classList.remove('privacidadoff');
}

function obrirWeb(){
    let galeria = document.querySelector("#web");
    let corp = document.querySelector("#corporatiu");
    let ilu = document.querySelector("#ilustracio");
    
    galeria.classList.replace("galeriaoff","galeriaon");
    corp.classList.replace("galeriaon","galeriaoff");
    ilu.classList.replace("galeriaon","galeriaoff");
    
    //window.location.href = "index.html#web";
}
function obrirCorporatiu(){
    let galeria = document.querySelector("#corporatiu");
    let web = document.querySelector("#web");
    let ilu = document.querySelector("#ilustracio");
    
    galeria.classList.replace("galeriaoff","galeriaon");
    web.classList.replace("galeriaon","galeriaoff");
    ilu.classList.replace("galeriaon","galeriaoff");

    //window.location.href = "index.html#corporatiu";
}
function obrirIlustracio(){
    let galeria = document.querySelector("#ilustracio");
    let corp = document.querySelector("#corporatiu");
    let web = document.querySelector("#web");

    galeria.classList.replace("galeriaoff","galeriaon");
    web.classList.replace("galeriaon","galeriaoff");
    corp.classList.replace("galeriaon","galeriaoff");
    
    //window.location.href = "index.html#ilustracio";
}

function tancarGaleria(){
    let ilu = document.querySelector("#ilustracio");
    let corp = document.querySelector("#corporatiu");
    let web = document.querySelector("#web");
    //alert(web);
    ilu.classList.replace("galeriaon","galeriaoff");
    corp.classList.replace("galeriaon","galeriaoff");
    web.classList.replace("galeriaon","galeriaoff");
}


function obreCarruselWeb(iden){
    let web = document.querySelector(iden);
    web.classList.replace("carruselOff","carruselOn");
}
function obreCarruselGrafic(iden){
    let grafic = document.querySelector(iden);
    grafic.classList.replace("carruselOff","carruselOn");
}
function obreCarruselIlu(iden){
    let ilu = document.querySelector(iden);
    ilu.classList.replace("carruselOff","carruselOn");  
}


function tancarCarruselWeb(iden){
    let web = document.querySelector(iden);
    web.classList.replace("carruselOn","carruselOff");
}
function tancarCarruselGrafic(iden){
    let grafic = document.querySelector(iden);
    grafic.classList.replace("carruselOn","carruselOff");
}
function tancarCarruselIlu(iden){
    let ilu = document.querySelector(iden);
    ilu.classList.replace("carruselOn","carruselOff");
}

function enviarForm(){
    let nom = document.getElementById("nom").value;
    let mail = document.getElementById("mail").value;
    let missatge = document.getElementById("msg").value;
    let check = document.getElementById("politica").checked ? "Si":"No";
    
    if(check == "No"){
        alert("Has d'acceptar les Condicions de Privadesa per enviar un missatge.\nPrivadesa: " + check);
    }else{
        alert("Nombre: " + nom + " \nE-mail: " + mail + " \nMensaje: " + missatge + "\nPrivadesa: " + check);
    }
}