<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Doctor Barbershop</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()."assets/vendor/simple-line-icons/simple-line-icons.min.css"; ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet" type="text/css"/>
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo base_url()."assets/css/animate.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/swiper/css/swiper.min.css"; ?>" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="<?php echo base_url()."assets/css/layout.min.css"; ?>" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url()."favicon.png";?>"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#">
                                <img class="logo-img logo-img-main" src="<?php echo base_url(); ?>/assets/img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="<?php echo base_url(); ?>/assets/img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="">Home</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#LProduct">Products</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#tenaga">About</a></li>  
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#testimoni">Testimonial</a></li><li class="nav-item"><a class="nav-item-child nav-item-hover" href="#style">Style</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Now Reborn!</h1>
                                <p>Kini Hadir untuk mempergaya tampilan anda, Harga ringan Rasa Elegan <br/> Nyaman, Aman, dan Jaminan adalah prioritas kami dalam pelayanan</p>
                            </div>
                            <a href="#why" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">WHY US?</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">Specialist In Style</h2>
                                <p>Spesialisasi Potongan kami adalah yang terbaik untuk anda <br/> Gaya apapun dengan kemauan anda, prestige dan elegan</p>
                            </div>
                            <a href="#why" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">WHY US?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true" id="why">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                <h2 style="text-align: center;">Kenapa Harus Doctor Barbershop?</h2>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Harga Terjangkau</h3>
                                    <p class="margin-b-5">Dengan pelayanan bintang 5, kami menawarkan harga yang sangat menarik, anda tidak perlu merogoh kocek lebih besar untuk mempergaya tampilan anda!</p>
                                </div>
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Potongan Stylish</h3>
                                    <p class="margin-b-5">Layanan kami sangat fleksibel untuk memenuhi keinginan anda dalam bergaya, kami siap untuk custom segala potongan rambut, cukup membawa contohnya saja.</p>
                                </div>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Pewarnaan Menarik</h3>
                                    <p class="margin-b-5">Untuk para kostumer jangan khawatir untuk pelayanan extra yaitu pewarnaan rambut, kami menyediakan beberapa varian warna dengan metode pewarnaan alami.</p>
                                </div>
                                  
                            </div>
                        </div>
                    </div>

                    <!-- MODAL TRIGGER -->
                        
                </div>
                <br>
                <div style="text-align:center;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Subscribe NOW!
                            </button>
                         </div>   
                <!--// end row -->
                <!--
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Useful Documentation</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Fast Delivery</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Free Plugins</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- MODAL POP UPS -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="<?php echo base_url();?>index.php/Smtp" method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                    <div class="phone_email">
                        <label>Nama Lengkap : </label>
                        <div class="form-text">
                            
                            <input type="text" name="nama" placeholder="Name" required="">
                        </div> 
                    </div>
                    <div class="phone_email phone_email1">
                        <label>Email : </label>
                        <div class="form-text">
                            
                            <input type="email" name="email" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="agileits_reservation_grid">
                        <div class="clearfix"></div>
                    </div> 
                    
                    <div>
                    <label>*Anda Setuju untuk mendapatkan Email dari Doctor Barbershop</label></div>
                    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">SUBSCRIBE!*</button>
                
              </div>
              </form>
            </div>
          </div>
        </div> 
        <!-- MODAL ENDS -->

        <!-- Latest Products -->
        <div class="content-lg container" id="LProduct">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Latest Products</h2>
                    <p>Jangan Khawatir bagi anda yang menginginkan cara anda sendiri untuk bergaya, kami menjual beberapa produk unggulan, produk ini sangat bagi anda yang ingin tampil stylish!</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <?php foreach($bringData as $x) { ?>
                <div class="col-sm-4 sm-margin-b-10">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive"  src="<?php echo base_url('upload/'.$x['upload']); ?>" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#"><?php echo $x['namaProduk']; ?></a> <span ><p><?php echo 'Rp '.number_format($x['hargaProduk'],0,',','.'); ?></p><p><?php echo $x['deskripsi']; ?></p></span></h4>
                    
                </div>
                <?php } ?>
                <!-- End Latest Products -->
                <!--  -->    
                

            </div>
            <!--// end row -->
        </div>
        <!-- End Latest Products -->

        <!-- Clients -->
        <!-- End Clients -->

        <!-- Testimonials -->
        <div class="content-lg container" id="testimoni">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Customer Reviews</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Menurut saya untuk kenyamanan sudah sangat nyaman, ditambah dengan pilihan style yang banyak, fasilitas sudah sangat nyaman dan mendukung kinerja serta profesionalitas dari Doctor Barbershop.
                                    </div>
                                    <div class="margin-b-20">
                                        Style sangat tepat bagi rambut saya, saya sangat menyukai potongan yang sesuai persis dengan kemauan saya. KEEP IT UP DOCTORBARBERSHOP!! GOOD LUCK!
                                    </div>
                                    <p><span class="fweight-700 color-link">Dito Adiansyah</span>, Pelanggan Doctor Barbershop</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Saya merasa sangat menyukai potongan rambut dan gaya yang sesuai dengan permintaan kita, saya juga menyoroti ruangan yang nyaman dan bersih sehingga membuat pelanggan ingin berlama lama untuk tetap berada disana.
                                    </div>
                                    <div class="margin-b-20">
                                        Sudah beberapa kali saya menggunakan jasa dari Doctor Barbershop, mereka sangat profesional dan komitmen terhadap pelanggan, jika tidak sesuai mereka dengan senang hati merespon pelanggan, harganya sangat pas untuk mahasiswa. THIS IS THE BEST BARBERSHOP!
                                    </div>
                                    <p><span class="fweight-700 color-link">Fariz Samanha</span>, Mahasiswa ITS</p>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->

        <!-- Pricing -->
      
        <!-- End Pricing -->

        <!-- Promo Section -->
        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Kami Melayani</h2>
                                <p>Kepuasan pelanggan adalah prioritas kami, jika anda belum merasa potongan rambut kami belum memuaskan, silahkan datang kembali dan dapatkan potongan gratis sesuai permintaan anda sebelumnya</p>
                                <p>Berbagai potongan rambut dapat anda dapatkan disini, silahkan bawa aneka tipe gaya rambut, kami sangat fleksibel untuk menyesuaikan sesuai keinginan anda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/970x970/02.jpg" alt="Content Image">
            </div>
        </div>
        <!-- End Promo Section -->

        <!-- Work -->
        <div class="bg-color-sky-light overflow-h" id="style">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Style Kini dan Nanti</h2>
                        <p>Kini dan nanti adalah sebuah perjalanan waktu, silahkan datang kapanpun kami siap melayani aneka potongan rambut sesuai dengan permintaan anda.</p> <p>FEEL FREE TO CHOOSE!</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                
                <div class="row">
                
                <div class="masonry-grid">
                <?php foreach($bringGaya as $x) { ?>
                    <div class="masonry-grid-sizer col-xs-6 col-sm-4 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-4 col-md-3">
                        <!-- Work -->
                        
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="<?php echo base_url('uploadGaya/'.$x['foto']); ?>" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?php echo $x['deskripsi'];?></h3>
                                <p class="color-white margin-b-0"><?php echo $x['price'];?></p>
                            </div>
                            <a class="content-wrapper-link"></a>
                        </div>
                        
                        <!-- End Work -->
                    </div>
                <?php }?>
                </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->
        <div class="section-seperator" id="tenaga">
            <div class="content-lg container">
                <h2>Semakin Dekat Dengan Kami</h2> <br>
                <div class="row">
                    <!-- Contact List -->
                    
                    <div class="col-sm-6 sm-margin-b-50">

                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="#">Surabaya - Keputih</a> <span class="text-uppercase margin-l-20">Buka 08.00 - 21.00</span></h3>
                            <p>Silahkan datang langsung dan rasakan layanan serta gaya trendynya! Kami juga menjual berbagai kit untuk perawatan rambut</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> 0895342992101</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> doctorbarbershop@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="#">Surabaya - Kenjeran</a> <span class="text-uppercase margin-l-20">Coming Soon</span></h3>
                            <p>Silahkan datang langsung dan rasakan layanan serta gaya trendynya! Kami juga menjual berbagai kit untuk perawatan rambut, BRAND NEW! Dapatkan spesial promo disini!</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> 0895342992101</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> doctorbarbershop@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Contact List -->

                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- MAPS -->
        <div class="map height-600">

            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.571741355196!2d112.77517353688133!3d-7.289467994738727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa466cf71b73%3A0xd02ec771e3e8829f!2sPangkas+Rambut+Doctor!5e0!3m2!1sen!2sid!4v1495372442135" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#LProduct">Products</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#testimoni">Testimonial</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#style">Style</a></li>            
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Contact</a></li>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                
                                <li class="footer-list-item"><a class="footer-list-link" href="http://instagram.com/doctorbarbershop">Instagram</a></li>


                                
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Kirim Kritik dan Saranmu!</h2>
                            <form method="POST" action="<?php echo base_url();?>index.php/Email/addEmail" enctype="multipart/form-data">
                            <input name="nama" style="color:white" type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input name="email" style="color:white" type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input name="hape" style="color:white" type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea name="pesan" style="color:white" class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" href="#">Submit</button>
                            <form>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
           <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="<?php echo base_url()."index.php/login"?>"><img class="footer-logo" src="<?php echo base_url(); ?>/assets/img/logo.png" alt="Doctor Barbershop"> </a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700"><p>Doctor Barbershop</p> </a> <p style="color:white;">© 2017 All Rights Reserved</p><a class="color-base fweight-700"> Powered By Asentus Theme</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/js/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/asssets/js/components/wow.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/components/masonry.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/components/gmap.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

    </body>
    <!-- END BODY -->
</html>