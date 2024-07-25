<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Portofolio | Irfan Adi Prastyo</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/meyawo.css') }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    @include('layouts.navbar')
    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI! I am </span>
                <span class="down">Irfan Adi Prastyo</span>
            </h1>
            <p class="header-subtitle">WEB DEVELOPMENT</p>

            {{-- <button class="btn btn-primary">Visit My Works</button> --}}
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="{{ asset('template/assets/imgs/man.png') }}" class="about-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <h2 class="section-title mb-3">About Me</h2>
                    <p class="text-justify">
                        Saya adalah lulusan STMIK PPKIA Pradnya Paramita Malang dengan fokus pada jaringan komputer dan
                        pengembangan web. Dengan pengalaman luas dalam mengelola proyek IT, baik secara mandiri maupun
                        dalam tim, saya berkomitmen untuk terus mengembangkan keterampilan saya. Saya siap berkontribusi
                        secara efektif dalam tim yang dinamis, dengan memanfaatkan pengetahuan dan semangat saya dalam
                        teknologi untuk mendorong solusi inovatif.
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="technologies">
        <div class="container text-center">
            <h6 class="section-title mb-6">Tech Stack & Tools</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/html.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Hypertext Markup Language</h6>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/css.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Cascading Style Sheets</h6>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cumque!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/laravel.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Laravel</h6>
                            <p class="subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, minima.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/vscode.png') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Visual Studio Code</h6>
                            <p class="subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, maxime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" style="margin-top:10px">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/github.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Github</h6>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, alias?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" style="margin-top:10px">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/git.png') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">GIT</h6>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, alias?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" style="margin-top:10px">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/xampp.png') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">XAMPP</h6>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, alias?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" style="margin-top:10px">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('template/assets/imgs/figma.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Figma</h6>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, alias?/p>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="projects">
        <div class="container text-center">
            <h6 class="section-title mb-6">Projects</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="{{ asset('template/assets/imgs/ppdb.jpg') }}" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Website PPDB</h5>
                                    <p class="font-weight-normal text-justify" style="margin: 10px">Website ini saya buat sebagai bagian dari tugas akhir saya, di mana dalam pembuatan website ini saya menggunakan framework Laravel. Selain itu, website ini dirancang untuk mempermudah proses pendaftaran siswa, pengelolaan data siswa, pemberian pengumuman, dan berbagai fungsi lainnya.</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/folio-2.jpg" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Website Siakad</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <a href="http://www.devcrud.com">DevCRUD</a> Distribution <a
                    href="https://themewagon.com">ThemeWagon</a>
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="{{ asset('template/assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('template/assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Meyawo js -->
    <script src="{{ asset('template/assets/js/meyawo.js') }}"></script>

</body>

</html>
