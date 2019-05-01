<!doctype html>
<html lang="tr">
<?php 
    include "hesapHead.php";
?>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <?php include "hesapHeader.php";?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Hesap Bilgileri</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="../index.php">inSAGE</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Hesap Bilgileri</span>
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
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Kişisel Bilgilerim</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Satın Alma Geçmişim</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Favori Listem</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="my__account__wrapper">

                                    <form action="guncelle.php" method="post">
                                        <div class="account__form" style="padding:5%;">
                                            <h3 style="text-align:center" class=" account__title">Kişisel Bilgilerim</h3>
                                            <div class="input__box">
                                                <label>Ad <span>*</span></label>
                                                <input type="text" name="ad" value="<?php echo $_SESSION['ad']?>" required>
                                            </div>
                                            <div class="input__box">
                                                <label>Soyad<span>*</span></label>
                                                <input type="text" name="soyad" value="<?php echo $_SESSION['soyad']?>" required>
                                            </div>

                                            <div class="input__box">
                                                <label>E-posta <span>*</span></label>
                                                <input type="text" name="email" value="<?php echo $_SESSION['email']?>" required>
                                            </div>
                                            <div class="input__box">
                                                <label>Telefon<span></span></label>
                                                <input type="text" name="telefon" >
                                            </div>
                                            <div class="input__box">
                                                <label>Parola<span>*</span></label>
                                                <input type="password" name="parola" >
                                            </div><br>
                                            <div style="text-align:right" class="form__btn">
                                                <button type="submit" name="guncelle">Güncelle</button><br><br>

                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...
                    </div>
                </div>

            </div>
        </section>
        <!-- End My Account Area -->
        <!-- Footer Area -->
        <?php include "hesapFooter.html"?>
        <!-- //Footer Area -->

    </div>
    <!-- //Main wrapper -->
    <?php include "hesapScript.html";?>
</body>

</html>