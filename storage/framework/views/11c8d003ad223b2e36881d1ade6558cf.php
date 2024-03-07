
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evento</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!--    Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/img/favicons/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicons/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/img/favicons/favicon-16x16.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicons/favicon.ico')); ?>">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('assets/img/favicons/mstile-150x150.png')); ?>">
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/prism/prism.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/theme.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/user.css')); ?>" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yV9pL/CSBFmssvE7BoHp1uSKnH4LbIbDkPjFq0Rzy3Qv50l5a1BJsbAcaZlS9fI" crossorigin="anonymous">
    <link href="<?php echo e(asset('vendors/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6gD0NX6PTbhEJ6QF/WokGBR5dFZ1xM2" crossorigin="anonymous">

        

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        
            
            <main>
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#10203F;">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">EvenTo</a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <?php if(Route::has('login')): ?>
                                    <?php if(auth()->guard()->check()): ?>
                                        <li class="nav-item d-none d-sm-block"><a class="nav-link" href="<?php echo e(url('/dashboard')); ?>"><i class="fas fa-user text-info me-2"></i></a></li>
                                    <?php else: ?>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                                        <?php if(Route::has('register')): ?>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                
                      
                          
                          
                        
                    </div>
                  </div>
                </section>
                
                
          
                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="py-6">
          
                  <div class="container">
                    <div class="row">
                      <h1 class="header-title display-4 header text-start mb-5"> TOP COURSES</h1>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/art-masterclass.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/moma.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">The Professional Art Masterclass</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/premiere.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/moma.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">Premiere Pro CC for Beginners</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/electricity.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/y.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">Electricity & Magnetism</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/chemistry.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/school.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">School chemistry beta</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/oriental-art.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/moma.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">Modernism in Oriental Art</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/visual-art.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/cal-arts.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">Compositions in Visual Art</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/physics.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/school-physics.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">High school physics</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                          <div class="position-relative"><img class="w-100" src="assets/img/gallery/davinci.png" alt="courses" />
                            <div class="course-logo"><img src="assets/img/gallery/moma.png" alt="logo" /></div>
                            <div class="ps-6"><span class="badge bg-primary rounded-0" style="padding: 11.1px 21px">Free</span></div>
                          </div>
                          <div class="card-body px-0 py-3">
                            <h5 class="mb-0 font-sans-serif fw-bold fs-md-0 fs-lg-1">Color Grading with Da Vinci</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of .container-->
          
                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->
          
          
          
          
                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="bg-secondary">
          
                  <div class="container">
                    <div class="row g-3">
                      <h1 class="header-title-explore display-4 header text-start mb-5"> EXPLORE EDUPRIX</h1>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/data-science.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/data-science.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Data Science</h4><a class="stretched-link explore-link" href="#!">78 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/business.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/business.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Business &amp; Management</h4><a class="stretched-link explore-link" href="#!">67 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/language.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/language.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Language</h4><a class="stretched-link explore-link" href="#!">85 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/information.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/information.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Information Technology</h4><a class="stretched-link explore-link" href="#!">98 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/film.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/film.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Modernism in Oriental Art</h4><a class="stretched-link explore-link" href="#!">68 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/math.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/math.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Compositions in Visual Art</h4><a class="stretched-link explore-link" href="#!">878 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/health.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/health.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Health &amp; Medical</h4><a class="stretched-link explore-link" href="#!">79 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                          <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                            <div class="d-flex align-items-center">
                              <div class="icon-box"><img class="eduprix-icon" src="assets/img/icons/design.png" alt="explore" /><img class="eduprix-icon-hover" src="assets/img/icons/design.svg" alt="explore" /></div>
                              <div class="flex-grow-1 ms-3">
                                <h4 class="fs-lg-1 text-light mb-0">Design &amp; Creative</h4><a class="stretched-link explore-link" href="#!">37 Courses</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of .container-->
          
                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->
          
          
                <section id="testimonial">
                  <div class="container">
                    <div class="row justify-content-end">
                      <div class="col-2 position-xl-relative">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselStudentReview" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselStudentReview" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
                      </div>
                    </div>
                    <h1 class="header-title display-4 header text-start mb-5"> STUDENT REVIEW</h1>
                    <div class="row flex-center h-100">
                      <div class="carousel slide" id="carouselStudentReview" data-bs-ride="carousel">
                        <div class="carousel-inner ps-4">
                          <div class="carousel-item active">
                            <div class="row h-100 align-items-center">
                              <div class="col-auto p-0">
                                <div class="card border-0 h-100">
                                  <div class="card-body h-100 p-0 pe-4">
                                    <div class="d-flex align-items-start"> <img src="assets/img/gallery/rectangle.png" alt="rectangle" /><img src="assets/img/gallery/student-review.png" alt="testimonials" width="315" /></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-xl-7 mb-4">
                                <div class="bg-holder z-index--1" style="background-image:url(assets/img/gallery/quotation.png);background-position:top center;background-size:auto;">
                                </div>
                                <!--/.bg-holder-->
          
                                <h1 class="fw-normal lh-1 mt-4 mt-lg-0">Emillie <br> Jonas</h1>
                                <h4 class="fw-light">England</h4>
                                <p class="mt-4 pe-xxl-8">Eduprix is an ideal location for anybody who wants to learn something new or share what they know with others.  Eduprix is a worldwide platform for online learning that helps to connect with one another via knowledge. It comes highly recommended from my side. </p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row h-100 align-items-center">
                              <div class="col-auto p-0">
                                <div class="card border-0 h-100">
                                  <div class="card-body h-100 p-0 pe-4">
                                    <div class="d-flex align-items-start"> <img src="assets/img/gallery/rectangle.png" alt="rectangle" /><img src="assets/img/gallery/student-review.png" alt="testimonials" width="315" /></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-xl-7 mb-4">
                                <div class="bg-holder z-index--1" style="background-image:url(assets/img/gallery/quotation.png);background-position:top center;background-size:auto;">
                                </div>
                                <!--/.bg-holder-->
          
                                <h1 class="fw-normal lh-1 mt-4 mt-lg-0">Ainara <br> Vergara</h1>
                                <h4 class="fw-light">USA</h4>
                                <p class="mt-4 pe-xxl-8">Eduprix is an ideal location for anybody who wants to learn something new or share what they know with others.  Eduprix is a worldwide platform for online learning that helps to connect with one another via knowledge. It comes highly recommended from my side. </p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row h-100 align-items-center">
                              <div class="col-auto p-0">
                                <div class="card border-0 h-100">
                                  <div class="card-body h-100 p-0 pe-4">
                                    <div class="d-flex align-items-start"> <img src="assets/img/gallery/rectangle.png" alt="rectangle" /><img src="assets/img/gallery/student-review.png" alt="testimonials" width="315" /></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-xl-7 mb-4">
                                <div class="bg-holder z-index--1" style="background-image:url(assets/img/gallery/quotation.png);background-position:top center;background-size:auto;">
                                </div>
                                <!--/.bg-holder-->
          
                                <h1 class="fw-normal lh-1 mt-4 mt-lg-0">Niek <br> Bove</h1>
                                <h4 class="fw-light">Bangladesh</h4>
                                <p class="mt-4 pe-xxl-8">Eduprix is an ideal location for anybody who wants to learn something new or share what they know with others.  Eduprix is a worldwide platform for online learning that helps to connect with one another via knowledge. It comes highly recommended from my side. </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-auto">
                            <div class="carousel-indicators position-relative">
                              <button class="active" type="button" data-bs-target="#carouselStudentReview" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselStudentReview" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselStudentReview" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
          
          
                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="bg-soft-primary">
          
                  <div class="container">
                    <div class="row flex-center">
                      <div class="col-12 col-md-6 col-lg-3 text-center mb-5 mb-lg-0"><img class="mb-5" src="assets/img/illustrations/top-course.png" height="140" alt="rectangle" />
                        <h1 class="text-secondary">1257</h1>
                        <h1 class="fw-normal text-secondary">Top <br> Courses</h1>
                        <p>Take courses from the world’s best <br> instructors and universities. </p>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 text-center mb-5 mb-lg-0"><img class="mb-5" src="assets/img/illustrations/happy-learners.png" height="140" alt="rectangle" />
                        <h1 class="text-secondary">99981</h1>
                        <h1 class="fw-normal text-secondary">Happy <br> Learners</h1>
                        <p>Learners from all around <br> the world.</p>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 text-center mb-5 mb-lg-0"><img class="mb-5" src="assets/img/illustrations/instructors.png" height="140" alt="rectangle" />
                        <h1 class="text-secondary">578</h1>
                        <h1 class="fw-normal text-secondary">Eminent <br> Instructors</h1>
                        <p>Learn your favourite course with <br> world-class instructors. </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of .container-->
          
                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->
          
          
          
          
                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section>
          
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <h1 class="header-title display-4 header text-center mb-5"> MEET OUR INSTRUCTORS</h1>
                        <div class="swiper-custom-container">
                          <div class="swiper-container theme-slider" data-swiper='{"spaceBetween":1,"slideToClickedSlide":true,"slidesPerView":1,"pagination":{"el":".swiper-pagination","clickable":true,"bulletActiveClass":"bullet-active"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":20},"480":{"slidesPerView":2,"spaceBetween":30},"640":{"slidesPerView":4,"spaceBetween":40}}}'>
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/john.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">John S. <br> Sergent</h3>
                                  <p class="mb-0">Head of Data Science</p>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/albrecht.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">Albrecht <br> Kachher</h3>
                                  <p class="mb-0">Developer and Lead Instructor</p>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/peter.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">Peter P. <br> Rubens</h3>
                                  <p class="mb-0">Digital Marketing Expart</p>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/david.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">David A. <br> Sequiros</h3>
                                  <p class="mb-0">Engineering Architect</p>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/john.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">John S. <br> Sergent</h3>
                                  <p class="mb-0">Head of Data Science</p>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/albrecht.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">Albrecht <br> Kachher</h3>
                                  <p class="mb-0">Developer and Lead Instructor</p>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/peter.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">Peter P. <br> Rubens</h3>
                                  <p class="mb-0">Digital Marketing Expart</p>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="text-center product"><img class="w-100 photograph" src="assets/img/gallery/david.png" alt="" />
                                  <h3 class="fw-normal font-base lh-1 text-black mt-3">David A. <br> Sequiros</h3>
                                  <p class="mb-0">Engineering Architect</p>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-pagination position-static d-flex justify-contnet-evenly mx-2 my-5"> </div>
                            <div class="d-flex justify-content-sm-end justify-content-center mt-sm-n7 m-5"><a class="link fw-normal fs-2" href="#!"> See all </a></div>
                          </div>
                          <div class="swiper-button-next d-none d-sm-block">
                            <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="42" height="27" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                          </div>
                          <div class="swiper-button-prev d-none d-sm-block">
                            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="42" height="27" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of .container-->
          
                </section>
           
                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                   
                </div>
            </div>
        </div>
        <script src="<?php echo e(asset('vendors/popper/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/anchorjs/anchor.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/is/is.min.js')); ?>"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo e(asset('vendors/fontawesome/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/fontawesome/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/lodash/lodash.min.js')); ?>"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eQfT0Y9qNQeGdZl5CK5I2ihK6J/RJPypXtkFEl7MOh5deV+bbef5dBo4y5yoSZNf" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-Lz9ATw5Lv+I3r1BXMoOyC63fo2y9KABhMZi1aAFfkX7fFpLGiM3D0JMuXZ+UnF7E" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6gD0NX6PTbhEJ6QF/WokGBR5dFZ1xM2" crossorigin="anonymous"></script>

    

    </body>
</html>
<?php /**PATH C:\Users\AMD\Evento\resources\views/welcome.blade.php ENDPATH**/ ?>