	<?php 
  session_start();
  ob_start();
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

      <a href="../home/home.php" class="logo"><span>InSAGE</span></a>
    </div>

    <nav class="navbar-custom">

      <ul class="list-inline float-right mb-0">



        <li class="list-inline-item dropdown notif">
          <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
            <!-- item-->
            <div class="dropdown-item noti-title">
              <h5><small><span class="label label-danger pull-xs-right">12</span>Mesajlar</small></h5>
            </div>

            <!-- item-->
            <a href="#" class="dropdown-item notify-item">                                    
              <p class="notify-details ml-0">
                <b>Ünzile Döner</b>
                <span>Yeni mesaj alındı</span>
                <small class="text-muted">2 dakika önce</small>
              </p>
            </a>

            <!-- item-->
            <a href="#" class="dropdown-item notify-item">                                    
              <p class="notify-details ml-0">
                <b>Ayşegül </b>
                <span>Yeni mesaj alındı</span>
                <small class="text-muted">15 dakika önce</small>
              </p>
            </a>



            <!-- All-->
            <a href="#" class="dropdown-item notify-item notify-all">
             Tümünü Gör
           </a>

         </div>
       </li>

       <li class="list-inline-item dropdown notif">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
          <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5><small><span class="label label-danger pull-xs-right">5</span>Bildirimler</small></h5>
          </div>

          <!-- item-->
          <a href="#" class="dropdown-item notify-item">

            <p class="notify-details">
              <b>Nil Canbaz</b>
              <span>Kullanıcı kaydı</span>
              <small class="text-muted">3 dakika önce</small>
            </p>
          </a>

          <!-- item-->
          <a href="#" class="dropdown-item notify-item">

            <p class="notify-details">
              <b>Hidayet Takçı</b>
              <span>Yeni kitap satın aldı</span>
              <small class="text-muted">12 dakika önce</small>
            </p>
          </a>

          <!-- item-->


          <!-- All-->
          <a href="#" class="dropdown-item notify-item notify-all">
           Tümünü Gör
         </a>

       </div>
     </li>
     <?php
     $kullaniciSor=$db->prepare("SELECT * from kullanici where email=:email");
     $kullaniciSor->execute(array(
       'email' => $_SESSION['email']

     ));
     $kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);


     ?>

     <li class="list-inline-item dropdown notif">
      <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="../home/<?php echo $kullaniciCek['yol'] ?>" alt="Profile image" class="avatar-rounded">
      </a>
      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
        <!-- item-->
        <div class="dropdown-item noti-title">
          <h5 class="text-overflow"><small>Merhaba, <?php echo $kullaniciCek['ad']; ?></small> </h5>
        </div>

        <!-- item-->
        <a href="../home/profil.php" class="dropdown-item notify-item">
          <i class="fa fa-user"></i> <span>Profil</span>
        </a>

        <!-- item-->
        <a href="../home/exit.php" class="dropdown-item notify-item">
          <i class="fa fa-power-off"></i> <span>Çıkış Yap</span>
        </a>


      </div>
    </li>

  </ul>



</nav>

</div>
