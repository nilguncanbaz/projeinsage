<?php 
session_start();
ob_start();
include "../database/baglan.php";
if(!isset($_SESSION['email'] )) {
  echo'yönlendiriliyor..';
  header("location:../index.html");
}
?>
<!-- top bar navigation -->
<div class="headerbar">

  <!-- LOGO -->
  <div class="headerbar-left">
    <ul class="list-inline menu-left mb-0">
      <li class="float-left">
        <button class="button-menu-mobile open-left">
          <i class="fa fa-fw fa-bars"></i>
        </button>
      </li>                        
    </ul>
    <a href="kitap.php" class="logo"><span>InSAGE</span></a>
  </div>

  <nav class="navbar-custom">

    <ul class="list-inline float-right mb-0">
    
   <?php
   $kullaniciSor=$db->prepare("SELECT * from kullanici where email=:email");
   $kullaniciSor->execute(array(
     'email' => $_SESSION['email']

   ));
   $kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);


   ?>

   <li class="list-inline-item dropdown notif">
    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
      <img src="<?php echo $kullaniciCek['yol'] ?>" alt="Profile image" class="avatar-rounded">
    </a>
    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
      <!-- item-->
      <div class="dropdown-item noti-title">
        <h5 class="text-overflow"><small>Merhaba, <?php echo $kullaniciCek['ad']; ?></small> </h5>
      </div>

     

      <!-- item-->
      <a href="../home/exit.php" class="dropdown-item notify-item">
        <i class="fa fa-power-off"></i> <span>Çıkış Yap</span>
      </a>


    </div>
  </li>

</ul>




</nav>

</div>
