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
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <style>

            .highcharts-data-table table {
                min-width: 35rem;
                max-width: 35rem;
                margin: 1em auto;
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

    <!-- scripts -->

    <!-- header -->
    <header class="p-3" style="background-color: #706F6F">

        <div class="container">

            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <a class="navbar-brand" href="#">
                    <img src="assets/INEGI_c-modified.png" alt="inegi" width="auto" height="24" class="d-inline-block align-text-top">
                </a>
                <div class="col"></div>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-sm form-control-dark " size="40"  placeholder="Search..." aria-label="Search">
                </form>
                <div class="text-end">
                    <ul class="nav col">
                        <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">More</a></li>
                        <button type="button" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg></button>

                    </ul>

                </div>
            </div>
        </div>
    </header>

            <div class="text-success">
                <hr  style="opacity: 100; margin-top: 0;  border: 5px solid #0077CB ">
            </div>


    <div class="container-fluid pb-5 pt-4 mt-2" style="background-color: #ffffff">

        <div class="container">

            <div class="row">
                <div class="col-sm-6 mb-2">

                        <div class="card-body">

                            <figure class="highcharts-figure">
                                <div id="container"></div>
                            </figure>
                            <script>
                                Highcharts.chart('container', {
                                    colors: ['#0065B9FF'],
                                    chart: {
                                        type: 'column',
                                        inverted: true,
                                        polar: true
                                    },
                                    title: {
                                        text: 'VARIABLES CUBIERTAS POR COMPONENTE'
                                    },
                                    tooltip: {
                                        outside: true
                                    },
                                    pane: {
                                        size: '85%',
                                        innerSize: '20%',
                                        endAngle: 270
                                    },
                                    xAxis: {
                                        tickInterval: 1,
                                        labels: {
                                            align: 'right',
                                            useHTML: true,
                                            allowOverlap: true,
                                            step: 1,
                                            y: 3,
                                            style: {
                                                fontSize: '13px'
                                            }
                                        },
                                        lineWidth: 0,
                                        categories: [
                                            '1: Condiciones <span class="f16"><span id="flag" class="flag no">' +
                                            '</span></span>',
                                            '2: Recursos <span class="f16"><span id="flag" class="flag us">' +
                                            '</span></span>',
                                            '3: Residuos <span class="f16"><span id="flag" class="flag de">' +
                                            '</span></span>',
                                            '4: Eventos <span class="f16"><span id="flag" class="flag at">' +
                                            '</span></span>',
                                            '5: Asentamientos <span class="f16"><span id="flag" class="flag ca">' +
                                            '</span></span>',
                                            '6: Protección <span class="f16"><span id="flag" class="flag mx">' +
                                            '</span></span>'
                                        ]
                                    },
                                    yAxis: {
                                        crosshair: {
                                            enabled: true,
                                            color: '#333'
                                        },
                                        lineWidth: 0,
                                        tickInterval: 25,
                                        reversedStacks: false,
                                        endOnTick: true,
                                        showLastLabel: true
                                    },
                                    plotOptions: {
                                        column: {
                                            stacking: 'normal',
                                            borderWidth: 0,
                                            pointPadding: 0,
                                            groupPadding: 0.15
                                        }
                                    },
                                    series: [{
                                        name: ' ',
                                        data: [148, 113, 104, 71, 77, 54],
                                    }]
                                });
                            </script>

                        </div>
                </div>

                <div class="col-sm-6 mb-2">
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="container2"></div>
                            </figure>
                            <script>
                                Highcharts.chart('container2', {
                                    chart: {
                                        type: 'bar',
                                        height: '75%',
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
                                        align: 'right',
                                        verticalAlign: 'top',
                                        x: 0,
                                        y: 22,
                                        floating: true,
                                        borderWidth: 0,
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
            <div class="row">
                <div class="col-sm-6 mb-2">
                        <div class="card-body">

                            <figure class="highcharts-figure">
                                <div id="container4"></div>
                            </figure>
                            <script>
                                Highcharts.chart('container4', {

                                    chart: {
                                        type: 'gauge',
                                        plotBackgroundColor: null,
                                        plotBackgroundImage: null,
                                        plotBorderWidth: 0,
                                        plotShadow: false,
                                        height: '80%'
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
                                        center: ['50%', '70%'],
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
                                                fontSize: '14px'
                                            }
                                        },
                                        plotBands: [{
                                            from: 0,
                                            to: 25,
                                            color: '#6fa8dc', // green
                                            thickness: 20
                                        }, {
                                            from: 25,
                                            to: 75,
                                            color: '#0077C8', // yellow
                                            thickness: 20
                                        }, {
                                            from: 75,
                                            to: 90,
                                            color: '#003057', // red
                                            thickness: 20
                                        }]
                                    },

                                    series: [{
                                        name: 'Porcentaje',
                                        data: [90],
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
                                                fontSize: '16px'
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
                                            radius: 6
                                        }

                                    },],


                                });
                            </script>

                        </div>
                </div>

                <div class="col-sm-6 mb-2">
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="container3"></div>
                            </figure>
                            <script>
                                Highcharts.chart('container3', {
                                    chart: {
                                        type: 'bar',
                                        height: '75%',
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
                                        align: 'right',
                                        verticalAlign: 'top',
                                        x: 0,
                                        y: 22,
                                        floating: true,
                                        borderWidth: 0,
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


    </div>
    <!-- tacometro -->

    <div class="container-md">
        <div class="row mt-2">


            <!-- que es el mdea? -->
            <div class="col-sm-12 mb-3">
                <div class="card" style="height: 100%; background-color: #0077CB; box-shadow: 5px 10px 5px darkgray">
                    <div class="card-body">
                        <div class="card " style="height: 100%; background-color: #003057">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <h5 class="card-title" style="color: white; text-align: center">¿Qué es el MDEA?</h5>
                                        <p class="card-text mb-2" style="color: white;">El <a style="color: skyblue"  href="https://www.cepal.org/es/publicaciones/46644-marco-desarrollo-estadisticas-ambientales-mdea-2013" target="_blank"><u>MDEA</u></a> es un marco conceptual y estadístico flexible y de usos múltiples,
                                            comprehensivo e integral en su naturaleza y que delimita el alcance de las
                                            estadísticas ambientales.
                                            Proporciona una estructura organizativa para guiar la recolección y compilación
                                            de estadísticas ambientales a escala nacional. Reúne datos de diferentes áreas
                                            temáticas y fuentes relevantes, abarca los temas y aspectos ambientales que son
                                            pertinentes para el análisis de las políticas y la toma de decisiones.
                                            </p>
                                        <p class="card-text mb-0" style="color: white">El objetivo principal del MDEA es guiar la formulación de los programas de estadísticas
                                            ambientales a través de:
                                            </p>
                                        <ul style="color: white">
                                            <li>
                                                Definir el alcance de las estadísticas ambientales e identificar
                                                sus componentes;
                                            </li>
                                            <li>
                                                Contribuir a la evaluación de las necesidades de datos, fuentes, disponibilidad y brechas;
                                            </li>
                                            <li>
                                                Guiar el desarrollo de los procesos multi propósito de recolección de
                                                datos y bases de datos; y 4 apoyar en la coordinación y organización de estadísticas ambientales, dado el carácter inter-institucional de dicho ámbito.
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-3">
                                        <img class="img-fluid"  src="{{asset('/assets/undraw_real_time_analytics_re_yliv.svg')}}" alt="My SVG Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- card variables mdea cubiertas barras de percentage-->

    </div>

    <div class="container-fluid pb-5 pt-4 mt-2" style="background-color: #ededed">

            <div class="container">

                <!-- card variables mdea -->
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <div class="text-success">
                            <hr>
                        </div>
                        <h4 style="color: #0077CB; text-align: center">Accesos</h4>
                        <div class="text-success">
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- card links -->
                <div class="row mt-1">
                    <div class="col-sm-12">
                        {{--componente1--}}
                        <div class="row mt-2">
                            <div class="col-sm-6 mb-2">
                                <div class="card card1" style=" background-color: #003057; box-shadow: 5px 10px 5px darkgray;" >
                                    <div class="card-body">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <div class="row g-0">

                                                    <div class="col-md-4">
                                                        <img  src="{{asset('/assets/componente1.png')}}" class="img-thumbnail" style="height: 12rem; width: 15rem"  alt="...">
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-1" >Componente:</h5>
                                                            <p class="card-text mb-1" style="color: #0077CB"> 1: Condiciones y Calidad Ambiental</p>
                                                            <h5 class="card-title" >Subcomponentes:</h5>

                                                            <div class="accordion-sm accordion-flush"  id="accordionExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: #0077CB; text-decoration: underline">
                                                                            1.1: Condiciones Físicas
                                                                        </button>

                                                                    </h2>
                                                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                        <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                            <a style="color: white; ">Temas:</a>
                                                                        </div>
                                                                        <div class="row col">
                                                                            <a href="#" style="color: black; text-decoration: underline">1.1.1: Atmósfera, clima y condiciones
                                                                                meteorológicas</a>
                                                                            <a href="#" style="color: black; text-decoration: underline"> 1.1.2: Características hidrográficas</a>
                                                                            <a href="#" style="color: black; text-decoration: underline">1.1.3: Información geológica y Geográfica</a>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #0077CB; text-decoration: underline">
                                                                            1.2: Cobertura Terrestre, Ecosistemas y Biodiversidad
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline">1.2.1: Cobertura terrestre</a>
                                                                                <a href="#" style="color: black; text-decoration: underline">1.2.2: Ecosistemas y biodiversidad</a>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingThree">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #0077CB; text-decoration: underline">
                                                                            1.3: Calidad Ambiental
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline">1.3.2: Calidad del agua dulce</a>
                                                                                <a href="#" style="color: black; text-decoration: underline">1.3.3: Calidad del agua marina</a>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--componente2--}}
                            <div class="col-sm-6 mb-2">
                                <div class="card card1" style=" background-color: #003057; box-shadow: 5px 10px 5px darkgray" >
                                    <div class="card-body">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <div class="row g-0">

                                                    <div class="col-md-4">
                                                        <img  src="{{asset('/assets/componente2.png')}}" class="img-thumbnail" style="height: 12rem; width: 15rem"  alt="...">
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-1" >Componente:</h5>
                                                            <p class="card-text mb-1" style="color: #0077CB">2: Recursos Ambientales y su Uso</p>
                                                            <h5 class="card-title" >Subcomponentes.</h5>

                                                            <div class="accordion-sm accordion-flush"  id="accordionExample1">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne1">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" style="color: #0077CB; text-decoration: underline">
                                                                            2.3: Tierra
                                                                        </button>

                                                                    </h2>
                                                                    <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                                                        <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                            <a style="color: white; ">Temas:</a>
                                                                        </div>
                                                                        <div class="row col">
                                                                            <a href="#" style="color: black; text-decoration: underline"> 2.3.1: Uso de la tierra</a>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo1">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1" style="color: #0077CB; text-decoration: underline">
                                                                            2.5: Recursos Biológicos
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline">2.5.2: Recursos acuáticos</a>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingThree1">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1" style="color: #0077CB; text-decoration: underline">
                                                                            2.6: Recursos Hídricos
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline">2.6.1: Recursos hídricos</a>
                                                                                <a href="#" style="color: black; text-decoration: underline">2.6.2: Extracción, uso y retornos de agua</a>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--componente3--}}
                        <div class="row mt-3">
                            <div class="col-sm-6 mb-2">
                                <div class="card card1" style=" background-color: #003057; box-shadow: 5px 10px 5px darkgray" >
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row g-0">

                                                    <div class="col-md-4">
                                                        <img  src="{{asset('/assets/componente3.jpg')}}" class="img-thumbnail" style="height: 12rem; width: 15rem"  alt="...">
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-1" >Componente:</h5>
                                                            <p class="card-text mb-1" style="color: #0077CB">3: Residuos</p>
                                                            <h5 class="card-title" >Subcomponentes:</h5>

                                                            <div class="accordion-sm accordion-flush"  id="accordionExample2">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne2">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2" style="color: #0077CB; text-decoration: underline">
                                                                            3.2: Generación y Gestión de Aguas Residuales
                                                                        </button>

                                                                    </h2>
                                                                    <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                                                        <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                            <a style="color: white; ">Temas:</a>
                                                                        </div>
                                                                        <div class="row col">
                                                                            <a href="#" style="color: black; text-decoration: underline">3.2.1: Generación y contenido
                                                                                contaminante de aguas residuales</a>
                                                                            <a href="#" style="color: black; text-decoration: underline">3.2.2: Recolección y tratamiento de aguas
                                                                                residuales</a>
                                                                            <a href="#" style="color: black; text-decoration: underline">3.2.3: Descarga de aguas residuales al
                                                                                ambiente</a>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--componente4--}}
                            <div class="col-sm-6 mb-2">
                                <div class="card card1" style=" background-color: #003057; box-shadow: 5px 10px 5px darkgray" >
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row g-0">

                                                    <div class="col-md-4">
                                                        <img  src="{{asset('/assets/componente4.jpg')}}" class="img-thumbnail" style="height: 12rem; width: 15rem"  alt="...">
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-1" >Componente:</h5>
                                                            <p class="card-text mb-1" style="color: #0077CB">4: Eventos Extremos y Desastres</p>
                                                            <h5 class="card-title" >Subcomponentes:</h5>

                                                            <div class="accordion-sm accordion-flush"  id="accordionExample5">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne5">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5" style="color: #0077CB; text-decoration: underline">
                                                                            4.1: Eventos naturales extremos y desastres
                                                                        </button>

                                                                    </h2>
                                                                    <div id="collapseOne5" class="accordion-collapse collapse" aria-labelledby="headingOne5" data-bs-parent="#accordionExample5">
                                                                        <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                            <a style="color: white; ">Temas:</a>
                                                                        </div>
                                                                        <div class="row col">
                                                                            <a href="#" style="color: black; text-decoration: underline">4.1.1: Ocurrencia de eventos naturales
                                                                                extremos y desastres</a>
                                                                            <a href="#" style="color: black; text-decoration: underline">4.1.2: Impacto de eventos naturales
                                                                                extremos y desastres</a>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo5">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5" style="color: #0077CB; text-decoration: underline">
                                                                            4.2: Desastres Tecnológicos
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExample5">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline">4.2.1: Ocurrencia de desastres
                                                                                    tecnológicos</a>
                                                                                <a href="#" style="color: black; text-decoration: underline">4.2.2: Impacto de los desastres
                                                                                    tecnológicos</a>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--componente5--}}
                        <div class="row mt-3">
                            <div class="col-sm-6 mb-2">
                                <div class="card card1" style=" background-color: #003057; box-shadow: 5px 10px 5px darkgray" >
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row g-0">

                                                    <div class="col-md-4">
                                                        <img  src="{{asset('/assets/componente5.png')}}" class="img-thumbnail" style="height: 12rem; width: 15rem"  alt="...">
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-1" >Componente:</h5>
                                                            <p class="card-text mb-1" style="color: #0077CB">5: Asentamientos Humanos y Salud Ambiental</p>
                                                            <h5 class="card-title" >Subcomponentes:</h5>

                                                            <div class="accordion-sm accordion-flush"  id="accordionExample6">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne6">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6" style="color: #0077CB; text-decoration: underline">
                                                                            5.1: Asentamientos Humanos
                                                                        </button>

                                                                    </h2>
                                                                    <div id="collapseOne6" class="accordion-collapse collapse" aria-labelledby="headingOne6" data-bs-parent="#accordionExample6">
                                                                        <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                            <a style="color: white; ">Temas:</a>
                                                                        </div>
                                                                        <div class="row col">
                                                                            <a href="#" style="color: black; text-decoration: underline">5.1.2: Acceso a servicios básicos
                                                                                seleccionados</a>
                                                                            <a href="#" style="color: black; text-decoration: underline">5.1.3: Condiciones de la vivienda</a>

                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo6">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6" style="color: #0077CB; text-decoration: underline">
                                                                            5.2: Salud Ambiental
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6" data-bs-parent="#accordionExample6">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline"> 5.2.2: Enfermedades y condiciones
                                                                                    relacionadas con el agua</a>

                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--componente6--}}
                            <div class="col-sm-6 mb-2">
                                <div class="card card1" style=" background-color: #003057; box-shadow: 5px 10px 5px darkgray" >
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row g-0">

                                                    <div class="col-md-4">
                                                        <img  src="{{asset('/assets/componente6.jpg')}}" class="img-thumbnail" style="height: 12rem; width: auto"  alt="...">
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-1" >Componente:</h5>
                                                            <p class="card-text mb-1" style="color: #0077CB">6: Protección, Gestión y Participación</p>
                                                            <h5 class="card-title" >Subcomponentes:</h5>

                                                            <div class="accordion-sm accordion-flush"  id="accordionExample7">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne7">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne7" aria-expanded="false" aria-controls="collapseOne7" style="color: #0077CB; text-decoration: underline">
                                                                            6.1: Gastos en Protección Ambiental
                                                                        </button>

                                                                    </h2>
                                                                    <div id="collapseOne7" class="accordion-collapse collapse" aria-labelledby="headingOne7" data-bs-parent="#accordionExample7">
                                                                        <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                            <a style="color: white; ">Temas:</a>
                                                                        </div>
                                                                        <div class="row col">
                                                                            <a href="#" style="color: black; text-decoration: underline"> 6.1.1: Gasto público en protección
                                                                                ambiental</a>
                                                                            <a href="#" style="color: black; text-decoration: underline"> 6.1.2: Gasto de empresas privadas, de
                                                                                instituciones sin fines de lucro y de los hogares
                                                                                en protección ambiental y en gestión de
                                                                                recursos naturales</a>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo7">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7" style="color: #0077CB; text-decoration: underline">
                                                                            6.2: Regulación y Gobernanza Ambiental
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo7" data-bs-parent="#accordionExample7">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline">6.2.1: Fortaleza institucional</a>
                                                                                <a href="#" style="color: black; text-decoration: underline">6.2.2: Regulación e instrumentos
                                                                                    ambientales</a>
                                                                                <a href="#" style="color: black; text-decoration: underline">6.2.3: Participación en los Acuerdos
                                                                                    Multilaterales Ambientales (AMAs) y en
                                                                                    convenciones ambientales</a>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingThree7">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7" style="color: #0077CB; text-decoration: underline">
                                                                            6.3: Preparación ante Eventos Extremos y Gestión de Desastres
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordionExample7">
                                                                        <div class="accordion-body">
                                                                            <div class="row col justify-content-center" style="background-color: #6b7280">
                                                                                <a style="color: white; ">Temas:</a>
                                                                            </div>
                                                                            <div class="row col">
                                                                                <a href="#" style="color: black; text-decoration: underline">6.3.1: Preparación ante eventos naturales
                                                                                    extremos y desastres</a>
                                                                                <a href="#" style="color: black; text-decoration: underline">6.3.2: Preparación ante desastres
                                                                                    tecnológicos</a>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
