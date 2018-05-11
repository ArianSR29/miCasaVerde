<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mi casa verde | LP</title>

        <link rel="stylesheet" href="assets/css/miCasaVerde.css">
        <link rel="stylesheet" href="assets/libs/fontawesome/css/fontawesome.css">
        <link rel="stylesheet" href="assets/libs/fontawesome/css/fa-solid.css">
        <link rel="stylesheet" href="assets/libs/fontawesome/css/fa-brands.css">
        <link rel="stylesheet" href="assets/libs/fontawesome/css/fa-regular.css">
        <link rel="stylesheet" href="assets/libs/mdl/material.css">
        <link rel="icon" href="favicon.svg" sizes="any" type="image/svg+xml">
    </head>

    <body>
        <div class="main-section">
            <!-- SECCION DEL TOP -->
            <div class="c-top">
                <!-- <span id="res">0</span> -->
                <img src="assets/img/logo-mi-casa.svg" class="mail-logo" alt="logo-mi-casa">
                <div class="c-icons">
                    <div class="top-icon">
                        <a href="">
                            <i class="fab fa-whatsapp"></i>
                            <span>(55) 3738 2094</span></a>
                    </div>
                    <div class="top-icon">
                        <a href="">
                            <i class="fa fa-phone phon-icon"></i>
                            <span>01 (55) 5273 5051</span></a>
                    </div>
                </div>
            </div>
            <!-- SECCION PRINCIPAL PARA EL DEGARDADO -->
            <div class="c-main mobile">
                <h1 class="robotoCR fs28 white">DISMINUYE
                    <span class="green3A robotoCB">70%</span>
                    TUS PAGOS DE AGUA, LUZ Y GAS</h1>
                <div class="c-banner">
                    <div class="c-img"><img src="assets/img/home-complete.svg" alt="home-complete"></div>
                    <div class="c-calc-form">
                        <h5 class="fs16 robotoB white">Nosotros te asesoramos para convertir tu Casa Verde.</h5>
                        <form action="" id="form-calcular">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input
                                    class="mdl-textfield__input"
                                    type="text"
                                    id="tb-nombre"
                                    name="tb-nombre"
                                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                                    require="require">
                                <label class="mdl-textfield__label" for="tb-nombre">Nombre</label>
                                <span class="mdl-textfield__error">Escribe tu nombre correctamente.</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input
                                    class="mdl-textfield__input"
                                    type="emain"
                                    id="tb-mail"
                                    name="tb-mail"
                                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$"
                                    require="require">
                                <label class="mdl-textfield__label" for="tb-mail">Correo electrónico</label>
                                <span class="mdl-textfield__error">Escribe tu correo correctamente.</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input
                                    class="mdl-textfield__input"
                                    type="text"
                                    name="tb-tel"
                                    id="tb-tel"
                                    pattern="-?[0-9]*(\.[0-9]+)?">
                                <label class="mdl-textfield__label" for="tb-tel">Teléfono</label>
                                <span class="mdl-textfield__error">Escribe un numero válido.</span>
                            </div>
                            <button
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
                                id="btn-calcular">Quiero calcular mi ahorro</button>
                        </form>
                        <div class="c-message">
                            <span class="fs16 robotoR green3A">Convierte tu Casa Verde, cambia productos de
                                tu hogar por electrodomesticos de bajo consumo y más</span></div>
                        <div class="c-info-form">
                            <h3 class="fs30 robotoCB green3A">¡Te ayudamos a calcular tu Ahorro!</h3>
                            <h5 class="fs19 robotoB white">Reduce al 70% tu presupuesto con Mi Casa Verde</h5>
                            <form action="">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input
                                        class="mdl-textfield__input"
                                        type="text"
                                        id="tb_nombre"
                                        pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                                        require="require">
                                    <label class="mdl-textfield__label" for="tb-nombre">Nombre</label>
                                    <span class="mdl-textfield__error">Escribe tu nombre correctamente.</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input
                                        class="mdl-textfield__input"
                                        type="email"
                                        id="tb-mail"
                                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$"
                                        require="require">
                                    <label class="mdl-textfield__label" for="tb-mail">Correo electrónico</label>
                                    <span class="mdl-textfield__error">Escribe tu correo correctamente.</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input
                                        class="mdl-textfield__input"
                                        type="text"
                                        id="tb-tel"
                                        pattern="-?[0-9]*(\.[0-9]+)?">
                                    <label class="mdl-textfield__label" for="tb-tel">Teléfono</label>
                                    <span class="mdl-textfield__error">Escribe un numero válido.</span>
                                </div>
                                <button
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent info-btn">Deseo más información</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------------- DESTOP SECCION INICIO
            ------------------------------>
            <div class="c-main desktop">
                <h1 class="robotoCR fs28 white">DISMINUYE
                    <span class="green3A robotoCB">70%</span>
                    TUS PAGOS DE AGUA, LUZ Y GAS</h1>
                <div class="c-message">
                    <span class="fs16 robotoR green3A">Convierte tu Casa VERDE, cambia productos de
                        tu hogar por electrodomesticos de bajo consumo, paneles solares, LEDS y muchos
                        más.</span></div>
                <div class="c-banner">
                    <div class="c-img"><img src="assets/img/home-complete.svg" alt="home-complete"></div>
                    <div class="c-calc-form">
                        <h5 class="fs16 robotoB white">Nosotros te asesoramos para convertir tu Casa Verde.</h5>
                        <form id="form-calcular2">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input
                                    class="mdl-textfield__input"
                                    type="text"
                                    id="tb-nombre"
                                    name="tb-nombre"
                                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                                    require="require">
                                <label class="mdl-textfield__label" for="tb-nombre">Nombre</label>
                                <span class="mdl-textfield__error">Escribe tu nombre correctamente.</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input
                                    class="mdl-textfield__input"
                                    type="email"
                                    id="tb-mail"
                                    name="tb-mail"
                                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$"
                                    require="require">
                                <label class="mdl-textfield__label" for="tb-mail">Correo electrónico</label>
                                <span class="mdl-textfield__error">Escribe tu correo correctamente.</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input
                                    class="mdl-textfield__input"
                                    type="text"
                                    id="tb-tel"
                                    name="tb-tel"
                                    pattern="-?[0-9]*(\.[0-9]+)?">
                                <label class="mdl-textfield__label" for="tb-tel">Teléfono</label>
                                <span class="mdl-textfield__error">Escribe un numero válido.</span>
                            </div>
                            <button
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
                                id="btn-calcular2">Quiero calcular mi ahorro</button>
                        </form>
                        <div id="ancla-ahorro"></div>
                    </div>
                </div>
                <div class="c-info-form">
                    <h3 class="fs30 robotoCB green3A">¡Te ayudamos a calcular tu Ahorro!</h3>
                    <h5 class="fs20 robotoB white">Reduce al 70% tu presupuesto con Mi Casa Verde</h5>
                    <form id="form-info">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input
                                class="mdl-textfield__input"
                                type="text"
                                id="tb-nombre"
                                name="tb-nombre"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                                require="require">
                            <label class="mdl-textfield__label" for="tb-nombre">Nombre</label>
                            <span class="mdl-textfield__error">Escribe tu nombre correctamente.</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input
                                class="mdl-textfield__input"
                                type="email"
                                id="tb-mail"
                                name="tb-mail"
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$"
                                require="require">
                            <label class="mdl-textfield__label" for="tb-mail">Correo electrónico</label>
                            <span class="mdl-textfield__error">Escribe tu correo correctamente.</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input
                                class="mdl-textfield__input"
                                type=""
                                id="tb-tel"
                                name="tb-tel"
                                pattern="-?[0-9]*(\.[0-9]+)?">
                            <label class="mdl-textfield__label" for="tb-tel">Teléfono</label>
                            <span class="mdl-textfield__error">Escribe un numero válido.</span>
                        </div>
                        <button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent info-btn"
                            type="submit"
                            id="btn-info">Deseo más información</button>
                    </form>
                    <div id="ancla-ahorro"></div>
                </div>
            </div>
            <!-- DESTOP SECCION FIN -->
            <div class="c-beneficios-main">
                <img
                    src="assets/img/beneficios.svg"
                    class="beneficios-title"
                    alt="beneficios-responsive">
                <div class="c-beneficios">
                    <div class="beneficio-item">
                        <img src="assets/img/asesoria.svg" alt="asesoria">
                        <div>
                            <h6 class="fs22 robotoCR green56">Asesoría / Calidad</h6>
                            <span class="fs14 robotoR gray70">
                                Optimizamos tu presupuesto, con ecotecnologías certificadas</span>
                        </div>
                    </div>
                    <div class="beneficio-item">
                        <img src="assets/img/entrega-inmediata.svg" alt="entrega-inmediata">
                        <div>
                            <h6 class="fs22 robotoCR green56">Entrega e Instalación Inmediata</h6>
                            <span class="fs14 robotoR gray70">En 8 días, tendrás tus ecotecnologías instaladas en tu hogar o negocio</span>
                        </div>
                    </div>
                    <div class="beneficio-item">
                        <img src="assets/img/paga-menos.svg" alt="paga-menos">
                        <div>
                            <h6 class="fs22 robotoCR green56">Paga Menos</h6>
                            <span class="fs14 robotoR gray70">Ahorra en todos tus pagos mensuales</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Imcorpora Ecotecnologías de calidad-->
            <div class="c-calidad-main">
                <img
                    src="assets/img/logo-blanco-micasa.svg"
                    alt="logo-mi-casa-blanco">
                <div class="c-frase">
                    <span class="robotoB fs26 white">¡Incorpora Ecotecnologías de Calidad!</span>
                </div>
                <div class="c-button-info">
                    <button
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent info-btn"
                        id="btn-info-ancla">Deseo más información</button>
                </div>
            </div>

            <div class="c-comprados-main">
                <div class="c-comp-title">
                    <span class="fs30 green56 robotoCB">
                        Productos más comprados</span></div>
                <div class="c-options robotoR">
                    <input type="radio" name="comprado-sel" id="rd-populares">
                    <label for="rd-populares">Más populares</label>
                    <input type="radio" name="comprado-sel" id="rd-agua">
                    <label for="rd-agua">Ahorra Agua</label>
                    <input type="radio" name="comprado-sel" id="rd-luz">
                    <label for="rd-luz">Ahorra Luz</label>
                    <input type="radio" name="comprado-sel" id="rd-gas">
                    <label for="rd-gas">Ahorra Gas</label>
                </div>
                <div class="c-imagenes-main poupulares">
                    <div class="imagen-item imagen-item-pop-1"></div>
                    <div class="imagen-item imagen-item-pop-2"></div>
                    <div class="imagen-item imagen-item-pop-3"></div>
                    <div class="imagen-item imagen-item-pop-4"></div>
                    <div class="imagen-item imagen-item-pop-5"></div>
                    <div class="imagen-item imagen-item-pop-6"></div>
                    <div class="imagen-item imagen-item-pop-7"></div>
                </div>
                <div class="c-imagenes-main  ahorradores-agua">
                    <div class="imagen-item imagen-item-ahoagu-1"></div>
                    <div class="imagen-item imagen-item-ahoagu-2"></div>
                    <div class="imagen-item imagen-item-ahoagu-3"></div>
                    <div class="imagen-item imagen-item-ahoagu-4"></div>
                    <div class="imagen-item imagen-item-ahoagu-5"></div>
                    <div class="imagen-item imagen-item-ahoagu-6"></div>
                    <div class="imagen-item imagen-item-ahoagu-7"></div>
                </div>
                <div class="c-imagenes-main  ahorradores-gas">
                    <div class="imagen-item imagen-item-ahogas-1"></div>
                    <div class="imagen-item imagen-item-ahogas-2"></div>
                    <div class="imagen-item imagen-item-ahogas-3"></div>
                    <div class="imagen-item imagen-item-ahogas-4"></div>
                    <div class="imagen-item imagen-item-ahogas-5"></div>
                    <div class="imagen-item imagen-item-ahogas-6"></div>
                    <div class="imagen-item imagen-item-ahogas-7"></div>
                </div>
                <div class="c-imagenes-main  ahorradores-luz">
                    <div class="imagen-item imagen-item-aholuz-1"></div>
                    <div class="imagen-item imagen-item-aholuz-2"></div>
                    <div class="imagen-item imagen-item-aholuz-3"></div>
                    <div class="imagen-item imagen-item-aholuz-4"></div>
                    <div class="imagen-item imagen-item-aholuz-5"></div>
                    <div class="imagen-item imagen-item-aholuz-6"></div>
                    <div class="imagen-item imagen-item-aholuz-7"></div>
                </div>
            </div>
            <div class="c-marcas">
                <div class="marcas-items">
                    <img src="assets/img/whirlpool-logo.svg" alt="whirlpool-logo">
                    <img src="assets/img/mabe-logo.svg" alt="mabe-logo">
                    <img src="assets/img/daewoo-logo.svg" alt="">
                    <img src="assets/img/helvex-logo.svg" alt="">
                    <img src="assets/img/iusa-logo.svg" alt="">
                    <img src="assets/img/bosch-logo.svg" alt="">
                    <img src="assets/img/acros-logo.svg" alt="">
                    <img src="assets/img/calorex-logo.svg" alt="">
                    <img src="assets/img/gree-logo.svg" alt="gree-logo">
                    <img src="assets/img/cinsa-logo.svg" alt="">
                </div>
            </div>
            <div class="c-last-desc">
                <img src="assets/img/logo-mi-casa.svg" alt="">
                <span class="fs16 green56 robotoB">Somos una empresa dedicada a la comercialización de ecotecnologías</span>
                <span class="fs16 robotoR gray70">Ofrecemos soluciones para que ahorres dinero,
                    gracias a las ecotecnologías certificadas y eficientes en el consumo de energía,
                    agua y gas</span>
            </div>
            <!--copyRight-->
            <div class="c-copyright">
                <i class="far fa-copyright white"></i>
                <span class="white fs14 robotoR">2018 Mi Casa Verde</span>
            </div>
            <script src="assets/libs/jQuery/jQuery-3-3-1.min.js"></script>
            <script src="assets/libs/mdl/material.js"></script>
            <script src="assets/js/data-send.js"></script>
            <script src="assets/js/anclas.js"></script>
        </body>
    </html>