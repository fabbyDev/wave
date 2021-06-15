 @extends('templates/layout')
    
@section('main-content')
    <!-- slider -->
    <div id="principal-splide" data-aos="fade-down" class="splide">
        <div class="splide__track">
            <ul class="container__banner splide__list position-relative">

                <li class="splide__slide h-100">
                    <div class="wrapper-section h-100">
                        <div class="banner w-100 h-100">
                            <div class="instruments__banner position-relative">
                                <img class="position-absolute" src="{{asset('images/banner/drumm.png')}}" alt="">
                                <img class="position-absolute" src="{{asset('images/banner/saxo.png')}}" alt="">
                                <img class="position-absolute" src="{{asset('images/banner/guitar.png')}}" alt="">
                                <img class="position-absolute" src="{{asset('images/banner/earphones.png')}}" alt="">
                                <img class="position-absolute" src="{{asset('images/banner/teclado.png')}}" alt="">
                                <img class="position-absolute" src="{{asset('images/banner/violin.png')}}" alt="">
                            </div>
                            <div class="h-100 position-relative content__banner">
                                <div class="d-flex gap-2 flex-column align-items-center justify-content-center">
                                    <p class="fw-bold text-center">Titulo Sorprendente Para El Banner ...</p>
                                    <p class="fw-light px-5 text-center">explicabo natus aliquam perferendis nihil iure ullam sunt architecto error. Quibusdam natus beatae dolore debitis sit commodi consequatur mollitia cumque rem.</p>
                                    <button class="button__banner btn bg-danger text-light py-3 px-5">Ver Productos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="splide__slide h-100">
                    <div class="wrapper-section h-100">
                        <div class="banner w-100 h-100 d-flex justify-content-between">
                            <div class="h-100 position-relative content__banner p-5">
                                <div class="mx-4 px-5 d-flex gap-2 flex-column align-items-center justify-content-center">
                                    <p class="fw-bold text-center">Titulo Sorprendente Para El Banner</p>
                                    <p class="fw-light px-5 text-center">explicabo natus aliquam perferendis nihil iure ullam sunt architecto error. Quibusdam natus beatae dolore debitis sit commodi consequatur mollitia cumque rem.</p>
                                    <button class="button__banner btn bg-danger text-light py-3 px-5">Ver Productos</button>
                                </div>
                            </div>

                            <div class="flex-1 w-50 d-flex gap-2 guitar__banner">
                                <img src="{{asset('images/banner/guitar_banner.jpg')}}"  width="154px" height="480px" alt="">
                                <img src="{{asset('images/banner/guitar_bannerTwo.jpg')}}" width="64px" height="480px" alt="">
                                <img src="{{asset('images/banner/guitar_bannerTree.jpg')}}"  width="154px" height="480px" alt="">
                            </div>
                        </div>
                    </div>
                </li>


                <li class="splide__slide h-100">
                    <div class="wrapper-section h-100">
                        <div class="banner__saxo w-100 h-100 d-flex justify-content-center align-items-center">
                            <div class="h-100  content__banner p-5" style="left: -320px; top:-100px;">
                                <div style="width: 650px;"  class="mx-4 px-5 d-flex gap-2 flex-column align-items-center justify-content-center">
                                    <p class="title___section fw-bold text-center text-light">Titulo Sorprendente Para El Banner</p>
                                    <p class="fw-light px-5 text-center text-light">explicabo natus aliquam perferendis nihil iure ullam sunt architecto error. Quibusdam natus beatae dolore debitis sit commodi consequatur mollitia cumque rem.</p>
                                    <button class="button__banner btn bg-danger text-light py-3 px-5">Ver Productos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev" >
                <div class="bg-dark p-2 d-flex align-items-center rounded">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </div>
            </button>

            <button class="splide__arrow splide__arrow--next">
                <div class="bg-dark p-2 d-flex align-items-center rounded">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </div>
            </button>
        </div>

    </div> 

    <!-- main -->
    <main class="main__page">
       
        <div class="wrapper-content"> 
            
            <article>
                <div class="divisor__section">
                    <div class="w-100 d-flex justify-content-center">
                        <p>CATEGORIAS</p>
                    </div>
                </div>   
                
                <section class="w-100 d-flex flex-column" data-aos="fade-down"  data-aos-duration="1000" style="margin-bottom: 6em;">
                    <div class="d-flex justify-content-center flex-wrap mb-5">
                       
                        <div class="container_item_card d-flex justify-content-center mx-3 my-2 mx-lg-3">
                            <div class="item__cards item__cards_instruments">
                                <p>Instrumentos</p>
                                <button class="button__card px-3">Ver</button>
                             </div>
                        </div>
                        
                        <div class="container_item_card d-flex justify-content-center mx-3 my-2 mx-lg-3" >
                            <div class="item__cards item__cards_equipos">
                                <p>Equipos de Sonido</p>
                                <button class="button__card px-3">Ver</button>
                             </div>
                        </div>
                        
                        <div class="container_item_card d-flex justify-content-center mx-3 my-2 mx-lg-3" >
                            <div class="item__cards item__cards_accesorios">
                                <p>Accesorios</p>
                                <button class="button__card px-3">Ver</button>
                             </div>
                        </div>

                         

                    </div>
                        <button class="btn btn-danger px-5 py-2" style="font-size: .88em;margin: 0 auto;border-radius: .08em !important; width: 19em;">Ver Todas las categorias</button>
                </section>
    
            </article>
            
            <article>
                
                <div class="divisor__section">
                    <div class="w-100 d-flex justify-content-center">
                        <p>BENEFICIOS</p>
                    </div>
                </div>
    
                <section class="row"style="margin-bottom: 4em;">
                    
                    <div class="col-lg-6 p-3">
                        <div id="benefits-splide" class="splide">
                            <div class="splide__track">
                                <ul class=" splide__list">
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/cantante.jpg')}}" style="border-radius: .4em;" alt=""> 
                                    </li>
        
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/hombre_saxo.jpg')}}" style="border-radius: .4em;" alt="">
                                    </li>
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/hombre_guitarra.jpg')}}" style="border-radius: .4em;" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 px-5">
                        <h2 class="title___section fw-bold p-3">ELEGANTE EN EL ESCENARIO</h2>
                        <p class="my-4 fw-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi non modi reiciendis assumenda tempore ex, odio ipsum, asperiores id libero corporis iusto fugit error corrupti molestiae omnis atque quisquam veniam.</p>
                    </div>

                </section> 

                 <section class="row">
                
                    <div class="col-lg-6 px-5">
                        <h2 class="title___section fw-bold p-3">LA MEJOR CALIDAD MUSICAL</h2>
                        <p class="my-4 fw-lighter p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi non modi reiciendis assumenda tempore ex, odio ipsum, asperiores id libero corporis iusto fugit error corrupti molestiae omnis atque quisquam veniam.</p>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div id="products-splide" class="splide">
                            <div class="splide__track">
                                <ul class=" splide__list">
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/drumm.jpg')}}" width="450px" height="359px" alt="">
                                    </li>
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/violin.jpg')}}" width="450px" height="359px" alt="">
                                    </li>
                                    
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/microfono.jpg')}}" width="450px" height="359px" alt="">
                                    </li>
    
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/parlante.jpg')}}" width="450px" height="359px" alt="">
                                    </li>
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/guitarra_electrica.jpg')}}" width="450px" height="359px" alt="">
                                    </li>
                                    <li class="splide__slide h-100 d-flex justify-content-center">
                                        <img src="{{asset('images/benefits/piano.jpg')}}" width="450px" height="359px"  alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </section>

            </article>

        </div>

        <article data-aos="fade-down d-none">
            <div class="position-relative h-100 w-100 banner__music">
                
                <div class=" top-0 shadow__banner">
                    <div class="wrapper-content">
                        <div class="w-100">
                            <h2 class="fw-bold text-center p-3 my-4 text-light" style="font-size: 2em;">REPRODUCE LA MUSICA <br> QUE MAS AMAS</h2>
                        </div>
    
                        <div class="d-flex w-100 justify-content-center justify-content-sm-between align-items-center flex-wrap">
                            
                            <div class="my-3 h-100">
                                <div class="items__music h-100 bg-light rounded position-relative overflow-hidden">
                                    <div class="h-100">
                                        <img class="m-0 p-0" src="{{asset('images/record/tocadisco.jpg')}}" alt="">
                                    </div>
                                    <div class="position-absolute h-100 w-100 d-flex align-items-start justify-content-center" style="bottom: 10px;">
                                        <p class="text-center m-0 p-2 text-dark fw-bold fs-4">TocaDiscos</p>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="my-3 h-100">
                                <div class="items__music h-100 bg-light rounded position-relative overflow-hidden">
                                    <div class="h-100">
                                        <img class="m-0 p-0"  src="{{asset('images/record/audifonos.jpg')}}" alt="">
                                    </div>
                                    <div class="position-absolute h-100 w-100 d-flex align-items-start justify-content-center" style="bottom: 10px;">
                                        <p class="text-center m-0 p-2 text-light fw-bold fs-4">Audifonos</p>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3 h-100">
                                <div class="items__music h-100 bg-light rounded position-relative overflow-hidden">
                                    <div class="h-100" >
                                        <img class="m-0 p-0" src="{{asset('images/record/parlante.jpg')}}" alt="">
                                    </div>
                                    <div class="position-absolute h-100 w-100 d-flex align-items-start justify-content-center" style="bottom: 10px;">
                                        <p class="text-center m-0 p-2 text-light fw-bold fs-4">Parlantes</p>
                                    </div>
                                </div>
                            </div>

                        </div>
    
                        <div class="w-100 my-5 d-flex justify-content-center">
                            <button class="btn btn-warning px-5 fw-bold">VER</button>
                        </div>
    
                    </div>
                </div>
            </div>
        </article>

        <article data-aos="zoom-in">
            <div class="wrapper-content">
                <div class="divisor__section">
                    <div class="w-100 d-flex justify-content-center">
                        <p>MARCAS</p>
                    </div>
                </div>
            </div>

            <section class="bg-dark p-5">
                <div class="w-100">
                    <h2 class="title__marks fw-bold text-center text-light">MARCAS QUE NOS RESPALDAN</h2>
                </div>
                <div class="wrapper-content">
                    <div id="marks-splide" class="splide">
                        <div class="splide__track">
                            <ul class=" splide__list">
                                <li class="splide__slide h-100 d-flex justify-content-center">
                                    <img src="{{asset('images/marks/mark_one.png')}}" alt=""> 
                                </li>
                                <li class="splide__slide h-100 d-flex justify-content-center">
                                    <img src="{{asset('images/marks/mark_two.png')}}" alt=""> 
                                </li>
                                <li class="splide__slide h-100 d-flex justify-content-center">
                                    <img src="{{asset('images/marks/mark_thre.png')}}" alt=""> 
                                </li>
                                
                                <li class="splide__slide h-100 d-flex justify-content-center">
                                    <img src="{{asset('images/marks/mark_four.png')}}" alt=""> 
                                </li>
    
                                <li class="splide__slide h-100 d-flex justify-content-center">
                                    <img src="{{asset('images/marks/mark_five.png')}}" alt=""> 
                                </li>
    
                                <li class="splide__slide h-100 d-flex justify-content-center">
                                    <img src="{{asset('images/marks/mark_six.png')}}" alt=""> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <article class="section__conocenos" >
            <div class="wrapper-content">  
                <div class="divisor__section">
                    <div class="w-100 d-flex justify-content-center">
                        <p>CONOCE A WAVE</p>
                    </div>
                </div>
                
                <section class="row">
                    <div class="col-sm-6">
                        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/eTWTTZIggig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6 px-5">
                        <h2 class="title___section fw-bold py-3 text-left">CONOCENOS</h2>
                        <p class="my-4 fw-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi non modi reiciendis assumenda tempore ex, odio ipsum, asperiores id libero corporis iusto fugit error corrupti molestiae omnis atque quisquam veniam.</p>
                        <button class="btn btn-danger d-block mx-auto" style="width: 200px;" >Ver mas sobre Wave</button>
                    </div>
               </section> 
            </div>

        </article>

        <article class="section__suscribe">
            <div class="bg-danger p-4">
                <div class="wrapper-content">
                    <div class="p-0 p-sm-5 text-light d-flex justify-content-center flex-column" >
                        <h6 class="fs-3 fw-bold">Suscribete para recibir las mejores ofertas</h6>
                        <p class="p-4">Suscríbase a nuestro boletín para recibir las últimas noticias sobre nuestros productos, eventos y ventas.</p>
                        <div class="w-100 position-relative">
                            <i class="bi bi-cursor-fill icon__send text-danger position-absolute fs-3"></i>
                            <input class="w-100 rounded p-4" placeholder="introduce tu email" style="border: 0; outline: none;" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <!-- Loader -->
    <div class="container__loader">
        <div class="loader"></div>
    </div>

@endsection