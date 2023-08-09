<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>USN Papua</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>home/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>home/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>home/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <!-- =======================================================
  * Template Name: Gp
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <a href="index.html" class="logo"><img src="<?= base_url() ?>assets/img/usn.png" alt="" class="img-fluid" width="200%"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Akademi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php foreach ($prodi as $key => $value) : ?>
                                <li><a href="<?= $value->link == null ? '#' : $value->link ?>"><?= $value->prodi ?></a></li>
                            <?php endforeach; ?>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Tracer Study</a></li>
                            <li><a href="#">Sistem Evaluasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Tentang USN</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sambutan Rektor</a></li>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url('contact') ?>">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <a href="#" class="get-started-btn scrollto">Pendaftaran Mahasiswa</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-10">
                    <h1>Universitas Sepuluh Nopember Papua</h1>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <?php foreach ($prodi as $key => $value) : ?>
                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line"></i>
                            <h3><a href="<?= $value->link == null ? '#' : $value->link ?>"><?= $value->prodi ?></a></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="team">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <p>Hot News</p>
                    <div class="garis"></div>
                    <!-- <h2>Services</h2> -->
                </div>
                <div class="row">
                    <?php foreach ($berita as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member d-flex align-items-start flex-column" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img p-2" style="padding: 0rem !important;">
                                    <img src="<?= base_url('assets/berkas/berita/') . $value->gambar ?>" class="img-fluid" alt="">
                                </div>
                                <div class="member-info p-2">
                                    <div class="d-flex justify-content-start ">
                                        <i class="fas fa-calendar" style="color: #ff5a5a; margin-right: 12px;"></i>
                                        <h6 style="color: #ff5a5a;"><?= $value->tanggal ?></h6>
                                    </div>
                                    <h4><?= $value->judul ?></h4>
                                    <!-- <span><?= $value->isi ?></span> -->
                                </div>
                                <div class="mt-auto p-2">
                                    <a href="<?= base_url('detail_berita/') . $value->id ?>" style="color: #ff5a5a;">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="d-flex justify-content-end ">
                    <a href="#" style="color: #000000; margin-left:12px;"> Berita Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="image col-lg-8" data-aos="fade-right">
                        <div class="section-title" style="padding-bottom: 21px;">
                            <p><i class="fas fa-bullhorn"></i> Pengumuman</p>
                            <div class="garis"></div>

                            <!-- <h2>Services</h2> -->
                        </div>
                        <?php foreach ($pengumuman as $key => $value) : ?>
                            <div class="icon-box mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                <h6 style="margin-left: 0 !important; color: #ff5a5a; "><i class="fa fa-calendar" aria-hidden="true" style="font-size: 18px; color: #ff5a5a; margin-right:12px"></i> <?= $value->tanggal ?></h6>
                                <a href="<?= base_url('detail_pengumuman/') . $value->id ?>">
                                    <h4 style="margin-left: 0px" class="text-dark"><?= $value->judul ?></h4>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="section-title">
                            <p><i class="fas fa-video"></i> Galery Video</p>
                            <div class="garis"></div>

                            <!-- <h2>Services</h2> -->
                        </div>
                        <?php foreach ($video as $key => $value) : ?>
                            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                <?= $value->link?>
                                <!-- <iframe width="100%" height="230" src="https://www.youtube.com/embed/bmOKJWue4C0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <p>Galery Photo</p>
                    <div class="garis"></div>
                    <!-- <h2>Services</h2> -->
                </div>

                <div class="row">
                    <?php foreach ($galeri as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <a href="<?= base_url('assets/berkas/galeri/') . $value->gambar ?>" data-lightbox="photos" data-title="<?= $value->judul ?>"><img src="<?= base_url('assets/berkas/galeri/') . $value->gambar ?>" class="img-fluid" alt=""></a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section><!-- End Services Section -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <p><i class="fas fa-users"></i> Pengajar</p>
                    <div class="garis"></div>
                    <!-- <h2>Services</h2> -->
                </div>

                <div class="row">
                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="col-lg-4 col-md-8 d-flex align-items-stretch swiper-slide" style="width: 190px;">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="<?= base_url() ?>home/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 d-flex align-items-stretch swiper-slide" style="width: 190px;">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="<?= base_url() ?>home/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 d-flex align-items-stretch swiper-slide" style="width: 190px;">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="<?= base_url() ?>home/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 d-flex align-items-stretch swiper-slide" style="width: 190px;">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="<?= base_url() ?>home/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination" style="padding: 100px 0 0 0;"></div>
                    </div>


                </div>

            </div>
        </section><!-- End Team Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>home/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>home/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>home/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>home/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>home/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients" style="padding: 50px 0 50px 0;">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php foreach ($kerjasama as $key => $value) : ?>
                            <div class="swiper-slide"><img src="<?= base_url() ?>assets/berkas/kerjasama/<?= $value->gambar ?>" class="img-fluid" alt=""></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Clients Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>home/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>home/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>home/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="<?= base_url() ?>home/assets/js/main.js"></script>
</body>

</html>