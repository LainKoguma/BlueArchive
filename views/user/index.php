<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Clientes Satisfechos</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up" id="clientessatisfechos"></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Proyectos Realizados</h5>
                        <h1 class="mb-0" data-toggle="counter-up" id="proyectosrealizados"></h1>
                    </div>
                </div>
            </div>
            <!--
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">1000</h1>
                        </div>
                    </div>
                </div>-->
        </div>
    </div>
</div>
<!-- Facts Start -->


<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Acerca de nosotros</h5>
                    <h1 class="mb-0" id='titleabout'></h1>
                </div>
                <p class="mb-4" id='descriptionabout'></p>
                <div class="row g-0 mb-3" id='contentpalomitas'>

                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">¿Tienes dudas? llamanos</h5>
                        <h4 class="text-primary mb-0"></h4>
                    </div>
                </div>
                <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Solicita una cotizacion</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="style/img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Por qué elegirnos</h5>
            <h1 class="mb-0" id="whyussubtitle"></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4 id='titlerazon1'></h4>
                        <p class="mb-0" id='descrazon1'></p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4 id='titlerazon2'></h4>
                        <p class="mb-0" id='descrazon2'></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                        src="style/img/feature.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4 id='titlerazon3'></h4>
                        <p class="mb-0" id='descrazon3'></p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4 id='titlerazon4'></h4>
                        <p class="mb-0" id='descrazon4'></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nuestros Servicios</h5>
            <h1 class="mb-0">Soluciones de IT personalizadas para tu negocio</h1>
        </div>
        <div class="row g-5" id="servicios">

        </div>
    </div>
</div>
<!-- Service End -->


<!-- Pricing Plan Start -->
<!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
            <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Basic Plan</h4>
                        <small class="text-uppercase">For Small Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Standard Plan</h4>
                        <small class="text-uppercase">For Medium Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Advanced Plan</h4>
                        <small class="text-uppercase">For Large Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --->
<!-- Pricing Plan End -->


<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Solicita una cotización</h5>
                    <h1 class="mb-0" id='quotetitle'></h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3" id='quotecar1'></i></h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3" id='quotecar2'></i></h5>
                    </div>
                </div>
                <p class="mb-4" id='quotedesc'></p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">LLamanos para cualquier duda</h5>
                        <h4 class="text-primary mb-0" id='quotetel'></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Tu Nombre"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="Tu Correo"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Seleccione servicio a consultar</option>
                                    <option value="1">Mantenimiento a Computadoras</option>
                                    <option value="2">Instalación de camaras</option>
                                    <option value="3">Desarrollo de software</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3"
                                    placeholder="Mensaje"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3">Solicitar Cotización</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Testimonial Start -->
<!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
            <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="style/img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="style/style/img/testimonial-2.jpg"
                        style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="style/img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="style/img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
        </div>
    </div>
</div>
 Testimonial End


Team Start
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
            <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="style/style/img/team-1.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="style/img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="style/img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 Team End


Blog Start 
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
            <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="style/img/blog-1.jpg" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                            href="">Web Design</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">How to build a website</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="style/img/blog-2.jpg" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                            href="">Web Design</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">How to build a website</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="style/img/blog-3.jpg" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                            href="">Web Design</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">How to build a website</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
Blog Start


Vendor Start
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <img src="style/img/vendor-1.jpg" alt="">
                <img src="style/img/vendor-2.jpg" alt="">
                <img src="style/img/vendor-3.jpg" alt="">
                <img src="style/img/vendor-4.jpg" alt="">
                <img src="style/img/vendor-5.jpg" alt="">
                <img src="style/img/vendor-6.jpg" alt="">
                <img src="style/img/vendor-7.jpg" alt="">
                <img src="style/img/vendor-8.jpg" alt="">
                <img src="style/img/vendor-9.jpg" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- Vendor End -->


<script>
$("document").ready(function() {
    obtenerclientes();
    obteneracercade();
    obtenerwhy()
    obtenerquote()
})

var clientessatisfechos = document.getElementById("clientessatisfechos")
var proyectosrealizados = document.getElementById("proyectosrealizados")
var titleabout = document.getElementById("titleabout")
var descriptionabout = document.getElementById("descriptionabout")
var contentpalomitas = document.getElementById("contentpalomitas")
var whyussubtitle = document.getElementById("whyussubtitle")
var titlerazon1 = document.getElementById("titlerazon1")
var descrazon1 = document.getElementById("descrazon1")
var titlerazon2 = document.getElementById("titlerazon2")
var descrazon2 = document.getElementById("descrazon2")
var titlerazon3 = document.getElementById("titlerazon3")
var descrazon3 = document.getElementById("descrazon3")
var titlerazon4 = document.getElementById("titlerazon4")
var descrazon4 = document.getElementById("descrazon4")
var quotetitle = document.getElementById("quotetitle")
var quotecar1 = document.getElementById("quotecar1")
var quotecar2 = document.getElementById("quotecar2")
var quotedesc = document.getElementById("quotedesc")

function obtenerclientes() {

    //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
    datos = {
        "accion": "obtenerclientes"
    };

    $.ajax({
        url: "style/layouts/consultardistribucion.php",
        type: "POST",
        data: datos
    }).done(function(mensaje) {
        clientessatisfechos.innerText = " " + mensaje.clientes[0];
        proyectosrealizados.innerText = " " + mensaje.proyectos[0];
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("AJAX Error:", textStatus, errorThrown);
    });


}
function obteneracercade() {

    //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
    datos = {
        "accion": "obteneracercade"
    };

    $.ajax({
        url: "style/layouts/consultardistribucion.php",
        type: "POST",
        data: datos
    }).done(function(mensaje) {
        var palomita = ''
        for(var x = 0; x < mensaje.msg; x++){
            if(mensaje.fila[x]["tipo"] == "titulo"){
                
                titleabout.innerText = " " + mensaje.fila[x]["texto"];

            }
            if(mensaje.fila[x]["tipo"] == "descripcion"){
                
                descriptionabout.innerText = " " + mensaje.fila[x]["texto"];

            }
            if(mensaje.fila[x]["tipo"] == "palomitas"){

                palomita += `<div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>` + mensaje.fila[x]["texto"] + `</h5>
                    </div>`            

            }


            
        }
        contentpalomitas.innerHTML = palomita
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("AJAX Error:", textStatus, errorThrown);
    });


}
function obtenerwhy() {

    //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
    datos = {
        "accion": "obtenerwhy"
    };

    $.ajax({
        url: "style/layouts/consultardistribucion.php",
        type: "POST",
        data: datos
    }).done(function(mensaje) {
        for(var x = 0; x < mensaje.msg; x++){
            if(mensaje.fila[x]["tipo"] == "titulo"){
                
                whyussubtitle.innerText = " " + mensaje.fila[x]["texto"];

            }
            if(mensaje.fila[x]["tipo"] == "razon1"){
                
                titlerazon1.innerText = " " + mensaje.fila[x]["texto"];
                descrazon1.innerText = " " + mensaje.fila[x]["descripcion"];

            }
            if(mensaje.fila[x]["tipo"] == "razon2"){
                
                titlerazon2.innerText = " " + mensaje.fila[x]["texto"];
                descrazon2.innerText = " " + mensaje.fila[x]["descripcion"];

            }
            if(mensaje.fila[x]["tipo"] == "razon3"){
                
                titlerazon3.innerText = " " + mensaje.fila[x]["texto"];
                descrazon3.innerText = " " + mensaje.fila[x]["descripcion"];

            }
            if(mensaje.fila[x]["tipo"] == "razon4"){
                
                titlerazon4.innerText = " " + mensaje.fila[x]["texto"];
                descrazon4.innerText = " " + mensaje.fila[x]["descripcion"];

            }
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("AJAX Error:", textStatus, errorThrown);
    });


}
function obtenerquote() {

    //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
    datos = {
        "accion": "obtenerquote"
    };

    $.ajax({
        url: "style/layouts/consultardistribucion.php",
        type: "POST",
        data: datos
    }).done(function(mensaje) {
        for(var x = 0; x < mensaje.msg; x++){
            if(mensaje.fila[x]["tipo"] == "titulo"){
                
                quotetitle.innerText = " " + mensaje.fila[x]["texto"];

            }
            if(mensaje.fila[x]["tipo"] == "caracteristica1"){
                
                quotecar1.innerText = " " + mensaje.fila[x]["texto"];


            }
            if(mensaje.fila[x]["tipo"] == "caracteristica2"){
                
                quotecar2.innerText = " " + mensaje.fila[x]["texto"];

            }
            if(mensaje.fila[x]["tipo"] == "descripcion"){
                
                quotedesc.innerText = " " + mensaje.fila[x]["texto"];

            }
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("AJAX Error:", textStatus, errorThrown);
    });


}
</script>

<script>
$(document).ready(function() {
    loadservices();
});

function loadservices() {

    datos = {
        "accion": "loadservices"
    };
    $.ajax({
        url: "user/Controller/userindexcontroller.php",
        type: "POST",
        data: datos
    }).done(function(mensaje) {
        if (mensaje.msg > 0) {
            var services = ''
            
            for (var z = 0; z < mensaje.msg; z++) {
                if(mensaje.respuesta[z]["iscontacto"] == null){
                    services += `<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">`
                    services += '<img src="' + mensaje.respuesta[z]["imagen"] +
                        '" alt="imagen" class="brand-image img-circle elevation-3" style="opacity: .8">'
                    services += '</div>'
                    services += '<h4 class="mb-3">' + mensaje.respuesta[z]["titulo"] + '</h4>'
                    services += '<p class="m-0">' + mensaje.respuesta[z]["descripcion"] + '</p>'
                    services += '<a class="btn btn-lg btn-primary rounded" href="' + mensaje.respuesta[z]["redirige"] + '">'
                    services += `<i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>`
                }
                else{
                    services += `    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                        <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">`
                        
                    services += '<h3 class="text-white mb-3">' + mensaje.respuesta[z]["titulo"] + '</h3>'
                    services += '<p class="text-white mb-3">' + mensaje.respuesta[z]["descripcion"] + '</p>'
                    services += '<h2 class="text-white mb-0">' + mensaje.respuesta[z]["iscontacto"] + '</h2>'
                    services +=`    </div>
                    </div>`
                }
            }


            document.getElementById("servicios").innerHTML = services
        } else {

        }
    })

}
</script>