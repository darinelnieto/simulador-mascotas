@extends('mascotas.plantilla-mascotas.mascotas')
@section('contenido')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center" id="imprime">
                <h3 class="mt-2 mb-5">¿ Qué edad tiene {{$mascota->nombre}} ?</h3>
                <form action="{{Route('form-tamaño')}}" method="get" id="form-edad">
                    <input type="hidden"  name="nombre" value="{{$mascota->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$mascota->seleccionaMascotas}}">
                    <div class="input-can">
                        <label style="width:120px">
                            <input type="radio" class="radio" name="edad" value="Menos de 1 año">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 436 391" style="enable-background:new 0 0 436 391;" xml:space="preserve">
                                <style type="text/css">
                                    .st4{fill:#EF6B01;}
                                    .st4:hover{fill:#33811c;}
                                </style>
                                <g id="Logo_CIPA">
                                    <path class="st4" d="M354.72,180.36c6.59,2.1,12.63,4.32,18.84,5.91c6.82,1.75,13.73,2.57,19.75-2.64c0.6-0.52,1.65-0.49,2.43-0.84
                                        c7.43-3.4,13.07-8.39,14.98-16.77c0.36-1.58,0.98-3.22,1.92-4.51c2.45-3.36,2.65-6.32-0.2-9.37c-1.66-1.77-3.71-3.3-5.83-4.5
                                        c-3.77-2.13-7.75-3.87-11.6-5.86c-4.15-2.14-6.83-5.25-6.59-10.26c0.45-9.29-3.75-16.66-9.53-23.47
                                        c-8.33-9.81-20.01-13.83-31.45-18.06c-3.17-1.17-7.14-0.84-10.62-0.37c-10.84,1.48-19.82,7.22-27.67,14.29
                                        c-10.66,9.6-20.77,19.84-30.89,30.02c-10.6,10.67-22.42,19.08-37.43,22.29c-1.39,0.3-2.6,1.35-3.93,1.98
                                        c-3.29,1.57-6.48,3.48-9.92,4.53c-3.52,1.08-7.34,1.09-10.95,1.93c-24.08,5.58-48.53,8.54-73.12,10.49
                                        c-4.79,0.38-9.87,1.17-14.38,0.04c-11.52-2.9-23.12-4.18-34.93-4.31c0,0-66.9-7.31-38.62-65.36c0,0,2.98-10.42-7.44-2.98
                                        c0,0-38.76,46.38,8.9,90.91c0.78,0.62,3.75,11.04,21.1,3.7c-6.31,6.54-9.03,13.86-9.45,22c-0.31,6.19,0,12.4-0.27,18.59
                                        c-0.75,17.02-8.31,30.66-20.63,42.14c-3.43,3.19-6.65,7.24-8.3,11.54c-1.85,4.84-2.49,10.4-2.45,15.64
                                        c0.11,13,0.65,26.02,1.51,38.99c1,15.04,12.88,23.55,27.41,20.14c0.81-0.19,1.75-0.31,2.53-0.1c5.91,1.62,10.84,0.16,15.29-4.07
                                        c3-2.85,3.7-5.06,0.62-7.79c-2.91-2.58-6.33-4.71-9.82-6.47c-5.12-2.57-5.87-3.39-5.81-9.96c2.44,1.76,4.58,3.2,6.61,4.78
                                        c5.72,4.43,11.95,1.12,17.94,1.18c1.72,0.02,3.44-0.91,5.16-0.9c4.39,0.03,7.32-1.72,7.95-5.11c0.76-4.09-0.79-6.17-5.68-7.57
                                        c-2.73-0.78-5.58-1.28-8.19-2.35c-1.09-0.45-2.31-1.98-2.45-3.14c-0.62-5.29-0.98-10.61-1.2-15.93c-0.05-1.18,0.53-2.75,1.38-3.55
                                        c6.3-5.96,12.69-11.82,19.14-17.62c7.4-6.64,14.92-13.18,24.99-15.46c5.13-1.16,10-1.11,15.11,1.34
                                        c12.54,6.01,24.8,12.66,39.5,12.83c12.03,0.14,23.68-0.45,35.05-4.76c8.49-3.22,17.33-3.92,26.32-2.11
                                        c2.02,0.41,2.92,1.23,3.07,3.38c0.63,9.02,1.37,18.04,2.16,27.05c0.97,10.97,1.11,22.11,3.28,32.84
                                        c3,14.81,16.19,23.72,30.04,21.75c2.38-0.34,4.34-0.43,6.66,0.78c4.03,2.1,8.64,0.38,12.78-4.71c2.38-2.93,0.23-5.88-1.2-8.58
                                        c-2.2-4.15-6.14-5.46-10.43-6.22c-3.87-0.68-3.86-0.76-4.61-4.49c5.32,2.73,10.27,2.4,15.6-0.29c3.14-1.58,4-3.58,2.91-6.08
                                        c-2.37-5.44-5.62-10.49-12.28-11.15c-2.78-0.28-3.37-1.6-3.87-3.87c-2.32-10.52-1.27-21,0.53-31.39c1.45-8.36,3.66-16.59,5.6-24.86
                                        c0.18-0.77,0.81-1.52,1.41-2.09c4.86-4.59,9.49-9.46,14.72-13.59c5.63-4.44,8.42-9.84,8.37-16.92c-0.04-5.2-0.29-10.45,0.23-15.61
                                        c1.06-10.7,8.04-18.39,14.34-26.34C339.1,189.04,341.93,174.07,354.72,180.36z"/>
                                    <g>
                                    </g>
                                </g>
                            </svg>
                            <p class="parrafoEdad">Menos de 1 año</p>
                        </label>
                        <label class="svgCan">
                            <input type="radio" class="radio" name="edad" value="1 a 6 años">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 565 377" style="enable-background:new 0 0 565 377;" xml:space="preserve">
                                <style type="text/css">
                                    .st4{fill:#EF6B01;}
                                    .st4:hover{fill:#33811c;}
                                </style>
                                <g>
                                    <path class="st4" d="M540.95,68.28c-4.31,7.22-5.83,16.14-13.14,21.54c-0.74,0.55-1.34,1.29-2.08,1.86
                                        c-4.46,3.41-24.35,7.48-29.92,6.16c-13.39-3.19-18.87-0.95-25.31,11.4c-5.54,10.62-10.16,21.73-15.83,32.28
                                        c-3.31,6.16-8.13,11.49-11.75,17.5c-1.49,2.47-1.8,5.71-2.31,8.67c-0.3,1.75,0.03,3.61,0.13,5.41c0.37,6.69-1.8,12.01-7.11,16.5
                                        c-2.15,1.82-2.38,5.75-3.91,8.49c-3.9,6.96-7.02,14.71-12.28,20.48c-12.86,14.13-18.93,30.39-19.7,49.23
                                        c-0.36,8.87-2.33,17.67-2.9,26.54c-0.29,4.51,0.56,9.19,1.54,13.64c0.92,4.18,3.25,6.6,8.46,5.75c5.5-0.89,13.95,7.2,14.27,12.72
                                        c0.16,2.74-0.37,4.6-3.81,4.78c-5.86,0.31-11.7,1.06-17.93,1.66c1.08,2.48,1.99,5.92,3.94,8.6c1.38,1.9,4.04,3.51,6.37,3.95
                                        c4.53,0.84,13.89,8.22,14.46,12.64c0.15,1.14-0.8,3.16-1.75,3.55c-3.18,1.31-6.54,2.63-9.91,2.9
                                        c-5.74,0.46-11.54,0.26-17.31,0.09c-4.53-0.13-6.11-2.42-8.05-7.04c-3.78-9-3.42-20.15-12.9-26.73c-2.22-1.54-3.5-6.3-3.16-9.35
                                        c2.41-21.63,0.31-43.09-1.68-64.57c-0.54-5.86-1.27-11.72-2.32-17.5c-0.24-1.32-2.16-3.35-3.29-3.34
                                        c-16.49,0.17-31.67-5.28-47.17-9.9c-22.16-6.6-44.65-12.07-66.99-18.05c-2.6-0.7-5.15-1.56-8.4-2.56
                                        c-30.23-13.83-33.14,7.32-33.14,7.32c-2.89,8.2-5.43,16.53-8.53,24.65c-1.9,4.99-3.89,10.19-7.02,14.42
                                        c-8.38,11.33-17.73,21.95-26.04,33.32c-4.53,6.2-8.91,13-11.24,20.21c-2.75,8.49-1.38,11.64,7.92,11.96
                                        c6.05,0.2,9.59,3.41,12.28,8.18c2.9,5.13,0.89,8.98-4.88,9.15c-5.96,0.17-11.93,0.04-18.24,0.04c0.08,1.18,0.19,3.35,0.38,5.52
                                        c0.48,5.38,2.66,8.78,8.71,9.56c7.12,0.92,14.75,9.9,14.78,15.83c0.02,3.27-1.31,4.23-4.29,4.24
                                        c-6.88,0.01-13.76,0.25-20.64,0.27c-6.07,0.02-8.68-2.35-9.82-8.34c-3.57-18.74-7.25-37.47-10.77-56.22
                                        c-1.14-6.06-0.77-11.89,4.16-16.51c2.16-2.03,2.3-3.89,1.53-7.17c-1.47-6.22-1.66-12.88,2.77-18.65
                                        c3.62-4.71,7.13-9.54,10.21-14.61c3.09-5.09,3.79-10.16,0.64-16.13c-2.71-5.15-5.04-11.59-4.39-17.09
                                        c0.5-4.26,1.53-8.18-0.02-12.28c-0.77-2.04-2.35-3.81-2.95-5.88c-5.59-19.39-2.59-37.21,9.7-53.45
                                        c3.88-5.13,1.83-10.14-4.65-12.65c-21.43-8.32-42.86-16.62-64.31-24.9c-6.84-2.64-13.04-5.87-17.27-12.41
                                        c-2.4-3.71-6.29-6.41-9.13-9.88c-1.68-2.04-2.62-4.68-3.89-7.06c-0.52-0.97-0.78-2.46-1.57-2.83c-3.41-1.57-3.09-4.85-4.37-7.56
                                        c-4.85-10.26-4.62-21.34-6.53-32.07c-0.13-0.71-0.56-1.36-0.85-2.04c0-7.08-0.07-14.17,0.1-21.25c0.02-0.76,1.39-1.49,2.14-2.24
                                        c2.43,2.73,4.9,5.42,7.28,8.19c2.65,3.07,5.8,5.88,7.7,9.37c3.9,7.14,7.79,14.41,10.47,22.06c8.63,24.63,27.04,38.5,50.59,46.42
                                        c15.26,5.14,30.84,9.44,46.47,13.3c5.73,1.41,12.21,1.45,18.06,0.42c15.77-2.78,31.43-5.49,47.55-3.69
                                        c17.35,1.94,34.71,3.93,52.11,5.21c16.67,1.23,33.35,1.99,49.62-4.01c6.83-2.52,14.29-3.81,21.58-4.52
                                        c13.08-1.28,24.88-5.44,33.83-15.04c13.05-13.99,25.04-28.97,38.14-42.91c5.72-6.08,12.36-12.33,19.86-15.49
                                        c16.12-6.79,32.14-1.12,47.48,4.55c3.22,1.19,7.1,5.7,7.28,8.88c0.35,6.05,3.3,8.18,8.14,9.4c3.95,0.99,8.03,1.52,11.91,2.73
                                        c7.67,2.39,15.24,5.11,22.85,7.7C540.95,61.57,543.86,61.91,540.95,68.28z"/>
                                </g>
                            </svg>
                            <p class="parrafoEdad">1 a 6 años</p>
                        </label>
                        <label class="svgCan">
                            <input type="radio" class="radio" name="edad" value="7+ años">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 650 559" style="enable-background:new 0 0 650 559;" xml:space="preserve">
                                <style type="text/css">
                                    .st4{fill:#EF6B01;}
                                    .st4:hover{fill:#33811c;}
                                </style>
                                <g>
                                    <path class="st4" d="M198.39,410.89c-0.58,9.62-0.89,18.63-1.74,27.59c-0.94,9.9-2.04,19.82-3.7,29.62
                                        c-2.19,12.93-0.97,24.87,8.76,34.54c1.84,1.83,4.99,2.8,7.69,3.22c3.51,0.54,7.17,0,10.76,0.16c10.95,0.47,9.95-2.66,8.65-11.65
                                        c-0.74-5.14-3.31-10.55-10.23-11.29c-2.56-0.27-3.13-2.42-3.27-5.07c-0.78-14.53,2.5-28.11,10.45-40.14
                                        c3.2-4.84,8.46-8.36,12.97-12.27c10.55-9.15,20.89-18.38,28.09-30.71c3.82-6.54,8.93-11.76,17.53-12.81
                                        c4.26-0.52,8.51-3.31,12.19-5.88c4.71-3.29,7.01-3.01,12.07-0.18c10.48,5.87,20.84,12.2,33.16,13.92
                                        c10.26,1.44,20.42,3.64,30.7,4.87c5.79,0.7,11.73,0.13,17.84,0.13c3.35,7.55,3.09,15.12,2.37,23.05
                                        c-0.9,9.83-1.36,19.69,0.58,29.65c2.15,11.02,3.18,22.28,4.08,33.49c0.6,7.52,0.11,15.12,0.14,22.69c0,1.3-0.27,2.78,0.24,3.88
                                        c4.59,9.89,9.17,19.8,14.11,29.52c1.96,3.87,9.02,5.67,13.28,4.86c2.49-0.48,5.23,0.37,7.86,0.61c4.64,0.42,9.29,1.26,13.91,1.11
                                        c3.89-0.12,6.41-2.79,7.13-6.77c2.05-11.43-3.69-15.04-11.51-18.23c-2.23-0.91-4.6-1.62-6.63-2.88
                                        c-3.01-1.86-4.67-4.33-4.68-8.38c-0.03-11.36,0.1-22.82-1.35-34.05c-1.38-10.63,0.18-20.75,1.09-31.19
                                        c0.86-9.85,2.03-19.51,4.2-29.11c0.18-0.78,0.03-2.17,0.4-2.3c6.85-2.52,6-9.41,6.55-14.17c0.73-6.25,3.64-9.61,8.28-12.58
                                        c2.96-1.89,5.84-3.91,9.65-6.47c0.71,3,1.79,5.25,1.68,7.44c-0.79,16.05,4.07,31.19,7.13,46.62c1.22,6.14,2.37,12.32,2.99,18.54
                                        c0.76,7.56,1.72,15.25,1.16,22.77c-0.62,8.32,2.25,15.52,4.71,22.98c1.85,5.63,4.47,11.08,5.67,16.83
                                        c1.46,7.06,6.94,7.47,11.95,8.09c7.66,0.96,15.44,0.93,23.15,1.52c4,0.31,6.4-2.11,7.4-5.09c0.84-2.52,0.78-6.06-0.41-8.36
                                        c-1.45-2.82-4.09-6-6.92-6.95c-9.14-3.06-13.42-9.75-16.31-18.22c-3.18-9.3-3.4-18.6-1.66-28.2c0.97-5.38,1.42-10.94,1.39-16.41
                                        c-0.07-12.56,3.16-24.52,5.72-36.63c1.42-6.73,2.67-13.58,3.09-20.43c1.02-16.4,1.13-32.85,6.19-48.76
                                        c1.2-3.77,0.83-8.01,1.5-11.98c1.67-9.79,3.24-19.62,5.4-29.31c1.26-5.66,3.19-10.94,1.24-16.98c-0.78-2.42,0.83-5.6,1.32-8.45
                                        c1.15-6.77,2.52-13.52,3.33-20.33c0.72-6.03,1.51-11.4,5.34-16.94c6.17-8.92,10.11-19.28,8.69-30.8
                                        c-0.92-7.46,6.32-16.79,13.62-16.75c5.33,0.02,10.74,1.3,15.96,2.62c9.8,2.48,17.88-0.21,25.42-6.61
                                        c7.6-6.45,12.91-14.12,15.78-23.68c0.75-2.5,2.95-4.56,4.42-6.87c4.1-6.43,2.79-11.19-3.99-14.55
                                        c-9.09-4.51-18.15-9.09-27.3-13.5c-4.95-2.38-8.03-6.3-8.31-11.55c-0.37-7.06-4.23-11.76-9.07-16
                                        c-5.09-4.46-10.02-9.26-15.67-12.87c-3.72-2.37-8.52-3.49-12.99-4.13c-6.7-0.96-13.53-0.93-20.3-1.47
                                        c-7.69-0.61-14.71,1.39-21.38,5.04c-9.2,5.03-18.38,10.11-27.66,14.99c-5,2.63-6.86,7.27-9.08,12.03
                                        c-5.1,10.98-10.43,21.86-16.16,32.53c-5.85,10.89-11.63,21.93-18.72,32.01c-4.38,6.24-10.69,11.43-16.95,15.97
                                        c-8.57,6.23-17.42,12.52-27.04,16.75c-10.87,4.79-22.66,7.62-34.19,10.78c-15.01,4.1-30.4,5.02-45.95,5.44
                                        c-9.61,0.26-19.16,3.11-28.7,4.99c-9.56,1.88-19.07,4.01-28.6,6c-17.41,3.64-33.05,10.84-47.42,21.49
                                        c-12.96,9.6-23.02,21.61-32.89,34.11c-7.16,9.07-16.51,15.77-27.48,19.97c-10.6,4.06-21.74,5.14-32.88,6.55
                                        c-19.73,2.51-39.61,4.74-57.1,15.55c-1.91,1.18-3.59,2.71-5.41,4.05c-3.04,2.24-3.38,5.78-1.85,8.28
                                        c1.13,1.86,4.45,2.84,6.96,3.27c3.17,0.54,6.52-0.02,9.78,0.15c15.35,0.8,30.68,2.11,46.04,2.36c7.63,0.12,15.36-1.27,22.9-2.71
                                        c6.71-1.28,13.43-3.05,19.75-5.59c4.84-1.95,9.03-5.52,13.59-8.22c1.28-0.76,2.87-0.99,4.32-1.46c-0.24,1.44-0.12,3.07-0.77,4.29
                                        c-4.12,7.68-9.11,14.98-12.46,22.97c-3.56,8.51-5.68,17.64-8.32,26.52c-3.89,13.05-6.33,26.78-17.24,36.49
                                        c-2.04,1.81-4.22,3.57-6.6,4.88c-5.31,2.92-7.91,7.7-8.89,13.23c-0.95,5.39-0.8,10.96-1.47,16.41
                                        c-1.05,8.6-2.89,17.12-3.47,25.74c-0.62,9.28-0.71,18.67-0.02,27.94c0.55,7.27,8.12,8.11,12.86,11.59
                                        c4.76,3.5,10.3,1.8,15.27,3.39c2.28,0.73,4.71,2.02,6.9,1.74c2.18-0.28,5.75-2.01,5.94-3.47c0.96-7.17,0.39-14.45-8.26-18.2
                                        c-4.75-2.06-5.54-5.75-4.53-10.75c1.37-6.76,1.9-13.69,2.96-20.52c0.73-4.73,1.68-9.42,2.67-14.1c0.18-0.86,0.85-1.81,1.58-2.33
                                        c12.33-8.71,24.85-17.17,37.01-26.11c5.2-3.82,9.64-8.66,14.53-12.91C194.46,413.07,196.36,412.17,198.39,410.89z"/>
                                </g>
                            </svg>
                            <p class="parrafoEdad">7+ años</p>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="imgPerro" style="position:absolute; width:100%;">
    <img src="{{ asset('/img/mascotas/Artboard56.png/') }}" alt="" style="transform: translateY(-7.8em);" class="imgNaranjaDerecha">
</section>
<section class="fondoGatos">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h3 class="mt-2 mb-5 violeta">¿ Qué edad tiene {{$mascota->nombre}} ?</h3>
                <form action="{{Route('tamaño-gatos')}}" method="get" id="form-edad-dos">
                    <input type="hidden"  name="nombre" value="{{$mascota->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$mascota->seleccionaMascotas}}">
                    <label class="labelGatos">
                        <input type="radio" class="radio" name="edadcat" value="Menos de 1 año">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 446 274" style="enable-background:new 0 0 446 274;" xml:space="preserve">
                            <style type="text/css">
                                .st16{fill:#118DB0;}
                                .st16:hover{fill:#671D6A;}
                            </style>
                            <g id="Fondo_1_">
                                <g>
                                    <path class="st16" d="M275.6,252.02c3.31-2.39,4.66-3.43,3.54-6.86c-1.66-5.1-5.28-7.62-10.5-8.69c-1.73-0.35-4.47-2.6-4.41-3.86
                                        c0.72-13.66,1.7-27.31,3.06-40.91c0.62-6.19,3.68-11.16,10.24-12.95c7.89-2.15,15.81-4.2,23.69-6.38
                                        c2.95-0.81,3.91,0.67,4.98,3.16c2.58,5.99,4.49,12.76,8.65,17.47c10.37,11.73,21.94,22.38,32.81,33.67
                                        c3.92,4.07,7.48,8.56,10.77,13.17c4.76,6.69,13.61,9.32,21.08,5.96c2.38-1.07,4.95-1.69,7.44-2.5c3.83-1.24,6.65-3.86,5.57-7.84
                                        c-1.59-5.91-3.64-11.93-11.49-12.64c-8.57-0.78-12.98-7.16-16.41-13.86c-7.05-13.76-13.58-27.79-20.22-41.76
                                        c-0.71-1.49-1.51-3.64-0.95-4.89c2.72-6.12,5.89-12.05,8.92-18.07c1.31,0.44,2.07,0.52,2.62,0.9c13.6,9.25,24.47,0.23,35.73-5.48
                                        c1.51-0.77,3.18-3.07,3.18-4.67c0.01-8.22,5.41-13.83,8.57-20.6c3-6.44,2.55-14.49,3.62-21.83c0.95-6.49,1.58-13.04,2.97-19.43
                                        c0.82-3.77,3.89-7.22,4.1-10.91c0.51-9.17,5.26-14.3,13.34-17.42c2.79-1.07,4.88-3.89,2.38-6.24c-2.74-2.57-6.58-4.91-10.21-5.41
                                        c-13.9-1.9-28.32-1.37-41.76-4.82c-20.54-5.28-40.14-4.53-59.89,2.26c-2,0.69-4.21,1.84-6.13,1.53
                                        c-10.73-1.73-16.28,4.57-20.37,12.89c-2.32,4.73-3.91,9.82-5.88,14.86c-0.88-0.17-1.57-0.27-2.23-0.45
                                        c-27.27-7.45-54.54-11.75-82.68-3.86c-20.89,5.85-41.63,11.87-58.99,25.39c-6.17,4.81-11.39,11.15-16.04,17.52
                                        c-5.73,7.84-9.48,17.25-15.73,24.58c-16.9,19.82-37.27,36.03-59.54,49.21C34.68,180.98,9,184.13,9,185.44
                                        c1.4,0.75,35.31,7.31,81.3-16.81c12.45-6.53,23.42-15.58,35.09-23.42c1.44-0.97,2.82-2.01,4.3-3.06
                                        c4.13,7.16,8.1,14.03,12.31,21.31c-9.61,4.13-11.03,11.97-9.95,21.2c1.16,9.98,3.34,19.32,11.66,26.06
                                        c0.91,0.74,1.35,2.05,2.06,3.06c4.17,5.95,7.8,12.39,12.65,17.7c7.96,8.71,17.16,15.34,30.17,14.32
                                        c4.88-0.38,9.78,0.94,14.77,2.59c5.01,1.65,11.44-0.57,17.12-1.69c1.34-0.26,2.35-2.85,3.25-4.51c0.56-1.04,0.39-2.48,0.96-3.52
                                        c3.19-5.87-0.14-12.22-7.02-11.46c-9.1,1.01-17.07-3.01-25.66-3.88c-3.6-0.36-4.54-2.36-4.76-5.73
                                        c-0.82-12.78,5.9-22.35,13.18-32.03c10.3,5.02,20.66,1.95,31.14,1.77c1.44,22.97-5.6,47.47,11.79,67.56
                                        C248.68,259.09,265.8,259.09,275.6,252.02z"/>
                                </g>
                            </g>
                        </svg>
                        <p class="parrafoEdadGato">Menos de 1 año</p>
                    </label>
                    <label class="labelGatos">
                        <input type="radio" class="radio" name="edadcat" value="1 a 6 años">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 731 468" style="enable-background:new 0 0 731 468;" xml:space="preserve">
                            <style type="text/css">
                                .st33{fill-rule:evenodd;clip-rule:evenodd;fill:#118DB0;}
                                .st33:hover{fill-rule:evenodd;clip-rule:evenodd;fill:#671D6A;}
                            </style>
                            <g>
                                <path class="st33" d="M693.35,228.65c-1.44,5.03-7.04,8.08-12.29,7.92c-7.29,16.47-20.32,6.08-36.4,4.28
                                    c-8.72-0.98-18,0.47-27.83,1.07c-18.79,1.15-33.18-2.21-42.82,10.7c-5.02,6.72-7.59,17.09-12.85,24.62
                                    c-8.82,12.63-19.7,21.42-34.26,29.97c1.22,5.78,1.33,18.88,5.35,27.83c3.62,8.05,13.06,17.16,21.41,26.76
                                    c3.6,4.14,6.85,8.7,10.71,12.85c3.77,4.05,9.05,6.7,12.85,10.71c2.55,2.69,4.08,6.74,6.42,9.63
                                    c8.64,10.67,19.88,20.68,27.84,32.12c3.88,5.58,15.34,26.68,6.42,36.4c-7.85,8.55-20.85,1.62-32.11,0
                                    c-7.49-6.17-7.72-14.85-11.78-22.48c-2.54-4.78-7.73-9.08-11.78-13.92c-4.16-4.97-7.64-10.53-11.78-13.92
                                    c-5.34-4.38-12.45-7.47-18.2-11.78c-15.91-11.92-32.15-27.49-48.17-39.61c-1.53,20.09,5,32.12,8.56,47.1
                                    c10.87,3.48,23.22,7.73,23.55,19.27c0.38,13.29-17.15,16.81-33.19,14.99c-13.66-1.55-16.12-12.96-22.48-21.41
                                    c-6.02-30.73-12.37-61.13-13.92-96.35c-17.46-7.51-36.29-15.08-55.67-23.55c-6.15-2.69-13.93-7.3-19.27-6.42
                                    c-6.88,1.13-18.85,18.49-20.34,25.69c-1.7,8.23,0.28,19.47,1.07,28.91c0.82,9.76,1.84,18.94,4.28,25.69
                                    c5.49,15.17,20.27,25.37,14.99,42.82c-7.34,7.64-16.94,6.21-26.76,1.07c-11.32-5.93-10.83-12.27-13.92-29.98
                                    c-3.1-17.78-5.83-30.8-10.71-49.24c-2.31-8.73-8.18-15.94-8.56-20.34c-0.7-8,6.73-18.3,5.35-24.62
                                    c-21.48,2.54-36.33,23.56-61.02,27.83c-11.27,1.95-24.7-1.02-36.4,4.28c-6.24,9.87-11.56,24.1-12.85,37.47
                                    c-0.33,3.45-0.67,8.9,0,12.85c1.79,10.6,16.86,25.55,4.28,40.68c-9.97,5.52-21.72,1.34-29.97-3.21
                                    c-16.48-24.32-1.37-62.92,1.07-93.14c0.6-7.41-0.86-14.24,1.07-19.27c2.84-7.42,17.15-11.63,20.34-21.41
                                    c5.31-16.28-0.15-43.31,1.07-65.3c0.79-14.18,3.72-26.06,8.56-37.47c-4.07-4.15-11.7-4.64-17.13-7.49
                                    c-10.82-5.7-20.96-13.88-29.97-21.41c-18.32-15.3-34.29-32.83-46.03-55.67c-5.57-10.83-10.29-22.35-18.2-32.12
                                    c-9.69-11.96-22.73-21.67-37.47-26.76c-10.21-3.53-35.54-7.15-34.26-21.41c1.06-11.79,11.57-7.48,21.41-5.35
                                    c13.09,2.83,15.94,2.19,26.76,6.42c13.14,5.15,21.6,9.79,31.05,18.2c7.55,6.72,17.13,17.12,23.55,25.69
                                    c4.88,6.52,7.57,13.64,11.78,21.41c11.81,21.81,26.65,36.55,48.17,48.17c9.49,5.12,23.07,12.87,40.68,9.63
                                    c6.79-1.25,12.03-6.7,18.2-9.63c29.29-13.92,70.83-18.66,117.76-16.06c26.61,1.47,53.25,8.15,77.08,14.99
                                    c12.26,3.52,25.39,9.6,42.82,9.63c7.67,0.01,15.54-1.47,23.55-1.07c6.77,0.34,13.59,2.36,20.34,2.14
                                    c5.82-0.19,11.62-2.36,18.2-3.21c16.97-2.19,33.14-2.28,46.03-8.56c8.96-6.18,15.29-24.96,27.84-23.55
                                    c9.65,1.09,9,12.83,14.99,20.34c22.53,3.15,30.68-17.06,49.24-21.41c-5.94,12.62-14.17,22.94-18.2,37.47
                                    c3.46,14.33,19.18,20.18,20.34,35.33c0.56,7.35-4.15,14.48-3.21,22.48c0.91,7.79,4.34,12.65,7.49,20.34
                                    c1.15,2.8-2.14,7.01-2.39,9.68C693.6,227.56,693.5,228.12,693.35,228.65z"/>
                            </g>
                        </svg>
                        <p class="parrafoEdadGato">1 a 6 años</p>
                    </label>
                    <label class="labelGatosAdulto">
                        <input type="radio" class="radio" name="edadcat" value="7+ años">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="100px" y="100px"
                            viewBox="0 0 370 389"  xml:space="preserve">
                            <style type="text/css">
                                .st13{fill:#118DB0;}
                                .st13:hover{fill:#621d68;}
                            </style>
                            <g id="Logo_CIPA">
                                <g>
                                    <path class="st13" d="M154.54,346.36c-2.23-0.84-3.77-1.79-5.39-1.95c-4.22-0.41-8.49-0.28-12.71-0.74
                                        c-5.88-0.64-11.76-1.47-17.58-2.53c-2.29-0.41-3.35-0.01-3.8,2.3c-0.46,2.39-1.08,4.77-1.81,7.09
                                        c-2.58,8.19-8.88,13.23-17.49,13.13c-7.19-0.08-14.41-0.72-21.55-1.65c-7.12-0.93-9.96-7.9-6.07-14.04
                                        c0.77-1.22,1.74-2.32,2.97-3.93c-6.35-0.44-9.38-4.2-10.8-9.58c-1.41-5.31,0.55-9.19,5.68-11.14c2.48-0.94,4.99-1.86,7.56-2.45
                                        c2.98-0.69,4.14-2.57,4.54-5.36c1.01-7.14,1.91-14.31,3.2-21.4c1.52-8.34,3.61-16.58,5.01-24.94c0.47-2.8,0.16-6.02-0.77-8.71
                                        c-4.65-13.5-11.05-26-19.82-37.49c-10.46-13.72-17.44-29.43-20.56-46.45c-0.89-4.85,0.66-10.26,1.62-15.31
                                        c0.64-3.4,2.03-6.71,3.4-9.92c3.55-8.3,3.81-16.86,2.6-25.62c-0.68-4.89-3.13-8.26-7.99-9.63c-4.29-1.21-8.58-2.41-12.88-3.54
                                        c-4.73-1.24-8.41-3.49-9.27-8.82c-0.12-0.73-0.81-1.47-1.42-2c-2.06-1.82-3.63-3.82-3.62-6.78c0-0.76-0.51-1.59-0.98-2.26
                                        c-2.82-4.02-3.05-8.51,0.4-11.85c5.65-5.46,8.17-12.29,10.77-19.47c4.73-13.08,14.21-21.88,27.47-26.21
                                        c7.25-2.37,7.52-2.48,5.12-9.68c-1.21-3.62-2.46-7.24-3.46-10.92c-0.29-1.07,0.19-2.36,0.32-3.55c1.26,0.3,2.79,0.25,3.73,0.96
                                        c2.23,1.7,4.18,3.76,6.4,5.82c0.51-0.75,0.93-1.13,1.06-1.59c0.83-2.83,2.57-2.83,4.6-1.41c5.04,3.52,10.13,6.98,15.01,10.71
                                        c8.09,6.18,16.23,12.33,24.01,18.9c13.59,11.49,20.73,26.84,25.25,43.66c2.23,8.29,4.56,16.56,7.02,24.79
                                        c0.69,2.31,1.92,4.48,3.06,6.63c3.51,6.62,9.55,8.95,16.56,9.62c9.4,0.9,18.87,1.37,28.18,2.85c26.85,4.27,46.26,19.61,60.44,42.1
                                        c10.57,16.76,16.13,35.45,20.01,54.7c5.07,25.16,7.65,50.55,6.59,76.25c-0.04,0.93,0.09,1.87,0.15,3.1
                                        c0.71-0.28,1.25-0.35,1.58-0.65c15.47-14.38,26.45-31.4,30.71-52.37c2.02-9.92,0.91-19.66-3.38-28.63
                                        c-7-14.62-14.73-28.89-22.15-43.31c-7.28-14.13-15.66-27.83-21.57-42.51c-7.64-18.96-9.84-39.04-5.46-59.38
                                        c4.89-22.72,20.59-36.11,43.59-39.52c17.6-2.61,33.19,2.07,45.17,15.71c14.26,16.22,16.64,40.83,5.75,58.17
                                        c-6.3,10.03-15.18,16.78-27.2,18.67c-5.63,0.88-9.4-1.01-11.26-5.47c-2.31-5.52-1.36-10.39,3.27-13.61
                                        c3.1-2.16,6.58-3.87,10.07-5.37c10.2-4.36,14.41-13.49,10.86-24.02c-3.8-11.25-16.74-19.84-29.14-19.34
                                        c-13.14,0.53-23.59,9.01-26.5,21.72c-3.21,14.04-0.67,27.65,3.54,41.05c3.62,11.52,9.13,22.12,16.2,31.93
                                        c13.56,18.8,24.8,38.8,30.99,61.31c5.94,21.61,6.54,43.22-1.47,64.47c-9.25,24.56-26.03,42.42-49.49,54.03
                                        c-2.82,1.4-5.04,2.91-6.54,5.96c-2.68,5.49-8.13,8.11-13.1,11.2c-2.44,1.52-4.46,3.67-6.83,5.32c-1.33,0.92-2.93,1.8-4.49,1.98
                                        c-7.38,0.84-14.79,1.34-22.17,2.13c-8.55,0.92-17.05,2.42-25.61,2.91c-6.72,0.39-13.51-0.45-20.27-0.59
                                        c-2.49-0.05-5.02,0.16-7.48,0.53c-5.95,0.89-11.84,2.36-17.82,2.8c-5.74,0.42-10.95-1.77-13.35-7.36
                                        c-2.34-5.44-0.26-10.39,3.63-14.56C150.75,349.86,152.27,348.54,154.54,346.36z"/>
                                </g>
                            </g>
                        </svg>
                        <p class="parrafoEdadGato">7+ años</p>
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="imgGato" style="position:absolute; width:100%;">
    <img src="{{ asset('/img/mascotas/Artboard63.png/') }}" alt="" class="imgGatoDerecha">
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    if($('input[name=seleccionaMascotas]').val() == 'perros'){
    $('.bannerCan').css({'display':'block'});
    $('.bannerInicio').css({'display':'none'});
    $('.fondoGatos').css({'display':'none'});
    $('.imgGato').css({'display':'none'});
}else if($('input[name=seleccionaMascotas]').val() == 'gatos'){
    $('.bannerCat').css({'display':'block'});
    $('.bannerInicio').css({'display':'none'});
    $('.section').css({'display':'none'});
    $('.imgPerro').css({'display':'none'});
}
</script>
@endsection