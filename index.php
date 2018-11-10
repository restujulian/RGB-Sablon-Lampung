<?php
    include'config/config_db.php';
    $db = new database();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RGB Sablon | Sablon Kaos Lampung</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="images/icon/rgb-icon.png">


        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            .pagination {
                display: inline-block;
            }

            .pagination a {
                color: black;
                float: left;
                padding: 8px 15px;
                text-decoration: none;
                transition: background-color .3s;
                border: 1px solid #ddd;
                border-radius: 5px;
                margin: 0 4px;
            }

            .pagination a.active {
                background-color: #00a0b3;
                color: white;
                border: 1px solid #00a0b3;
            }

            .pagination a:hover:not(.active) {background-color: #00a0b3;}
            </style>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <?php
            foreach ($db->showContacAdmin() as $adm) {
                /*Dhow Data Admin*/
            }
        ?>
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">
                                                <img src="assets/images/rgblogo.png"/ style="height: 40px;">
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#home">HOME</a></li>
                                                <li><a href="#history">TENTANG KAMI</a></li>
                                                <li><a href="#portfolio">GALERI</a></li>
                                                <li><a href="#pricing">PAKET (PROMO)</a></li>
                                                <li><a href="#team">CARA PEMESANAN</a></li>
                                                <li><a href="#contact">CONTACT</a></li>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->

            <!--home Section -->
            <section id="home" class="home">
                <div class="overlay">
                    <div class="home_skew_border">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="main_home_slider text-center">
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="5000ms">
                                                <h3>Apa yang akan anda dapatkan disini?</h3>
                                                <h1>SABLON Kaos Murah</h1>
                                                <div class="separator"></div>
                                                <div class="home_btn">
                                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" class="btn btn-default" target="_blank">PESAN SEKARANG</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="5000ms">
                                                <h1>Konveksi</h1>
                                                <h3>Menerima pembuatan Kaos, Jersey, Hodie, Zipper, dll...</h3>
                                                <div class="separator"></div>
                                                <div class="home_btn">
                                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" class="btn btn-default" target="_blank">PESAN SEKARANG</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="5000ms">
                                                <h1>KIRIM LUAR KOTA</h1>
                                                <h3>Pesanan anda dapat kami kirim ke seluruh kota di Indonesia</h3>
                                                <div class="separator"></div>
                                                <div class="home_btn">
                                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" class="btn btn-default" target="_blank">PESAN SEKARANG</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scrooldown">
                            <a href="#feature"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </section><!--End of home section -->


            <!--feature section -->
            <section id="feature" class="feature sections">
                <div class="container">
                    <div class="row">
                        <div class="main_feature text-center">

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <img src="assets/images/kaos.png">
                                    </div>

                                    <h4>Kaos</h4>
                                    <div class="separator3"></div>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%20kaos%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" target="_blank" class="btn btn-lg">PESAN SEKARANG</a>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <img src="assets/images/hodie.png">
                                    </div>

                                    <h4>Hodie</h4>
                                    <div class="separator3"></div>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%20Hodie%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" target="_blank" class="btn btn-lg">PESAN SEKARANG</a>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <img src="assets/images/zipper.png">
                                    </div>
                                    <h4>Zipper</h4>
                                    <div class="separator3"></div>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%20Zipper%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" target="_blank" class="btn btn-lg">PESAN SEKARANG</a>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <img src="assets/images/jersey.png">
                                    </div>

                                    <h4>Jersey</h4>
                                    <div class="separator3"></div>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%20Jersey%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" target="_blank" class="btn btn-lg">PESAN SEKARANG</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--End of container -->
            </section><!--End of feature Section -->
            <hr />


            <!-- History section -->
            <section id="history" class="history sections">
                <div class="container">
                    <div class="row">
                        <div class="main_history">
                            <div class="col-sm-6">
                                <div class="single_history_img">
                                    <a href="images/icon/rgb-icon.png" target="_blank"><img src="assets/images/about.png" alt="" /></a>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_history_content">
                                    <div class="head_title">
                                        <h2>RGB Sablon</h2>
                                    </div>
                                    <p><h4><b>Tentang Kami</b></h4>Kami adalah perusahaan yang bergerak di bidang konveksi.<br/>Alamat : Jl. Sultan Haji, Gg Mawar No. 58 Kedaton, Bandar Lampung</p>
                                    <p><h4><b>Material</b></h4><b>Bahan </b>: Cotton combed 30s reaktif, 24s 34s.<br/><b>Tinta </b>: MATSUI (original : made in Japan.<br/><b>Type of Screen Printing </b>: Rubber, Plastisol, Raste, Superwhite, Gold/Silver, Glow in the Dark</p>

                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" class="btn btn-lg">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                    </div><!--End of row -->
                </div><!--End of container -->
            </section><!--End of history -->

            <!-- service Section -->
            <section id="service" class="service">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6 col-sm-12 no-padding">

                                <div class="single_service single_service_text text-right">
                                    <div class="head_title">
                                        <h2>PELAYANAN</h2>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-20">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h3>JASA SABLON</h3>
                                                        <p style="font-size: 16px;">Menerima sablon kaos (lengan pendek/panjang), jersey, hodie, zipper, dll...<br/>Pemesanan bisa satuan, couple atau partai (lebih dari 10 pcs).<br/>Desain sesuka anda atau dari kami.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->
                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-20">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h3>KONVEKSI</h3>
                                                        <p style="font-size: 16px;">Menerima pembuatan kaos (lengan pendek/panjang), jersey, hodie, zipper, dll...<br/>Pemesanan bisa satuan, couple atau partai (lebih dari 10 pcs).</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->
                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-20">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h3>PENAWARAN</h3>
                                                        <p style="font-size: 16px;">Dapatkan penawan minimum dari kami untuk anda.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->
                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-20">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h3>PENGIRIMAN</h3>
                                                        <p style="font-size: 16px;">Kami bisa mengirim pesanan anda ke seluruh kota di Indonesia.<br/>Biaya kirim ditanggung owner.</p>
                                                        <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" target="_blank" class="btn btn-lg">PESAN SEKARANG</a>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->
                                    </div>
                                </div>
                            </div><!-- End of col-sm-6 -->

                            <div class="col-md-6 col-sm-12 no-padding">
                                <figure class="single_service single_service_img">
                                    <div class="overlay-img"></div>
                                    <img src="assets/images/bgabout.png" alt="" />
                                </figure><!-- End of figure -->
                            </div><!-- End of col-sm-6 -->

                        </div>
                    </div><!-- End of row -->
                </div><!-- End of Container-fluid -->
            </section><!-- End of service Section -->


            <section id="portfolio" class="portfolio sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_portfolio">
                            <div class="col-sm-12">
                                <div class="head_title text-center">
                                    <h2>Galeri RGB-Sablon</h2>
                                    <div class="separator"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                        <?Php
                            require "config/config.php";
                            $page_name="index.php";

                            @$limit= 4; // Read the limit value from query string. 
                            if(strlen($limit) > 0 and !is_numeric($limit)){
                                echo "Data Error";
                                exit;
                            }

                            switch($limit)
                            {
                                case 2:
                                    $select2="selected";
                                    $select10="";
                                    $select5="";
                                    break;

                                case 5:
                                    $select5="selected";
                                    $select10="";
                                    $select2="";
                                    break;

                                default:
                                    $select10="selected";
                                    $select5="";
                                    $select2="";
                                    break;

                            }

                            @$start=$_GET['start'];
                            if(strlen($start) > 0 and !is_numeric($start)){
                                echo "Data Error";
                                exit;
                            }


                            $eu = ($start - 0); 

                            if(!$limit > 0 ){ // if limit value is not available then let us use a default value
                                $limit = 10;    // No of records to be shown per page by default.
                            }                             
                            $this1 = $eu + $limit; 
                            $back = $eu - $limit; 
                            $next = $eu + $limit; 

                            $nume = $dbo->query("select count(*) from galeri")->fetchColumn();
                            $bgcolor="#f1f1f1";
                            $query=" SELECT * FROM galeri  limit $eu, $limit ";
                            foreach ($dbo->query($query) as $row) {
                        ?>
                                <div class="col-md-3">
                                        <div class="single_portfolio scale-anm">
                                            <img src="images/galeri/<?php echo $row['image'];?>" alt="" />
                                            <a href="images/galeri/<?php echo $row['image'];?>" class="portfolio-img">
                                                <div class="grid_item_overlay">
                                                    <div class="separator4"></div>
                                                    <h3><?php echo $row['caption'];?></h3>
                                                    <p>img / <?php echo $row['kategori'];?></p>
                                                </div>
                                            </a>
                                        </div>
                                </div>

                        <?php
                            }
                        ?>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4"></div>
                                <div class="col-md-4" align="center">
                                    <div class="pagination">
                        <?php
                            //// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
                            if($back >=0) { 
                                print "<a href='$page_name?start=$back&limit=$limit#portfolio'>&laquo;</a>"; 
                            } 

                            $i=0;
                            $l=1;
                            for($i=0;$i < $nume;$i=$i+$limit){
                                if($i <> $eu){
                                    echo " <a href='$page_name?start=$i&limit=$limit#portfolio'>$l</a> ";
                                }
                                else { echo "<a class='active'>$l</a>";}        /// Current page is not displayed as link and given font color red
                                $l=$l+1;
                            }

                            ///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
                            if($this1 < $nume) { 
                                print "<a href='$page_name?start=$next&limit=$limit#portfolio'#portfolio>&raquo;</a>";
                            } 
                        ?>
                                    </div> 
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div style="clear:both;"></div>  
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section> <!-- End off Work Section -->   

            <!-- Pricing Section -->
            <section id="pricing" class="pricing">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing_area sections">
                            <div class="head_title text-center">
                                <h2>PAKET (Promo)</h2>
                                <div class="subtitle">
                                    Tersedia paket dengan minimal order dan dapatkan penawaran terbaik untuk anda.
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->
                            <?php
                                foreach ($db->showPaket() as $pkt) {
                            ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="single_pricing pricing_business">
                                        <div class="pricing_head ">
                                            <h3><?php echo $pkt['nama_paket'];?></h3>
                                            <div class="pricing_price">
                                                <div class="m_t text-center"><b>Minimal Order</b></div>
                                                <div class="p_r text-center"><?php echo $pkt['minimal'];?></div>
                                                <div class="m_t text-center"><b>PIECES</b></div>
                                            </div>
                                        </div>

                                        <div class="pricing_body">
                                            <ul>
                                                <li><strong>Kaos + Sablon </strong> <?php echo "Rp. ".number_format($pkt['kaos'], "2", ",", ".").",-"; ?></li>
                                                <li><strong>Jersey</strong> <?php echo "Rp. ".number_format($pkt['jersey'], "2", ",", ".").",-"; ?></li>
                                                <li><strong>Hodie + Sablon </strong> <?php echo "Rp. ".number_format($pkt['hodie'], "2", ",", ".").",-"; ?></li>
                                                <li><strong>Zipper + Sablon </strong> <?php echo "Rp. ".number_format($pkt['zipper'], "2", ",", ".").",-"; ?></li>
                                            </ul>
                                                <strong style="color: red;"> * </strong> Ketentuan berlaku.<br/>
                                            
                                            <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%20PAKET%20<?php echo $pkt['nama_paket'];?>%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?" class="btn btn-md">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div> <!-- End off col-md-4 -->
                            <?php
                                }
                            ?>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Pricing Section -->
            <!-- Team Section -->
            <section id="team" class="team">
                <div class="main_team_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="head_title textwhite text-center margin-top-80">
                                    <h2>CARA PEMESANAN</h2>
                                    <div class="subtitle">
                                        Owner diharapkan memesan sesuai prosedur dari kami.
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->

                                <div class="main_team">
                                    <ul>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/cht.png" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Hubungi Kami di Whatsapp</h4>
                                                <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?"><button class="btn" style="color: black;"><i class="fa fa-whatsapp"></i> Whatsapp</button></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/disc.png" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Konsultasikan Pesanan Anda</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/deal.png" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Deal Pemesanan dan Pembayaran Uang Muka</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/proses.png" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Tunggu Proses Percetakan</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/kirim.png" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Pelunasan dan Terima Pesanan Anda</h4>
                                                <p>COD Bandar Lampung dan Sekitarnya atau Menggunakan Jasa Kirim</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End of main team contant --> 
                        </div>
                    </div><!-- End of container -->
                </div>
            </section><!-- End off Team Section -->

            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                                <div class="head_title text-center">
                                    <h2>RGB Sablon</h2>
                                    <div class="subtitle">
                                        Jl. Sultan Haji, Gg Mawar No. 58 Kedaton, Bandar Lampung.  
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="main_contact_info">
                                            <div class="row">
                                                <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>Alamat</h3>
                                                                <h4>Jl. Sultan Haji, Gg Mawar No. 58 Kedaton, Bandar Lampung.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>SMS / WA</h3>
                                                                <a href="https://api.whatsapp.com/send?phone=<?php echo $adm['no_telp'];?>&text=Hay%20kak...%0ASaya%20mau%20order%0ABisa%20jelaskan%20mengenai%20produk%20dan%20harganya?"><h4><?php echo $adm['no_telp']?></h4></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>EMAIL</h3>
                                                                <a href="mailto:<?php echo $adm['email']?>"><h4><?php echo $adm['email']?></h4></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="single_contant_left" style="padding-top: 0px; padding-bottom: 0px;" align="center">
                                            <img src="assets/images/dd.png">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End of contact section -->

            <!--Footer section-->
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href="https://www.facebook.com/sablonkaosbandarlampung/" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/rgb_sablon" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="mailto:<?php echo $adm['email']?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="https://www.instagram.com/rgb_sablon/" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <a href="" target="_blank"><i class="fa fa-youtube"></i></a>
                                            <a href="">rgb.sablon.com</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Template by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off footer Section-->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

        <!--slick slide js -->
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>


        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
