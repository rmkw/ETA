<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap  CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!--bootstrapt JS-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        {{--scripts del chart guage y sus styles--}}
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>

        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <style>
            .highcharts-figure,
            .highcharts-data-table table {
                margin: 1px;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

        </style>

        <title>ETA</title>

        <!-- Fonts -->


        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}
            body{margin:0}
            a{background-color:transparent}[hidden]{display:none}
            html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,
            Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*, :after,:before{box-sizing:border-box;border:0 solid #e2e8f0}
            a{color:inherit;text-decoration:inherit}
            svg,video{display:block;vertical-align:middle}
            video{max-width:100%;height:auto}
            .bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}
            .bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}
            .border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}
            .border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}
            .justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}
            .text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}
            .ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}
            .ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}
            .min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}
            .px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}
            .right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}
            .text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}
            .text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}
            .text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
            .text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}
            .text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}
            .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}
            .text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}
            .underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
            .w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}
                .sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}
                .sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}
                .sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}
                .md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}
            @media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}
                .dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}
                .dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}
                .dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}
                .dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
                .dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Helvetica-Normal', sans-serif;
            }
            .card1{

                transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);

                cursor: pointer;
            }

            .card1:hover{
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
            }
        </style>




    </head>
    <body>



    <!-- header -->
    <header class="p-3" style="background-color: #706F6F">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-1">
                    <a class="navbar-brand" href="#">
                        <img src="assets/INEGI_c-modified.png" alt="inegi" width="auto" height="24" class="d-inline-block align-text-top">
                    </a>
                </div>

                <form class="col-md-4 col-sm-12 mb-1" role="search">
                    <input type="search" class="form-control form-control-sm form-control-dark " size="40"  placeholder="Search..." aria-label="Search">
                </form>

                <div class="col-md-4 col-sm-12 ">
                    <ul class="nav col ">
                        <li><a href="#" class="nav-link px-2 text-white">Homes</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">More</a></li>
                        <button type="button" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </button>

                    </ul>
                </div>
            </div>


        </div>

    </header>

            <div class="text-success">
                <hr  style="opacity: 100; margin-top: 0;  border: 5px solid #0077CB ">
            </div>




    <div class="container-fluid pb-5 pt-4 mt-2" style="background-color: #ededed; height: 30rem">
        <div class="container">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000" >

                        <div class="row mt-2 d-block w-100">
                            <div class="col-sm-12 mb-3">
                                <div class="card" style="height: 100%; background-color: #0077CB; box-shadow: 5px 10px 5px darkgray">
                                    <div class="card-body">
                                        <div class="card " style="height: 100%; background-color: #ffffff">
                                            <div class="card-body">
                                                <div class="row w-100">
                                                    <div class="col-md-9 col-sm-12 ">
                                                        <h4 class="card-title" style="color: #0077CB; text-align: center">¿Qué es el MDEA?</h4>
                                                        <h6 class="card-text mb-2" style="color: black;">El <a style="color: #0077CB"  href="https://www.cepal.org/es/publicaciones/46644-marco-desarrollo-estadisticas-ambientales-mdea-2013" target="_blank"><u>MDEA</u></a> es un marco conceptual y estadístico flexible y de usos múltiples,
                                                            comprehensivo e integral en su naturaleza y que delimita el alcance de las
                                                            estadísticas ambientales.
                                                            Proporciona una estructura organizativa para guiar la recolección y compilación
                                                            de estadísticas ambientales a escala nacional. Reúne datos de diferentes áreas
                                                            temáticas y fuentes relevantes, abarca los temas y aspectos ambientales que son
                                                            pertinentes para el análisis de las políticas y la toma de decisiones.
                                                        </h6>
                                                        <p class="card-text mb-0" style="color: black">El objetivo principal del MDEA es guiar la formulación de los programas de estadísticas
                                                            ambientales a través de:
                                                        </p>
                                                        <ul style="color: black">
                                                            <li>
                                                                Definir el alcance de las estadísticas ambientales e identificar
                                                                sus componentes.
                                                            </li>
                                                            <li>
                                                                Contribuir a la evaluación de las necesidades de datos, fuentes, disponibilidad y brechas.
                                                            </li>
                                                            <li>
                                                                Guiar el desarrollo de los procesos multi propósito de recolección de
                                                                datos y bases de datos.
                                                            </li>
                                                            <li>
                                                                Apoyar en la coordinación y organización de estadísticas ambientales, dado el carácter inter-institucional de dicho ámbito.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <img class="img-fluid"  src="{{asset('/assets/logomdea.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000" >
                        <div class="row justify-content-center ">

                            <div class="col-md-12 col-sm-12 ">
                                <img src="{{asset('/assets/balazo2.png')}}" class="img-fluid" alt="..." style="height: 25rem; display: block; margin: auto;">
                            </div>



                        </div>

                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="row justify-content-center ">

                            <div class="col-md-12 col-ms-12">
                                <img src="{{asset('/assets/balazo3.png')}}" class="img-fluid " alt="..." style="height: 25rem; display: block; margin: auto;">
                            </div>
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </div>


    <div class="container-fluid pb-5 pt-4 mt-2" style="background-color: #ffffff">
        <div class="container">
            <div class="row mt-2">
                <div class="col-sm-12">
                    <div class="text-success">
                        <hr>
                    </div>
                    <h3 style="color: #0077CB; text-align: center">Componentes del Marco para el Desarrollo de las Estadísticas Ambientales</h3>
                    <div class="text-success">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="hstack gap-3 row">
                <div class="col-md-4 col-sm-12">
                    <figure class="highcharts-figure">
                        <div id="container" ></div>
                    </figure>
                    <script>
                        Highcharts.chart('container', {

                            chart: {
                                type: 'gauge',
                                plotBackgroundColor: null,
                                plotBackgroundImage: null,
                                plotBorderWidth: 0,
                                plotShadow: false,
                                height: '88%'
                            },

                            title: {
                                text: 'Variables cubiertas del MDEA',
                                style:{
                                    "fontSize":"1.5rem"
                                }
                            },

                            pane: {
                                startAngle: -90,
                                endAngle: 89.9,
                                background: null,
                                center: ['50%', '75%'],
                                size: '120%'
                            },

                            // the value axis
                            yAxis: {
                                min: 0,
                                max: 100,
                                tickPixelInterval: 72,
                                tickPosition: 'inside',
                                tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
                                tickLength: 20,
                                tickWidth: 2,
                                minorTickInterval: null,
                                labels: {
                                    distance: 20,
                                    style: {
                                        fontSize: '1rem'
                                    }
                                },
                                plotBands: [{
                                    from: 0,
                                    to: 10,
                                    color: '#43aaff', //
                                    thickness: 25
                                },{
                                    from: 10,
                                    to: 30,
                                    color: '#088fff', //
                                    thickness: 25
                                }, {
                                    from: 30,
                                    to: 50,
                                    color: '#007ae0', //
                                    thickness: 25
                                },{
                                    from: 50,
                                    to: 70,
                                    color: '#0065b9', //
                                    thickness: 25
                                }, {
                                    from: 70,
                                    to: 90,
                                    color: '#005092', //
                                    thickness: 25
                                },{
                                    from: 90,
                                    to: 100,
                                    color: '#003057', //
                                    thickness: 25
                                }]
                            },

                            series: [{
                                name: 'Porcentaje',
                                data: [70],
                                tooltip: {
                                    valueSuffix: ' %'
                                },
                                dataLabels: {
                                    format: '{y} %',
                                    borderWidth: 0,
                                    color: (
                                        Highcharts.defaultOptions.title &&
                                        Highcharts.defaultOptions.title.style &&
                                        Highcharts.defaultOptions.title.style.color
                                    ) || '#333333',
                                    style: {
                                        fontSize: '1.5rem'
                                    }
                                },
                                dial: {
                                    radius: '80%',
                                    backgroundColor: 'gray',
                                    baseWidth: 12,
                                    baseLength: '0%',
                                    rearLength: '0%'
                                },
                                pivot: {
                                    backgroundColor: 'gray',
                                    radius: 7
                                }

                            },],


                        },function(chart) {
                            var arr = chart.options.exporting.buttons.contextButton.menuItems;
                            var index = arr.indexOf("viewData");
                            if (index !== -1) arr.splice(index, 1);
                        });

                        // Add some life
                        // setInterval(() => {
                        //     const chart = Highcharts.charts[0];
                        //     if (chart && !chart.renderer.forExport) {
                        //         const point = chart.series[0].points[0],
                        //             inc = Math.round((Math.random() - 0.5) * 20);
                        //
                        //         let newVal = point.y + inc;
                        //         if (newVal < 0 || newVal > 90) {
                        //             newVal = point.y - inc;
                        //         }
                        //
                        //         point.update(newVal);
                        //     }
                        //
                        // }, 3000);
                        //first commit 20 sep
                    </script>
                </div>
                <hr style="border:none; border-left:3px solid hsl(207, 100%, 17%); height:50vh;width:1px;">
                <div class="col-md-7 col-sm-12">
                    <figure class="highcharts-figure2">
                        <div id="container2"></div>
                    </figure>
                    <script>
                        Highcharts.chart('container2', {
                            chart: {
                                type: 'bar',
                                height: '78%',
                                plotShadow: false,
                                plotBorderWidth: 0,
                            },
                            title: {
                                text: 'Variables MDEA',
                                style:{
                                    "fontSize":"1.5rem",


                                }

                            },

                            subtitle: {
                                text: ''
                            },
                            xAxis: {
                                categories: [''],

                                title: {
                                    text: 'Variables cubiertas'
                                }
                            },
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Porcentaje',
                                    align: 'high'
                                },
                                labels: {
                                    overflow: 'justify'
                                }
                            },
                            tooltip: {
                                valueSuffix: ' %'
                            },
                            plotOptions: {
                                bar: {
                                    dataLabels: {
                                        enabled: true
                                    }
                                }
                            },
                            legend: {

                                layout: 'vertical',
                                align: 'center',
                                verticalAlign: 'bottom',
                                x: 10,
                                y: 10,
                                floating: false,
                                borderWidth: 1,
                                backgroundColor:
                                    Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',


                            },
                            credits: {
                                enabled: false
                            },
                            series: [
                                {name:'Componentes:',
                                    color:'white'},
                                {
                                    name: '1: Condiciones y calidad ambiental',
                                    data: [80, ],
                                    color:'#003057'
                                }, {
                                    name: '2: Recursos ambientales y su uso',
                                    data: [51, ],
                                    color:'#005092'
                                }, {
                                    name: '3: Residuos',
                                    data: [78, ],
                                    color: '#0065b9'
                                }, {
                                    name: '4: Eventos extremos y desastres',
                                    data: [60, ],
                                    color: '#007ae0'
                                }, {
                                    name: '5: Asentamientos humanos y salud ambiental',
                                    data: [90, ],
                                    color:'#088fff'
                                }, {
                                    name: ' 6: Protección, gestión y participación/acción ambiental',
                                    data: [80, ],
                                    color:'#43aaff'
                                }]
                        });

                    </script>
                </div>
            </div>











        </div>
    </div>


    <div class="container-fluid pb-5 pt-4 mt-2" style="background-color: #ffffff">

            <div class="container">
                <div class="row mt-1 w-100">
                    <div class="col-sm-4 card1 ">
                        <img src="{{asset('/assets/componente1.png')}}" class="img-fluid" style="max-width: 18%; height: auto" alt="...">
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-2" >{{$componentes[0]->nombre}}</h4>
                                <h6 class="" style="margin-bottom: 2rem; color: #706F6F">{{$componentes[0]->def_corta}}</h6>
                            </div>
                        </div>
                        <hr  style="opacity: 100; border: 3px solid #0077CB ">


                    </div>
                    <div class="col-sm-4 card1">
                        <img src="{{asset('/assets/componente2.png')}}" class="img-fluid " style="max-width: 18%; height: auto" alt="...">
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-2">{{$componentes[1]->nombre}}</h4>
                                <h6 class="" style="margin-bottom: 3.2rem; color: #706F6F">{{$componentes[1]->def_corta}}</h6>
                            </div>
                        </div>
                        <hr  style="opacity: 100; border: 3px solid #0077CB ">


                    </div>
                    <div class="col-sm-4 card1">
                        <img src="{{asset('/assets/componente3.png')}}" class="img-fluid" style="max-width: 18%; height: auto" alt="...">
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-2">{{$componentes[2]->nombre}}</h4>
                                <h6 class="" style="margin-bottom: 3.2rem; color: #706F6F">{{$componentes[2]->def_corta}}</h6>
                            </div>
                        </div>
                        <hr  style="opacity: 100; border: 3px solid #0077CB ">



                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-4 card1">
                        <img src="{{asset('/assets/componente4.png')}}" class="img-fluid" style="max-width: 20%; height: auto" alt="...">
                        <h4 class="mt-2 card-title">{{$componentes[3]->nombre}}</h4>
                        <h6 class="" style="margin-bottom: 6.5rem; color: #706F6F">{{$componentes[3]->def_corta}}</h6>
                        <hr  style="opacity: 100; border: 3px solid #0077CB ">

                    </div>
                    <div class="col-sm-4 card1">
                        <img src="{{asset('/assets/componente5.png')}}" class="img-fluid" style="max-width: 20%; height: auto" alt="...">
                        <h4 class="mt-2">{{$componentes[4]->nombre}}</h4>
                        <h6 class="" style="margin-bottom: 3rem; color: #706F6F">{{$componentes[4]->def_corta}}</h6>
                        <hr  style="opacity: 100; border: 3px solid #0077CB ">


                    </div>
                    <div class="col-sm-4 card1">
                        <img src="{{asset('/assets/componente6.png')}}" class="img-fluid" style="max-width: 20%; height: auto" alt="...">
                        <h4 class="mt-2">{{$componentes[5]->nombre}}</h4>
                        <h6 class="" style="margin-bottom: 6rem; color: #706F6F">{{$componentes[0]->def_corta}}</h6>
                        <hr  style="opacity: 100; border: 3px solid #0077CB ">



                    </div>
                </div>
            </div>


    </div>

{{--    campo en blanco--}}
    <div class="row">
        <div class="col-12">

        </div>
    </div>




<!--footers-->
    <div class="container-fluid" style="background-color: #0077CB; margin-top: 5rem">

            <footer class="bd-footer">
                <div class="pt-4 pb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg text-white d-flex align-items-center" style="margin-right: 10rem">
                                <img class="img-fluid  d-block" style="height: 15%" src="assets/INEGI_c-modified.png">
                            </div>
                            <div class="col-lg">
                                <a style="color: white; font-weight: bold; font-size: 15px">Acerca del INEGI</a>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/inegi/quienes_somos.html" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Quíenes somos</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/app/marconormativo/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Marco normativo</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/transparencia/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Transparencia</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/servicios/api_indicadores.html" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Desarrolladores</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/app/spc/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Oportunidades de trabajo</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/eventos/otros/default.html" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Eventos</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/inegi/vendelealinegi/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Vendale al INEGI</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/inegi/armonizacion/contable/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Armonización contable</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/inegi/sma/politica/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Sistema de Manejo Ambiental</a></li>
                                </ul>
                            </div>

                            <div class="col-lg">
                                <a style="color: white; font-weight: bold; font-size: 15px">Contacto</a>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text" style="color: white">449 910 53 00</a></li>

                                </ul>
                            </div>

                            <div class="col-lg">
                                <a style="color: white; font-weight: bold; font-size: 15px">Sitios de interés</a>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="https://snieg.mx/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">SNIEG</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.snieg.mx/cni/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Catálogo Nacional de Indicadores</a></li>
                                    <li class="nav-item mb-2"><a href="http://cuentame.inegi.org.mx/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Cuéntame de México</a></li>
                                    <li class="nav-item mb-2"><a href="http://agenda2030.mx/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Objetivos de Desarrollo Sostenible</a></li>
                                    <li class="nav-item mb-2"><a href="http://www.ci.inegi.org.mx/" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Órgano Interno de Control</a></li>
                                    <li class="nav-item mb-2"><a href="http://www.ci.inegi.org.mx/AtencionCd.aspx" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Denuncias</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.inegi.org.mx/inegi/enlaces.html" target="_blank" class="nav-link p-0 text" style="color: white; font-size: 14px">Enlaces de interés</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    <div class="container-fluid" style="background-color: #706F6F;">
        <footer class="align-items-center py-3 " >
            <p class="text-center mb-0" style="color: white">Derechos reservados. &copy; INEGI </p>
        </footer>
    </div>
    </body>
</html>
