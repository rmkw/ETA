<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eje Temático del Agua">
    <meta name="author" content="JASON & ELEYE">

    <title>Eje Temático del Agua</title>
    <link rel="shortcut icon" href="assets/logomdea.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">


    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">


    <script>
        $(document).ready(function() {
             $('#example').DataTable({

                language: {
                    "decimal": ",",
                    "thousands": ".",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast":"Último",
                        "sNext":"Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing":"Cargando..."
                },
                responsive: true,





            });





        } );

    </script>
</head>
<body>
<header class="p-3" style="background-color: #706F6F">

    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-12 mb-1">
                <a class="navbar-brand" href="#">
                    <img src="assets/INEGI_c-modified.png" alt="inegi" width="auto" height="24"
                         class="d-inline-block align-text-top">
                </a>
            </div>

            <form class="col-md-4 col-sm-12 mb-1" role="search">
                <input type="search" id="elinput" class="form-control form-control-sm form-control-dark " size="40"
                       placeholder="Search..."  >

            </form>

            <div class="col-md-4 col-sm-12 ">
                <ul class="nav col ">
                    <li><a href="#" class="nav-link px-2 text-white" >Homes</a></li>
                    <li><a href="#" class="nav-link px-2 text-white" >Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">More</a></li>
                    <button type="button" class="btn btn-outline-light me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </button>

                </ul>
            </div>
        </div>


    </div>

</header>
<div class="text-success">
    <hr style="opacity: 100; margin-top: 0;  border: 5px solid #0077CB ">
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col">


            <ul id="resultado">

            </ul>

        </div>
    </div>
</div>

<script>
    const cachainput = document.querySelector('#elinput');
    const resultado = document.querySelector('#resultado');
    let datillos;
    let datilloSubc;
    let datillosTop;
    let datillosVar;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });
    $.ajax({
        type:"GET",
        url:"/traer",
        // data:{
        //     id:id,
        //     nombre: nombre,
        //     apellidos: apellidos,
        // },
        success:function(namesComponent){
            console.log(namesComponent);
            datillos = namesComponent;
            for (const  namesComponentElement of namesComponent) {
                console.log(namesComponentElement.nombre)
            }

            // return filtrar(namesComponent)

        },
        error:function(){
            alert("Error");
        }
    });

    $.ajax({
        type:"GET",
        url:"/traerSub",
        // data:{
        //     id:id,
        //     nombre: nombre,
        //     apellidos: apellidos,
        // },
        success:function(nameSubcomponent){
            console.log(nameSubcomponent);
            datilloSubc = nameSubcomponent;
            for (const  nameSubcomponentElement of nameSubcomponent) {
                console.log(nameSubcomponentElement.nombre)
            }

            // return filtrar(namesComponent)

        },
        error:function(){
            alert("Error");
        }
    });

    $.ajax({
        type:"GET",
        url:"/traerTop",
        // data:{
        //     id:id,
        //     nombre: nombre,
        //     apellidos: apellidos,
        // },
        success:function(nameTopcomponent){
            console.log(nameTopcomponent);
            datillosTop = nameTopcomponent;
            for (const  nameTopElement of nameTopcomponent) {
                console.log(nameTopElement.nombre)
            }

            // return filtrar(namesComponent)

        },
        error:function(){
            alert("Error");
        }
    });

    $.ajax({
        type:"GET",
        url:"/traerVar",
        // data:{
        //     id:id,
        //     nombre: nombre,
        //     apellidos: apellidos,
        // },
        success:function(nameVarcomponent){
            console.log(nameVarcomponent);
            datillosVar = nameVarcomponent;
            for (const  nameVarElement of nameVarcomponent) {
                console.log(nameVarElement.nombre)
            }

            // return filtrar(namesComponent)

        },
        error:function(){
            alert("Error");
        }
    });

    const filtrar = ()=>{


        resultado.innerHTML = '';

        const textominuscula = cachainput.value.toLowerCase();

        if (textominuscula !== '' ) {

            resultado.innerHTML += `<h4>Componentes</h4>`

            for (const namesComponentElement of datillos) {

                let nombre = namesComponentElement.nombre.toLowerCase();

                if (nombre.indexOf(textominuscula) !== -1) {

                    resultado.innerHTML += `

                          <li class="">${namesComponentElement.nombre}</li>
                `
                }
            }

            resultado.innerHTML += `<h4>Subcomponentes</h4>`

            for (const nameSubcomponentElement of datilloSubc) {

                let nombre = nameSubcomponentElement.nombre.toLowerCase();

                if (nombre.indexOf(textominuscula) !== -1) {

                    resultado.innerHTML += `
                          <li class="">${nameSubcomponentElement.nombre}</li>
                `
                }
            }

            resultado.innerHTML += `<h4>Topicos</h4>`

            for (const nameTopElement of datillosTop) {

                let nombre = nameTopElement.nombre.toLowerCase();

                if (nombre.indexOf(textominuscula) !== -1) {

                    resultado.innerHTML += `
                          <li class="">${nameTopElement.nombre}</li>
                `
                }
            }

            resultado.innerHTML += `<h4>Variables</h4>`

            for (const nameVarElement of datillosVar) {

                let nombre = nameVarElement.nombre.toLowerCase();

                if (nombre.indexOf(textominuscula) !== -1) {

                    resultado.innerHTML += `
                          <li class="">${nameVarElement.nombre}</li>
                `
                }
            }




        }
    }

    cachainput.addEventListener('keyup', filtrar)
</script>
</body>
</html>
