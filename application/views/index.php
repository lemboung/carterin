<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carterin - Car Rental Website</title>
    <?php include("head.php") ?>
</head>

<body class="">
    <!-- MAIN -->
    <div class="load-wrap">
        <div class="wheel-load">
            <img src="<?php echo base_url() ?>images/loader.gif" alt="" class="image">
        </div>
    </div>
    <?php include("header.php") ?>
    <div class="wheel-start">
        <img src="images/bg1.jpg" alt="" class="wheel-img">
        <div class="container padd-lr0">
            <div class="col-lg-6 col-lg-push-6 ">
                <header class="wheel-header marg-lg-b100 marg-lg-t100  marg-md-b0 marg-md-t0">
                    <h1>Carterin</h1>
                    <h2>Pasang iklan - Sewakan - Asuransi Gratis</h2>
                    <span>Kami membantu anda memanfaatkan Kendaraan tak terpakai Anda</span>
                </header>
            </div>
            <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                <div class="wheel-start-form">
                    <form action="#">
                        <label for="input-val11">
                            <span>Lokasi Jemput</span>
                            <input type="text" id='input-val11' placeholder="ZIP, City, Airport or Address" required>
                        </label>
                        
                        <div class="clearfix">
                            <div class="wheel-date">
                                <span>Tanggal</span>
                                <label for="input-val13" class="fa fa-calendar">
                                    <input  class="datetimepicker" id='input-val13' type="text" value="29 Apr">
                                    </label>
                            </div>
                            <div class="wheel-date">
                                <span>Lama</span>
                                <label for="input-val14" class="fa fa-clock-o">
                                    <input  id='input-val14' type="number" value="1">
                                    </label>
                            </div>
                        </div>
                        <div class="wheel-date" id="jenis-kendaraan">
                            <span>Jenis Kendaraan</span>
                            <select class="selectpicker">
                                    <option>Motor</option>
                                    <option>MPV</option>
                                    <option>Hatchback</option>
                                    <option>Sedan</option>
                                    <option>SUV</option>
                                    <option>Pickup</option>
                                    <option>Truck</option>
                                    <option>Tronton</option>
                                    <option>Pickup Boxed</option>
                                    <option>Dump Truck</option>
                                    <option>Van</option>
                                    <option>Bus</option>
                                </select>
                                <span>Sopir</span>
                            <input type="checkbox" class="Checkbox">
                                </input>
                        </div>
                        <label for="input-val17" class="promo">
                            <input type="text" id='input-val17' placeholder="Promo Code (Optional)">
                            </label>
                        <label for="input-val18" class="promo promo2">
                            <button class="wheel-btn" id="input-val18">Cari</button>
                            </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////// -->
    <div class="wheel-bg2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
                        
                        <h3>Layanan <span>Rental</span> Mobil</h3>
                        <h5>Online Terbesar</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-clients">
        <div class="container padd-lr0">
            <div class="row">
                <div class="col-md-4 padd-r0 padd-md-lr15">
                    <div class="wheel-service-item text-center wheel-bg3">
                        <div class="wheel-service-logo">
                            <img src="images/ico1.png" alt="">
                        </div>
                        <h5>Kemudahan Pengelolaan</h5>
                        <p>Mudah untuk mengelola kendaraan yang anda pasang dengan penjadwalan</p>
                    </div>
                </div>
                <div class="col-md-4 padd-lr0 padd-md-lr15">
                    <div class="wheel-service-item text-center wheel-service-active wheel-bg4">
                        <div class="wheel-service-logo">
                            <img src="images/ico2.png" alt="">
                        </div>
                        <h5>Asuransi & Keamanan</h5>
                        <p>Kami menyedediakan Asuransi dan perangkat keamanan tingkat Superior demi kenyamanan dan keamanan anda bertransaksi</p>
                    </div>
                </div>
                <div class="col-md-4 padd-l0 padd-md-lr15">
                    <div class="wheel-service-item  text-center wheel-bg5">
                        <div class="wheel-service-logo">
                            <img src="images/ico3.png" alt="">
                        </div>
                        <h5>Layanan Perawatan</h5>
                        <p>Kami menyediakan layanan perawatan untuk menjaga kendaraan anda agar tetap prima.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 ">
                <div class="wheel-service-img">
                    <img src="images/i1.png" alt="" class="wheel-img">
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////////////////////// -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wheel-header wheel-testi-header text-center marg-lg-t155 marg-lg-b65 marg-md-t50  marg-md-b50">
                    <h3>Kepuasan <span>Pelanggan</span> adalah misi kami</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="wheel-testimonial text-center">
                    <p>Kami startup yang bergerak dibidang transportasi guna menyelesaikan permasalahan transportasi
                        yang terjadi di Indonesia dan meningkatkan penghasilan anda.
                    </p>
                    <div class="wheel-testimonial-info">
                        <span>Tri Wahyu Herlambang</span>
                        <img src="images/l1.png" alt="">
                        <p> C.E.O. & Co-Founder</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 padd-lr0 ">
                <div class="wheel-testimonial-item">
                    <i class="fa fa-car"></i>
                    <span data-to="253" data-speed="1000"></span><b>+</b>
                    <p>Kendaraan terpasang</p>
                </div>
                <div class="wheel-testimonial-item">
                    <i class="fa fa-user"></i>
                    <span data-to="5053" data-speed="2000"></span><b>+</b>
                    <p>Pengguna</p>
                </div>
                <div class="wheel-testimonial-item">
                    <i class="fa  fa-car"></i>
                    <span data-to="40" data-speed="1000"></span><b>+</b>
                    <p>Kota</p>
                </div>
                <div class="wheel-testimonial-item">
                    <i class="fa fa-trophy"></i>
                    <span data-to="5" data-speed="1000"></span><b>+</b>
                    <p>penghargaan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////////////////////////////// -->
    <div class="wheel-collection wheel-bg2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b65  marg-md-t50 ">
                        <h5>Kami menyediakan</h5>
                        <h3>Berbagai macam <span>kendaraan</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="tabs">
                        <div class="tabs-header">
                            <ul>
                                <li class="active"><a href="#">Paling Populer</a></li>
                                <li><a href="#">Baru dipasang</a></li>
                                <li><a href="#">Diskon</a></li>
                            </ul>
                        </div>
                        <div class="tabs-content  marg-lg-b30">
                            <div class="tabs-item active ">
                                <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS'
                                                data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS'
                                                data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="swiper-arrow-left fa fa-angle-left"></div>
                                    <div class="swiper-arrow-right fa fa-angle-right"></div>
                                    <div class="pagination"></div>
                                </div>
                            </div>
                            <div class="tabs-item  ">
                                <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS'
                                                data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS'
                                                data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="swiper-arrow-left fa fa-angle-left"></div>
                                    <div class="swiper-arrow-right fa fa-angle-right"></div>
                                    <div class="pagination"></div>
                                </div>
                            </div>
                            <div class="tabs-item  ">
                                <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS'
                                                data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS'
                                                data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags'
                                                data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="swiper-arrow-left fa fa-angle-left"></div>
                                    <div class="swiper-arrow-right fa fa-angle-right"></div>
                                    <div class="pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 padd-lr0">
                    <div class="wheel-collection-info">
                        <div class="wheel-collection-text">
                            <h4 class="car-name">2016 Nissan Juke</h4>
                            <span class="car-class">Luxury Sports Car</span>
                            <h5><b>$79 <sup>00</sup></b>/Day</h5>
                            <p class="car-text">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit. </p>
                            <ul>
                                <li><i class="fa fa-suitcase"></i><span class="car-bags">2 Bags</span></li>
                                <li><i class="fa fa-user"></i><span class="car-passengers">2 Passengers</span></li>
                                <li><i class="fa fa-tachometer"></i><span class="car-speed">5.6/100 MPG</span></li>
                            </ul>
                            <a href="" class="wheel-btn">Lihat semua kendaraan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 padd-lr0">
                    <div class="wheel-collection-img"><img src="images/i6.png" alt="" class="car-img"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////// -->
    <div class="container padd-lr0">
        <div class="row">
            <div class="col-md-6 ">
                <div class="wheel-info-img  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100">
                    <img src="images/i7.png" alt="" class="wheel-img">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="wheel-info-text  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100 marg-sm-t50 marg-sm-b50">
                    <div class="wheel-header">
                        <h5>Tentang kami </h5>
                        <h3>Kami Adalah <span>Carterin</span></h3>
                    </div>
                    <span>Marketplace penyewaan kendaraan apapun milik anda dengan asuransi dan keamanan superior.</span>
                    <p>kami mempertemukan pemilik kendaraan dengan penyewa kendaraan yang membutuhkan kendaraan anda. Kami juga menyediakan
                        Asuransi, perangkat keamanan, layanan perawatan kendaraan. skema bisnis yang menguntungkan untuk anda dengan memanfaatkan kendaraan anda.
                    </p>
                    <a href="" class="wheel-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////// -->
    <div class="wheel-deals text-center">
        <img src="images/bg2.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header">
                        <h5>Bergabung bersama kami </h5>
                        <h3>raih penghasilan <span>jutaan</span> dengan kendaraan anda</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-deals-text">
                        <p>Dapatkan penghasilan jutaan dengan memanfaatkan kendaraan anda. Pasang, Sewakan, kendaraan anda
                            dengan perlindungan asuransi dan keamanan superior.
                            Pasang kendaraan anda sekarang juga
                        </p>
                        <a href="" class="wheel-btn">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////////////////////////// -->
    <div class="wheel-news  wheel-bg2 ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b90 marg-md-t50 ">
                        <h5>our Blog </h5>
                        <h3>the Latest <span>news </span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 padd-l0  padd-md-lr15">
                    <div class="wheel-news-item   wheel-bg1">
                        <i class="">29 April</i>
                        <div class="wheel-news-item-img">
                            <img src="images/i8.jpg" alt="">
                        </div>
                        <div class="wheel-news-text">
                            <h5><a href="news-details.html">Monotonectally build distinctive convergence and an attempt</a></h5>
                            <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                            <a href="">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wheel-news-item   wheel-bg1">
                        <i class="">29 April</i>
                        <div class="wheel-news-item-img">
                            <img src="images/i9.jpg" alt="">
                        </div>
                        <div class="wheel-news-text">
                            <h5><a href="news-details.html">Monotonectally build distinctive convergence and an attempt</a></h5>
                            <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                            <a href="">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 padd-r0 padd-md-lr15">
                    <div class="wheel-news-item   wheel-bg1">
                        <i class="">29 April</i>
                        <div class="wheel-news-item-img">
                            <img src="images/i10.jpg" alt="">
                        </div>
                        <div class="wheel-news-text">
                            <h5><a href="news-details.html">Monotonectally build distinctive convergence and an attempt</a></h5>
                            <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                            <a href="">Read More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////// -->
    
    <!-- //////////////////////////////////////////// -->
    <div class="wheel-quote text-center">
        <img src="images/bg3.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="wheel-quote-item">
                                    <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <h6>Catrina Romero</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wheel-quote-item">
                                    <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <h6>Catrina Romero</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wheel-quote-item">
                                    <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <h6>Catrina Romero</h6>
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                    <div class="swiper-outer-left fa fa-angle-left"></div>
                    <div class="swiper-outer-right fa fa-angle-right"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-quote-partners">
                        <a href=""><img src="images/p1.png" alt=""></a>
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <a href=""><img src="images/p3.png" alt=""></a>
                        <a href=""><img src="images/p4.png" alt=""></a>
                        <a href=""><img src="images/p5.png" alt=""></a>
                        <a href=""><img src="images/p6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////// -->
    <!-- FOOTER -->
    <!-- ///////////////// -->
    <?php include("footer.php");
    include("footer-all.php");
    include("modallogin.php");?>

    <!-- Scripts project -->
    <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- count -->
    <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
    <!-- swiper -->
    <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
    <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
    <!-- sixth block end -->
    <?php include("script.php") ?>
</body>
</html>