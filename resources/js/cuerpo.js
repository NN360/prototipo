import Swal from "sweetalert2";

$(document).ready(function () {
    
    $('.boton_nosotros').on('click', function(){
        Swal.fire({
            toast: true,
            icon: 'warning',
            title: 'Te lo adverti',
            animation: false,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    });

});