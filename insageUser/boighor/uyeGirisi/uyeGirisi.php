<!doctype html>
<html lang="tr">
<?php include "accountHead.html";?>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <?php include "accountHeader.php";?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Üye Girişi</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="../index.php">inSAGE</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Üye Girişi</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start My Account Area -->
        <section class="my_account_area pt--80 pb--55 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="my__account__wrapper">

                            <form action="uyeLogin.php" method="post">
                                <div class="account__form" style="padding:20%; padding-bottom:25% ">
                                    <h3 style="text-align:center" class=" account__title">Giriş Yap</h3>
                                    <div class="input__box">
                                        <label>E-posta Adresi<span>*</span></label>
                                        <input type="mail" name="email" required>
                                    </div>
                                    <div class="input__box">
                                        <label>Şifre<span>*</span></label>
                                        <input type="password" name="parola" required>
                                    </div><br>
                                    <div class="form__btn">
                                        <button type="submit" name="giris"
                                            style="padding-left:45%;padding-right:50%">GİRİŞ</button><br><br>

                                    </div>
                                    <a class="forget_pass" href="#">Şifremi
                                        Unuttum</a>


                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="my__account__wrapper">

                            <form action="uyeOl.php" method="post">
                                <div class="account__form" style="padding:20%;padding-bottom:17%; text-align:center">
                                    <h3 class="account__title">Üye Ol</h3>
                                    <div class="form__btn">

                                        <p>Üye değil misiniz?<br>Hemen üye olun, inSAge ile kitaplardan faydalanın !</p>
                                        <img style="width:56%" src="img/uyeOl.png" alt="uyeOl"> <br><br>

                                        <button type="submit" style="padding-left:25%;padding-right:25%" >Hemen Üye
                                            Ol</button>

                                    </div><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->
        <!-- Footer Area -->
        <?php include "accountFooter.html"?>
        <!-- //Footer Area -->

    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/active.js"></script>

</body>

</html>