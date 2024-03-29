<!doctype html>
<html lang="tr">
<?php include "indexHead.html";
include "database/baglan.php";
session_start();?>

<body>

    <div class="wrapper" id="wrapper">
        <?php include "indexHeader.php";?> <br> <br> <br> <br>
        


        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
            
            <?php
            $slider = $db->prepare("SELECT * from slider"); //kullanici tablousundaki tüm sütunları seçtik
            $slider->execute();
            while ($sliderCek = $slider->fetch(PDO::FETCH_ASSOC)) {?>
            <!-- Start Single Slide -->
            <div class="slide animation__style3 bg-slider--<?php echo $sliderCek['id'] ?> align__center--left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="slider__content">
                                <div class="contentbox">
                                    <div class="transbox">
                                        <br><br>
                                        <h2 class="color-slider"> 
                                            <?php echo $sliderCek['icerik'] ?><br>
                                        </h2> <br><br><br><br>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
                <!-- End Single Slide -->
                <?php }

?> </div>
            
        
        <!-- End Slider area -->


        <section class="wn__recent__post bg--gray ptb--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2"><span class="color--theme">Arama</span></h2>
                            <p>İstediğiniz kitap aramasını buradan yapabilirsiniz</p>
                        </div>
                    </div>
                </div>
                <div class="row mt--50">
                    <div class="col-md-6 col-md-offset-3" style="float: left;">
                        <div class="input-group">
                            <div class="input-group-btn search-panel" data-search="students">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span class="search_by">Filter by</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a data-search="students">İnsage İçinde</a></li>
                                    <li><a data-search="students">Yazarlarda Ara</a></li>
                                    <li><a data-search="teachers">Başlıklarda Ara</a></li>
                                    <li><a data-search="rooms">Konularda Ara</a></li>
                                    <li class="divider"></li>
                                    <li><a data-search="all">Yayınevlerinde Ara</a></li>
                                </ul>
                            </div>
                            <input type="text" class="form-control" name="x" placeholder="Kitap Arama">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span
                                        class="bi bi-search"></span></button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" style="float: right;">
                        <div class="input-group">
                            <div class="input-group-btn search-panel" data-search="students">
                                <button type="button" class="btn btn-default" data-toggle="">
                                    <span class="search_by">Filter by</span> <span class="caret"></span>
                                </button>
                                <a data-search="students">Literatür Tarama</a>


                            </div>
                            <input type="text" class="form-control" name="x" placeholder="Literatür Tarama">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span
                                        class="bi bi-search"></span></button>
                            </span>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-6 col-md-offset-3" style="float:left ;">
                        <div class="input-group">
                            <iframe width="560" height="315" src="tanitimvideosulinki" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div class="input-group">
                            <p>nasıl kullanılacağına dair tanıtım yazısı</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" style="float: right;">
                        <div class="input-group">
                            <iframe width="560" height="315" src="tanitimvideosulinki" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div class="input-group">
                            <p>nasıl kullanılacağına dair tanıtım yazısı</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start BEst Seller Area -->
        <section class="wn__product__area brown--color pt--80  pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">Yeni <span class="color--theme">Ürünler</span></h2>

                        </div>
                    </div>
                </div>
                <!-- Start Single Tab Content -->
                <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
                    <!-- Start Single Product -->
                    <div class="product product__style--3">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product__thumb">
                                <a class="first__img" href="kitapicerik.php"><img src="images/books/1.jpg"
                                        alt="product image"></a>
                                <a class="second__img animation1" href="kitapicerik.php"><img src="images/books/2.jpg"
                                        alt="product image"></a>
                                <div class="hot__box">
                                    <span class="hot-label">EN ÇOK SATANLAR</span>
                                </div>
                            </div>
                            <div class="product__content content--center">
                                <h4><a href="kitapicerik.php">robin parrish</a></h4>
                                <ul class="prize d-flex">
                                    <li>$35.00</li>
                                    <li class="old_prize">$35.00</li>
                                </ul>
                                <div class="action">
                                    <div class="actions_inner">
                                        <ul class="add_to_links">
                                            <li><a class="cart" href="cart.php"><i class="bi bi-shopping-bag4"></i></a>
                                            </li>

                                            <li><a class="compare" href="#"><i class="bi bi-love"></i></a></li>
                                            <li><a data-toggle="modal" title="Quick View"
                                                    class="quickview modal-view detail-link" href="#productmodal"><i
                                                        class="bi bi-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__hover--content">
                                    <ul class="rating d-flex">
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Product -->
                    <!-- Start Single Product -->
                    <div class="product product__style--3">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product__thumb">
                                <a class="first__img" href="kitapicerik.php"><img src="images/books/3.jpg"
                                        alt="product image"></a>
                                <a class="second__img animation1" href="kitapicerik.php"><img src="images/books/4.jpg"
                                        alt="product image"></a>
                                <div class="hot__box color--2">
                                    <span class="hot-label">HOT</span>
                                </div>
                            </div>
                            <div class="product__content content--center">
                                <h4><a href="kitapicerik.php">The Remainng</a></h4>
                                <ul class="prize d-flex">
                                    <li>$35.00</li>
                                    <li class="old_prize">$35.00</li>
                                </ul>
                                <div class="action">
                                    <div class="actions_inner">
                                        <ul class="add_to_links">
                                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
                                            </li>
                                            <li><a class="compare" href="#"><i class="bi bi-love"></i></a></li>
                                            <li><a data-toggle="modal" title="Quick View"
                                                    class="quickview modal-view detail-link" href="#productmodal"><i
                                                        class="bi bi-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__hover--content">
                                    <ul class="rating d-flex">
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Single Tab Content -->
            </div>
        </section>
        <!-- Start BEst Seller Area -->
        <!-- Start NEwsletter Area -->
        <section class="wn__newsletter__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                        <div class="section__title text-center">
                            <h2>BİZİMLE İLETİŞİME GEÇİN</h2>
                        </div>
                        <div class="newsletter__block text-center">

                            <form action="#">
                                <div class="newsletter__box">
                                    <input type="email" placeholder="E-Posta adresinizi giriniz..">
                                    <button>Abone Ol</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End NEwsletter Area -->
        <!-- Start Best Seller Area -->
        <section class="wn__bestseller__area bg--white pt--80  pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">Tüm <span class="color--theme">Ürünler</span></h2>

                        </div>
                    </div>
                </div>
                <div class="row mt--50">

                </div>
                <div class="tab__container mt--60">
                    <!-- Start Single Tab Content -->
                    <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="kitapicerik.php"><img src="images/books/1.jpg"
                                                    alt="product image"></a>
                                            <a class="second__img animation1" href="kitapicerik.php"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center content--center">
                                            <h4><a href="kitapicerik.php">Ghost</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$50.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.php"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="kitapicerik.php"><img src="images/books/3.jpg"
                                                    alt="product image"></a>
                                            <a class="second__img animation1" href="skitapicerik.php"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center content--center">
                                            <h4><a href="kitapicerik.php">Ghost</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$50.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.php"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="kitapicerik.php"><img src="images/books/5.jpg"
                                                    alt="product image"></a>
                                            <a class="second__img animation1" href="kitapicerik.php"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="kitapicerik.php">Doctor Wldo</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.php"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="kitapicerik.php"><img src="images/books/7.jpg"
                                                    alt="product image"></a>
                                            <a class="second__img animation1" href="kitapicerik.php"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="kitapicerik.php">Doctor Wldo</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.php"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="kitapicerik.php"><img src="images/books/9.jpg"
                                                    alt="product image"></a>
                                            <a class="second__img animation1" href="kitapicerik.php"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="kitapicerik.php">Lando</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$50.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.php"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="kitapicerik.php"><img src="images/books/11.jpg"
                                                    alt="product image"></a>
                                            <a class="second__img animation1" href="kitapicerik.php"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="kitapicerik.php">Lando</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$50.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.php"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="kitapicerik.php"><img src="images/books/8.jpg"
                                                    alt="product image"></a>
                                            <a class="second__img animation1" href="kitapicerik.php"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/12.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                    <div class="row single__tab tab-pane fade" id="nav-biographic" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/1.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/10.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/1.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/11.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/12.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                    <div class="row single__tab tab-pane fade" id="nav-adventure" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/12.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/11.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/1.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/11.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/10.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/1.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/10.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                    <div class="row single__tab tab-pane fade" id="nav-children" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/1.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/10.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/12.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/12.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/1.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                    <div class="row single__tab tab-pane fade" id="nav-cook" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/10.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                </div>
            </div>
        </section>
        <!-- Start BEst Seller Area -->
        <!-- Start Recent Post Area -->
        <section class="wn__recent__post bg--gray ptb--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">Kullanıcı <span class="color--theme">Yorumları</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered lebmid alteration in some ledmid form</p>
                        </div>
                    </div>
                </div>
                <div class="row mt--50">
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="post__itam">
                            <div class="content">
                                <h3><a href="blog-details.html">International activities of the Frankfurt Book </a></h3>
                                <p>We are proud to announce the very first the edition of the frankfurt news.We are
                                    proud to announce the very first of edition of the fault frankfurt news for us.</p>
                                <div class="post__time">
                                    <span class="day">Dec 06, 18</span>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                            <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="post__itam">
                            <div class="content">
                                <h3><a href="blog-details.html">Reading has a signficant info number of benefits</a>
                                </h3>
                                <p>Find all the information you need to ensure your experience.Find all the information
                                    you need to ensure your experience . Find all the information you of.</p>
                                <div class="post__time">
                                    <span class="day">Mar 08, 18</span>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                            <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="post__itam">
                            <div class="content">
                                <h3><a href="blog-details.html">The London Book Fair is to be packed with exciting </a>
                                </h3>
                                <p>The London Book Fair is the global area inon marketplace for rights negotiation.The
                                    year London Book Fair is the global area inon forg marketplace for rights.</p>
                                <div class="post__time">
                                    <span class="day">Nov 11, 18</span>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                            <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Recent Post Area -->
        <!-- Best Sale Area -->
        <section class="wn__bestseller__area bg--white pt--80  pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">En Çok <span class="color--theme">Satanlar</span></h2>

                        </div>
                    </div>
                </div>
                <div class="row mt--50">
                </div>
                <div class="tab__container mt--60">
                    <!-- Start Single Tab Content -->
                    <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/1.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center content--center">
                                            <h4><a href="single-product.html">Ghost</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$50.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center content--center">
                                            <h4><a href="single-product.html">Ghost</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$50.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/6.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Doctor Wldo</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Doctor Wldo</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/9.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Lando</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$50.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/11.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Lando</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$35.00</li>
                                                <li class="old_prize">$50.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/8.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/4.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/12.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                            <div class="single__product">
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/3.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/5.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product product__style--3">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.html"><img
                                                    src="images/books/2.jpg" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="images/books/7.jpg" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                            <ul class="prize d-flex">
                                                <li>$40.00</li>
                                                <li class="old_prize">$35.00</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="cart.html"><i
                                                                    class="bi bi-shopping-bag4"></i></a></li>

                                                        <li><a class="compare" href="#"><i class="bi bi-love"></i></a>
                                                        </li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal"><i class="bi bi-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->


                </div>
            </div>
        </section>
        <!-- Best Sale Area Area -->
        <?php include "indexFooter.html";?>
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal__container" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal__header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- Start product images -->
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="big images" src="images/product/big-img/1.jpg">
                                    </div>
                                </div>
                                <!-- end product images -->
                                <div class="product-info">
                                    <h1>Sefiller</h1>
                                    <div class="rating__and__review">
                                        <ul class="rating">
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                        <div class="review">
                                            <a href="#">4 cilt 4 cilt 4 cilt 4 cilt 4 cilt4 cilt 4 cilt 4 cilt</a>
                                        </div>
                                    </div>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">17.20</span>
                                            <span class="old-price">45.00</span>
                                        </div>
                                    </div>
                                    <div class="quick-desc">
                                        icerik icerikkkk iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik
                                        icerikkkk iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk
                                        iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk
                                        iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk
                                        iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk
                                        iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk
                                        iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk
                                        iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk
                                        iceriikkkicerik icerik icerikkkk iceriikkkicerik icerik icerikkkk iceriikkk
                                    </div>

                                    <div class="addtocart-btn">
                                        <a href="cart.php">Sepete Ekle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
    <script>
    $(document).ready(function(e) {
        "use strict";
        $('.search-panel').each(function() {
            var to = $(this).data('search').toString();
            var text = $(this).find('[data-search="' + to + '"]').html();
            $(this).find('button span.search_by').html(text);
        });

        $('.search-panel li a').on('click', function(e) {
            var sp = $(this).closest('.search-panel');
            var to = $(this).html();
            var text = $(this).html();
            sp.data('search', to);
            console.log(sp.find('.search_by'));
            sp.find('button span.search_by').html(text);
        });
    });
    </script>


</body>

</html>