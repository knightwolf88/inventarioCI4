InstanciarTabla()

const ModalProducto = new bootstrap.Modal(document.querySelector('#modal-producto'));

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

function alerta(tipo, mensaje) {

    Toast.fire({
        icon: tipo,
        title: mensaje
    })
}

function InstanciarTabla() {
    tablaListado = new DataTable('#tablaListado', {
        ajax: {
            url: "/inventarioCI4/public/productos/listar", // Reemplaza con la URL de tu servidor PHP que proporciona los datos
            type: "POST", // Método HTTP para la solicitud
            dataType: "json",
            data: {}
        },
        destroy: true,
        processing: true,
        serverSide: false,
        responsive: true,
        stateSave: true,
        // scrollX: true, // Habilitar scroll horizontal
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": ">",
                "previous": "<"
            }
        },
        deferRender: true
    });
    $('#tablaListado').DataTable().search('').draw();
}

function limpiar() {
    document.getElementById('idproducto').value = '';
    document.getElementById('nombre').value = '';
}

function editarModal(id) {
    document.getElementById('idproducto').value = id;

    const data=new FormData();
    data.append('idproducto',id);
    fetch('/inventarioCI4/public/productos/datosProducto', {
        method: 'POST',
        body: data
    })
        .then(function (response) {
            if (response.ok) {
                return response.json()
            } else {
                throw "error ajax";
            }
        })
        .then(function (data) {   
            console.log(data);
            document.getElementById('nombre').value = data.nombre;
        })
        .catch(function (error) {
            console.log(error);
        });
}



function guardar() {

    const formProducto = new FormData(document.getElementById('anadirfrm'));

    //realizamos la peticion ajax
    fetch('/inventarioCI4/public/productos/insertar', {
        method: 'POST',
        body: formProducto
    })
        .then(function (response) {
            if (response.ok) {
                return response.json()
            } else {
                throw "error ajax";
            }
        })
        .then(function (data) {
            if (data.status == 'success') {
                alerta('success', 'producto registrado satisfactoriamente')
                InstanciarTabla();
                   ModalProducto.hide();
            } else {
                alerta('error', 'producto no pudo ser registrado')
            }
            console.log(data);
        })
        .catch(function (error) {
            console.log(error);
        });

}