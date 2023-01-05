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

    <style>
        main {
            height: 100vh;
            /*height: -webkit-fill-available;*/
            max-height: 92.9vh;
            overflow-x: auto;
            overflow-y: hidden;
        }
        .dropdown-toggle {
            outline: 0;
        }

        .btn-toggle {
            padding: .25rem .5rem;
            width: 100%;
            font-weight: 600;
            color: rgba(0, 0, 0, .65);
            background-color: transparent;
        }

        .btn-toggle:hover,
        .btn-toggle:focus {
            color: rgba(0, 0, 0, .85);
            /* background-color: #c2e0f1; */
        }

        .btn-toggle::before {
            width: 1.25em;
            line-height: 0;
            content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
            transition: transform .35s ease;
            transform-origin: .5em 50%;
        }

        .btn-toggle[aria-expanded="true"] {
            color: rgba(255, 255, 255, 0.85);
            background: #0077CB;
        }

        .btn-toggle[aria-expanded="true"]::before {
            transform: rotate(90deg);
        }

        .btn-toggle-nav a {
            padding: .1875rem .5rem;
            margin-top: .125rem;
            margin-left: 1.25rem;
        }

        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
            /*background-color: #d2f4ea;*/
        }

        .scrollarea {
            overflow-y: auto;
            padding-top: 1rem;
            padding-left: 4rem;
            padding-right: 4rem;
        }
    </style>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .scrollarea::-webkit-scrollbar {
            width: 8px;     /* Tamaño del scroll en vertical */
            height: 8px;    /* Tamaño del scroll en horizontal */
            display: none;  /* Ocultar scroll */
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <script  type = "text/javascript">
        function clickComponent() {
            let collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
            let collapseList =
                collapseElementList.map(function (collapseEl) {
                    if (collapseEl.classList.contains("show"))
                        new bootstrap.Collapse(collapseEl)
                })
        }
        function clickSubComponent(){
            let collapseElementList = [].slice.call(document.querySelectorAll('.subComponent'))
            let collapseList =
                collapseElementList.map(function (collapseEl) {
                    if (collapseEl.classList.contains("show"))
                        new bootstrap.Collapse(collapseEl)
                })
            let collapseSonsList = [].slice.call(document.querySelectorAll('.topic'))
            let collapseSons =
                collapseSonsList.map(function (collapseSo) {
                    if (collapseSo.classList.contains("show"))
                        new bootstrap.Collapse(collapseSo)
                })
        }
        function clickTopic(){
            let collapseElementList = [].slice.call(document.querySelectorAll('.topic'))
            let collapseList =
                collapseElementList.map(function (collapseEl) {
                    if (collapseEl.classList.contains("show"))
                        new bootstrap.Collapse(collapseEl)
                })
        }
    </script>
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
        <div class="row items-center" style="align-items: center !important;">

            <div class="col-md-4 col-sm-12 m-0">
                <a class="navbar-brand"  id="inegi_logo" onclick="window.location='{{@route("dashboard")}}'">
                    <img src="assets/INEGI_c-modified.png" alt="inegi" width="auto" height="24"
                         class="d-inline-block align-text-top">
                </a>
            </div>

            <form class="col-md-4 col-sm-12 m-0" role="search">
                <input type="search" class="form-control form-control-sm form-control-dark " size="40"
                       placeholder="Search..." aria-label="Search">
            </form>

<!--            <div class="col-md-4 col-sm-12 ">-->
<!--                <ul class="nav col ">-->
<!--                    <li><a href="#" class="nav-link px-2 text-white" onclick="window.location='{{@route("dashboard")}}'">Homes</a></li>-->
<!--                    <li><a href="#" class="nav-link px-2 text-white" onclick="window.location='{{@route("busqueda")}}'">Features</a></li>-->
<!--                    <li><a href="#" class="nav-link px-2 text-white">More</a></li>-->
<!--                    <button type="button" class="btn btn-outline-light me-2">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"-->
<!--                             class="bi bi-person-fill" viewBox="0 0 16 16">-->
<!--                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>-->
<!--                        </svg>-->
<!--                    </button>-->
<!---->
<!--                </ul>-->
<!--            </div>-->
        </div>


    </div>

</header>
<div class="text-success">
    <hr style="opacity: 100; margin: 0;  border: 5px solid #0077CB ">
</div>

<main class="d-flex flex-nowrap ">

    <div class="d-flex flex-column flex-shrink-0 p-0 bg-white scrollarea" style="width: 20rem; height: 100%; border-right: #c5c8ce solid .1rem">

        <ul class="list-unstyled">
            @foreach($componentes as $componente)
            <li class=""
                onclick="clickComponent()">
                <button class="btn-toggle d-inline-flex align-items-center collapsed
                    text-sm-start ps-2 py-3" style="border: 0;"

                        data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#comp_{{$componente->id_comp}}">
                    {{$componente->id_comp.'.- '.$componente->nombre}}
                </button>
            <li class="border-top my-0"></li>
            <div class="collapse component" id="comp_{{$componente->id_comp}}" style="background: #0077CB">

                <ul class="list-unstyled ps-0"  style=" background: #E4E7ED">
                    @foreach($subComponentes as $subComponente)
                    @if($subComponente->id_comp === $componente->id_comp)
                    <li class="" onclick="clickSubComponent()" >
                        <button
                            class="btn-toggle d-inline-flex align-items-center
                                            collapsed ps-3 font-italic  text-sm-start"
                            style="font-size: 1rem; width: 100%; border: 0;"
                            data-bs-toggle="collapse" aria-expanded="false"
                            data-bs-target="#sub_{{$subComponente->id}}"
                            data-bs-parent="#comp_{{$componente->id_comp}}">
                            {{$componente->id_comp.'.'.$subComponente->id_sub.'.- '.$subComponente->nombre}}
                        </button>
                    <li class="border-top "></li>
                    <div class="collapse subComponent" id="sub_{{$subComponente->id}}">
                        <ul class="list-unstyled ps-0"   style=" background: #F0F3FA">
                            @foreach($topicos as $topico)
                            @if($topico->id_sub === $subComponente->id)
                            <li class=""  onclick="clickTopic()">
                                <button
                                    class="btn-toggle d-inline-flex align-items-center collapsed
                                                        ps-4  text-sm-start"
                                    style="font-size: 0.9rem; width: 100%; border: 0;"
                                    data-bs-toggle="collapse" aria-expanded="false"
                                    data-bs-target="#top_{{$topico->id}}"
                                    data-bs-parent="#sub_{{$subComponente->id}}">

                                    {{$componente->id_comp.'.'.$subComponente->id_sub.'.'.$topico->id_top.'.- '.$topico->nombre}}
                                </button>
                            <li class="border-top"></li>
                            <div class="collapse topic" id="top_{{$topico->id}}">
                                <ul class="btn-toggle-nav list-unstyled"  style=" background: #f8f9fc">
                                    @foreach($variables as $variable)
                                    @if($variable->id_top === $topico->id)
                                    <li><a href="#" class="text-decoration-underline link-dark
                                                            d-inline-flex text-decoration-none ps-5 text-sm-start" style="font-size: 0.9rem">
                                            {{$componente->id_comp.'.'.$subComponente->id_sub.'.'.$topico->id_top.'.'.$variable->id_var.'.- '.$variable->nombre}}</a>
                                    </li>
                                    <li class="border-top"></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            </li>
                            @endif
                            @endforeach


                        </ul>
                    </div>
                    </li>
                    @endif
                    @endforeach


                </ul>
            </div>
            </li>
            @endforeach


        </ul>

    </div>


    <div class="container-fluid scrollarea" style=" background: rgba(248,249,252,0.55) !important;">
        <div class="row">
            <div class="col-md-6">
                <label for="country" class="form-label">Año</label>
                <select class="form-select" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid country.
                </div>
            </div>

            <div class="col-md-6">
                <label for="state" class="form-label">Area</label>
                <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
        </div>

        <div class="row" style="height: 10rem; background-color: #0077CB; margin: 1rem">
            <div class="col" style="color: white">
                <p>Lugar para parametros adicionales</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Componente</th>
                        <th>SubComponente</th>
                        <th>Topico</th>
                        <th>Variable</th>
                        <th>Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($componentes as $componente)
                        @foreach($subComponentes as $subComponente)
                            @if($subComponente->id_comp === $componente->id_comp)
                                @foreach($topicos as $topico)
                                    @if($topico->id_sub === $subComponente->id)
                                        @foreach($variables as $variable)
                                            @if($variable->id_top === $topico->id)
                                                <tr>
                                                    <td>{{$componente->id_comp}}</td>
                                                    <td>{{$subComponente->id_sub}}</td>
                                                    <td>{{$topico->id_top}}</td>
                                                    <td>{{$variable->id_var}}</td>
                                                    <td>{{$variable->nombre}}</td>

                                                </tr>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="text-align:center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14811.842882814206!2d-102.28914265!3d21.85905075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1669239947361!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-2"></div>
        </div>




    </div>


</main>
</body>
</html>
