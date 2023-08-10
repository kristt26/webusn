<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>USN Papua</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
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

            <a href="https://docs.google.com/forms/d/e/1FAIpQLScPLFvQa4Sns2N1Rj2Ou5sFfAYJcPDq85YG_KnpUMlaRadfVA/viewform" target="_blank" class="get-started-btn scrollto">Pendaftaran Mahasiswa</a>

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
                    <p><i class="fas fa-newspaper"></i> Hot News</p>
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
                    <p><i class="fas fa-images"></i> Galery Photo</p>
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
                        <?php foreach ($pengajar as $key => $value) : ?>
                            <div class="col-lg-4 col-md-8 d-flex align-items-stretch swiper-slide" style="width: 190px;">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img center-cropped">
                                        <img src="<?= base_url('assets/berkas/pengajar/').$value->gambar ?>" class="img-fluid" alt="">
                                        
                                    </div>
                                    <div class="member-info">
                                        <h6><?= $value->nama?></h6>
                                        <span><?= $value->prodi?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
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
                                <img src="https://ti.stimiksepnop.ac.id/wp-content/uploads/2020/11/tio-2-150x150.jpg" class="testimonial-img" alt="">
                                <h3>Setyo Budi Rustanto</h3>
                                <h4>IT &amp; Support</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Perkembangnnya kedepan semoga akan sangat maju, dan semoga menjadi semakin baik, supaya menjadi kampus pilihan di kota Jayapura, Saya sangat bangga menjadi alumni STIMIK Sepuluh Nopember Jayapura.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="https://ti.stimiksepnop.ac.id/wp-content/uploads/2020/09/ddddd-150x150.jpg" class="testimonial-img" alt="">
                                <h3>Irfan Cahya Putra</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Saya masuk ke STIMIK Sepuluh Nopember Jayapura  dengan niat serta Komitmen yang tinggi, ternyata disambut baik oleh pihak kampus. Mulai dari Dosen hingga Pengurus kampus sangat membantu saya hingga bisa mendapatkan gelar S.Kom dimana dalam dunia kerja saat ini sangat dibutuhkan tenaga ahli yang memiliki latar belakang pendidikan IT. Saya bangga pernah menjadi bagian dari STIMIK SEPNOP Jayapura.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="https://ti.stimiksepnop.ac.id/wp-content/uploads/2021/12/IMG_5155_ed-150x150.jpg" class="testimonial-img" alt="">
                                <h3>Nurhaida</h3>
                                <h4>Teacher</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Kampus stimik ada tempat belajar yang indah dimana hal yang belum pernah saya belajari sebelumnya sy pelajari di kampus stimik, tempat yang begitu nyaman untuk belajar dan banyak teman” yang selalu membatu, ditempat ini sy menemukan hal” baru dan keluarga baru. Makasih stimik sepuluh nopember jayapura jaya selalu dan Terima kasih untuk semua ilmu yang sdh diberikan kepada kami
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="https://ti.stimiksepnop.ac.id/wp-content/uploads/2020/09/FB_IMG_1585843184954-150x150.jpg" class="testimonial-img" alt="">
                                <h3>Ken Dianto</h3>
                                <h4>Networking</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Program studi teknik informatika sangatlah luas dan banyak hal baru yang akan menjadi tantangan disetiap mata kuliahnya, meskipun kampus stimik belum sebesar kampus lainnya tapi ilmu yang didapat akan bersaing dengan kampus lainnya
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

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
            <div class="copyright" style="font-size: large;">
                Universitas Sepuluh Nopember Papua
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Jayapura
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <div id="preloader"></div> -->
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