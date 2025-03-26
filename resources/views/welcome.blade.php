<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ReviewFilm</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Film Review</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#feature">Feature</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Sample</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: {{ asset('assets/img/head1.png') }}; background-size: cover; background-position: center;">
            <div class="container">
                <div class="masthead-subheading">Welcome to ReviewFilm Web App!</div>
                <div class="masthead-heading text-uppercase">Find Your Favorite Movie Now</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#feature">Tell Me More</a>
            </div>
        </header>
        <!-- Feature-->
        <section class="page-section" id="feature">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Feature</h2>
                    <h3 class="section-subheading text-muted">We provides app for review / criticize the film</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fab fa-imdb fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">IMDB</h4>
                        <p class="text-muted">We connected with IMDB API for better reviews</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Application</h4>
                        <p class="text-muted">Its not prototype, IT'S REAL</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">We provide some common web security as validation, anti xxs, middleware, authentication, etc</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Review Sample</h2>
                    <h3 class="section-subheading text-muted">These are the quick review from our reviewers</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/film/1.jpg') }}" alt="..." style="width: 400px; height: 600px; object-fit: cover;" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Crazy Rich Asians</div>
                                <div class="portfolio-caption-subheading text-muted">2018</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid mx-auto d-block " src="{{ asset('assets/img/film/2.jpg') }}" alt="..." style="width: 400px; height:600px; object-fit:cover; object-position: top;"/>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lion King</div>
                                <div class="portfolio-caption-subheading text-muted">1994</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/film/3.jpg') }}" alt="..."  style="width: 400px; height: 600px; object-fit: cover;" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Frieren: Beyond Journey's End</div>
                                <div class="portfolio-caption-subheading text-muted">2023</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">These are our gud gud team</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/0.jpg') }}" alt="..." />
                            <h4>tbd</h4>
                            <p class="text-muted">nda tau</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/0.jpg') }}" alt="..." />
                            <h4>Vincentius Franklin</h4>
                            <p class="text-muted">Software Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/vincentf_17/" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/ngezLin!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-github"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/vincentius-franklin/" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/0.jpg') }}" alt="..." />
                            <h4>Laurensius Vicky Christian</h4>
                            <p class="text-muted">Film reviewer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/laurensius_vicky/" aria-label="Larry Parker Twitter Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-discord"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/laurensius-vicky-cristanto/" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Our incredible teamwork has resulted in incredible accomplishments, and I am proud to be a part of this team.</p></div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Tell us what's wrong with this web</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            coming soon
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Film Review 2025</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Crazy Rich Asians</h2>
                                    <p class="item-intro text-muted">Cultural differences between America and Asia, especially in the context of romantic and family relationships.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/film/1.jpg') }}" alt="..." style="width: 400px; height: 400px; object-fit: cover;"/>
                                    <p>Tiap orang memiliki nilai budaya yang mereka pegang masing masing terkadang nilai budaya inilah yang membentuk suatu pola
                                        pikir manusia. Perbedaan nilai budaya yang dianut antara dua orang dapat menyebabkan suatu konflik yang tidak bisa tolerir
                                        satu sama lain. Pada kesempatan kali ini kita akan membahas mengenai perbedaan representasi budaya Amerika dan Asia dalam
                                        Film Crazy Rich Asian karya Jonathan Murray Chu pada tahun 2018.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Reviewer:</strong>
                                            Vicky
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Romance
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Lion King (1994)</h2>
                                    <p class="item-intro text-muted">Animated musical drama film produced by Walt Disney Feature Animation.</p>
                                    <img class="img-fluid d-block mx-auto" src={{ asset('assets/img/film/2.jpg') }} alt="..." style="width: 400px; height: 400px; object-fit:cover;"/>
                                    <p>Film ini menceritakan kisah Simba, seekor anak singa yang ditakdirkan untuk menjadi raja Pride Lands. Namun, pamannya,
                                        Scar, yang serakah akan kekuasaan, berkomplot untuk merebut takhta, yang menyebabkan kematian ayah Simba, Mufasa. Simba
                                        yang merasa bersalah karena telah menyebabkan kematian ayahnya, melarikan diri dan tumbuh dewasa di pengasingan, sampai
                                        akhirnya kembali untuk merebut kembali haknya sebagai raja.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Reviewer:</strong>
                                            Vicky
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Drama
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Frieren: Beyond Journey's End</h2>
                                    <p class="item-intro text-muted">Elf mage Frieren and her fellow adventurers have defeated the Demon King and brought peace to the land. But Frieren will long outlive the rest of her former party. How will she come to understand what life means to the people around her?</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/film/3.jpg') }}" alt="..." style="width: 400px; height: 400px; object-fit:cover; object-position: top;"/>
                                    <p>The demon king has been defeated, and the victorious hero party returns home before disbanding.
                                        The four - mage Frieren, hero Himmel, priest Heiter, and warrior Eisen - reminisce about their
                                        decade-long journey as the moment to bid each other farewell arrives. But the passing of time is
                                        different for elves, thus Frieren witnesses her companions slowly pass away one by one. Before his
                                        death, Heiter manages to foist a young human apprentice called Fern onto Frieren. Driven by the elf's
                                        passion for collecting a myriad of magic spells, the pair embarks on a seemingly aimless journey,
                                        revisiting the places that the heroes of yore had visited. Along their travels, Frieren slowly confronts
                                        her regrets of missed opportunities to form deeper bonds with her now-deceased comrades.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Reviewer:</strong>
                                            Vincent
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Anime
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/landing.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
