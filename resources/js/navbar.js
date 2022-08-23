import Swal from "sweetalert2";

$(document).ready(function(){

    if(window.location.pathname == '/NeoNica360/Nosotros'){
        
        $('#ruta1').addClass('activado');

    }else if(window.location.pathname == '/NeoNica360/Galeria'){

        $('#ruta2').addClass('activado');

    }else if(window.location.pathname == '/NeoNica360/Mapa'){

        $('#ruta3').addClass('activado');

    }

});