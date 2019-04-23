<!DOCTYPE html>
<html lang="en">
<?php include "head.html";
include "icerikYukleme/dosyaSay.php";?>

<body class="adminbody">

	<div id="main">
		<?php

    include "headbar.php";
    include "sidebar.html";
    include "database/baglan.php";

    ?>

    <div class="content-page">

     <!-- Start content -->
     <div class="content">

      <div class="container-fluid">
       <div class="row">
        <div class="col-xl-12">
         <div class="breadcrumb-holder">
          <h1 class="main-title float-left">Kitap İçeriği Yükleme</h1>
          <ol class="breadcrumb float-right">
           <li class="breadcrumb-item">Kitap</li>
           <li class="breadcrumb-item active">Kitap İçeriği Yükleme</li>
         </ol>
         <div class="clearfix"></div>
       </div>
     </div>
   </div>


   <div class="row">
    <?php
    $kullaniciSor = $db->prepare("SELECT * from ebook where ISBN=:ISBN");
    $kullaniciSor->execute(array(
      'ISBN' => $_REQUEST['ISBN'],
    ));
    $kullaniciCek = $kullaniciSor->fetch(PDO::FETCH_ASSOC);

    ?>


    <div class="col-xs-25 col-sm-25 col-md-25 col-lg-25 col-xl-25">

     <div class="card mb-3">

      <div class="card-header">
       <h3><i class="fa fa-upload"></i> Kitap İçeriği Yükleme </h3>

     </div>


     <div class="card-body">

       <div class="col-lg-15 col-xl-15">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><b>Kitabın tümünü yükle</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>Kitabı sayfa sayfa yükle</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><b>Kitabı metin olarak yükle </b></a>
        </li>

      </ul>

      <div class="tab-content" id="myTabContent">
       <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
        <div class="card mb-6">
         <br>

         <h6>&nbsp;&nbsp;<i class="fa fa-file-image-o"></i> Çoklu Fotoğraf Yükle </h6>
         <form action="icerikYukleme/yukle.php?ISBN=<?php echo $_REQUEST['ISBN'] ?>"method="post" enctype="multipart/form-data" id="yukle" >

          <?php
          $klasor = 'icerikYukleme/dosyalar/'.$_REQUEST['ISBN'].'/pages/';
          if (sayibul($klasor) == $kullaniciCek['pageSize']+2) {
            ?>&nbsp;&nbsp; <?php	echo "Kitap sayfaları tam"; ?> <i class="fa fa-check" aria-hidden="true"  ></i>
            <?php
          } else if (sayibul($klasor) == 0) {?>
            <input type="file" name="resim[]" id="filer_example2"  multiple="multiple" />

            <input type="submit" class="btn btn-danger"  value="Fotoğrafları Yükle  " />
            <?php

          } else {
            ?>&nbsp;&nbsp; <?php echo "Kitap sayfalarında eksik var";
            ?> <img src="https://media.giphy.com/media/B0uJ6d5OXb50k/giphy-downsized.gif" style="width: 5%;"></img>


            <?php
          }
          ?>
        </form>
        <hr>
        <h6>&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i> PDF Yükle </h6>
        <form action="icerikYukleme/pdfyukle.php?ISBN=<?php echo $_REQUEST['ISBN'] ?>" method="post" enctype="multipart/form-data" id="yukle" >

         &nbsp;	<input type="file" name="file"/>
         <input type="submit" class="btn btn-danger" value="Pdf Yükle"/>


         <?php
//pdf var mı yok mu kontrol etme
         $kontrol = 'icerikYukleme/dosyalar/' . $_REQUEST['ISBN'] . '/pdfs/';
         $dosya = false;
$open = opendir($kontrol); // klasör aç
while ($q = readdir($open)) {
  if ($q != "." && $q != "..") {
    $dosya = $q;
  }
}
closedir($open); // klasörü kapat
if ($dosya == true) {
  echo 'Pdf var';
  ?>  <i class="fa fa-check" aria-hidden="true"  ></i>
  <?php
} else {
  echo 'Pdf yok';
  ?>  <i class="fa fa-close" aria-hidden="true"></i>
  <?php
}?>

</form>
<br>
</div>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
 <br>

 <div class="row">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

   <div class="card mb-3">

    <div class="card-header">


     <h3><i class="fa fa-image"></i> <?php echo "ISBN: " . $_REQUEST['ISBN']; ?> </h3>
   </div>
   <!-- end card-header -->

   <div class="card-body">
     <div class="table-responsive">

      <table class="table table-bordered">
       <thead>
        <tr>
         <td style="width:14%">Sayfa No</td>
         <td style="width:50%">Kitap Sayfası</td>
         <td style="width:20%">ISBN</td>
         <td style="width:150%">İşlemler</td>
       </tr>
     </thead>
     <tbody>
      <?php

      $resimSor = $db->prepare("SELECT * from ebook_sayfa_resim where ISBN=:id");
      $resimSor->execute(array(
        'id' => $_REQUEST['ISBN'],
      ));

      while ($resimCek = $resimSor->fetch(PDO::FETCH_ASSOC)) {

        ?>

        <tr >
          <th>	<?php echo $resimCek['sayfaNo'] ?></th>

          <td>
           <span style="float: left; margin-right:10px;"><img
            class="img-fluid" style="max-width:150px; height:auto;" src="<?php echo $resimCek['yol'] ?>" /></span>
          </td>

          <td>
            <h4><?php echo $resimCek['ISBN'] ?></h4>

          </td>

          <td>
            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_slide_2<?php echo $resimCek['sayfaNo'] ?>"><i class="fa fa-pencil" ></i></a>



            <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_edit_slide_2" aria-hidden="true" id="modal_edit_slide_2<?php echo $resimCek['sayfaNo'] ?>">
             <div class="modal-dialog">
              <div class="modal-content">

               <form action="icerikYukleme/guncellefoto.php?ISBN=<?php echo $resimCek['ISBN'] ?>&sayfaNo=<?php echo $resimCek['sayfaNo'] ?> " method="post" enctype="multipart/form-data" id="yukle">


                <div class="modal-header">
                 <h5 class="modal-title">Güncelle</h5>
                 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Kapat</span></button>
               </div>

               <div class="modal-body">

                 <div class="row">
                  <div class="col-lg-12">
                   <div class="form-group">
                    <label>ISBN</label>
                    <input class="form-control" name="title" type="text" value="<?php echo $resimCek['ISBN'] ?>" disabled/>
                  </div>
                </div>
              </div>



              <div class="row">
                <div class="col-lg-12">
                 <div class="form-group">
                  <label>Sayfa No</label>
                  <input class="form-control" name="url" type="text" value="<?php echo $resimCek['sayfaNo'] ?>" disabled />
                </div>
              </div>
            </div>





            <label>Sayfa Fotoğrafı</label> <br />
            <input type="file"  name="resim" required>





          </div>

          <div class="modal-footer">

           <input type="submit" class="btn btn-success btn-sm" value="Kaydet" >


         </div>

       </form>

     </div>
   </div>
 </div>
 <a href="resimSil.php?sayfaNo=<?php echo $resimCek['sayfaNo'] ?>&ISBN=<?php echo $resimCek['ISBN'] ?>&pk=<?php echo $resimCek['pk'] ?>&yol=<?php echo $resimCek['yol'] ?>" onClick="return confirm('Bu içeriği silmek istediğinize emin misiniz?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

</td>
</tr>


<?php }?>
</tbody>
</table>

</div>


</div>

<!-- end card-body -->
</div>


</div>
<!-- end card -->

</div>

</div>

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


  <br>

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

      <div class="card mb-3">

        <div class="card-header">


          <h3><i class="fa fa-image"></i> <?php echo "ISBN: " . $_REQUEST['ISBN']; ?> </h3>
        </div>
        <!-- end card-header -->

        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <td style="width:14%">Sayfa No</td>
                  <td style="width:20%">ISBN</td>
                  <td style="width:150%">İşlemler</td>
                </tr>
              </thead>
              <tbody>
                <?php

                $metinSor = $db->prepare("SELECT * from ebook_sayfa_metin where ISBN=:id");
                $metinSor->execute(array(
                  'id' => $_REQUEST['ISBN'],
                ));

                while ($metinCek = $metinSor->fetch(PDO::FETCH_ASSOC)) {

                  ?>

                  <tr>
                    <th>  <?php echo $metinCek['sayfaNo'] ?></th>



                    <td>
                      <h4><?php echo $metinCek['ISBN'] ?></h4>

                    </td>

                    <td>
                      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_slide_1<?php echo $metinCek['sayfaNo'] ?>"><i class="fa fa-pencil" ></i></a>



                      <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_edit_slide_3" aria-hidden="true" id="modal_edit_slide_1<?php echo $metinCek['sayfaNo'] ?>">
                        <div class="modal-dialog modal-lg"">
                          <div class="modal-content">




                            <div class="modal-header">
                              <h5 class="modal-title">Metin Yükleme</h5>
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Kapat</span></button>
                            </div>

                            <div class="modal-body">

                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label>ISBN</label>
                                    <input class="form-control" name="title" type="text" value="<?php echo $metinCek['ISBN'] ?>" disabled/>
                                  </div>
                                </div>
                              </div>



                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label>Sayfa No</label>
                                    <input class="form-control" name="url" type="text" value="<?php echo $metinCek['sayfaNo'] ?>" disabled />
                                  </div>
                                </div>
                              </div>



                              <div class="card mb-3">




                                <div class="card-body">
                                  <form action="../ebook/icerikYukleme/txtKaydet.php?ISBN=<?php echo $_REQUEST['ISBN'] ?>" method="post">

                                    <?php
                                    $isim = "../ebook/" . $metinCek['yol'];
                                    $dosya = fopen($isim, 'r');

                                    ?>
                                    <textarea rows="10" class="form-control" name="content" value=""><?php echo fread($dosya, '2048'); ?></textarea><br>
                                    <input type="text" name="sayfaNo" value="<?php echo $metinCek['sayfaNo'] ?>" hidden/>
                                    <input type="submit" name="bilgi" class="btn btn-success btn-sm" value="Kaydet">



                                  </div>
                                </div><!-- end card-->

                              </div>

                            </form>



                          </div>
                        </div>
                      </div>

                      <a href="metinSil.php?sayfaNo=<?php echo $metinCek['sayfaNo'] ?>&ISBN=<?php echo $metinCek['ISBN'] ?>&pk=<?php echo $metinCek['pk'] ?>&yol=<?php echo $metinCek['yol'] ?>" onClick="return confirm('Bu içeriği silmek istediğinize emin misiniz?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                    </td>

                  </tr>


                <?php }?>
              </tbody>
            </table>

          </div>


        </div>

        <!-- end card-body -->
      </div>


    </div>
    <!-- end card -->

  </div>
</div>

</div>
</div>
</div>

</div>
<!-- end card-body -->
<a role="button" href="kitapicerigiekle.php" class="btn btn-primary"><span class="btn-label"><i class="fa fa-arrow-left"></i></span>Geri Dön</a>

</div>
<!-- end card -->

</div>

</div>
<!-- end col -->

</div>

</div>
<?php include "footer.html";?>
<script>
 $(document).ready(function(){

  'use-strict';
  <?php $sayfa = $kullaniciCek['pageSize'];?>
    //Example 2
    $('#filer_example2').filer({
    	limit: <?php echo $sayfa + 2; ?>,
    	maxSize: <?php echo $sayfa + 2; ?>,
    	extensions: ['jpg', 'jpeg', 'png', 'gif', 'psd'],
    	changeInput: true,
    	showThumbs: true,
    	addMore: true
    });


  });
</script>


</div>
<?php include "script.html";?>

<!-- END Java Script for this page -->

</body>
</html>
