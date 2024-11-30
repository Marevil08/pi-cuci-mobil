<?php
include "config/koneksi.php";
?>
<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>MAR - Mobil Auto Rapi</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="css/index_css.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Cuci Mobil, Cuci Gaya! Tampil Kinclong Bersama MAR</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone" style="color: #F96E2A;"></i> +62 821-1234-4531</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o" style="color: #F96E2A;"></i> 08.00 - 18.00 (Setiap Hari)</span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">MAR - Mobil Auto Rapi</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#appointment" class="smoothScroll">Register</a></li>
                         <li><a href="#saran" class="smoothScroll">Feedback & Response</a></li>
                         <li style="background: #F96E2A; border-radius: 3px; transition: background 0.3s ease;"
                         onmouseover="this.style.background='#FF9933';" 
                         onmouseout="this.style.background='#F96E2A';"><a href="login.php" style="color: white;">Login</a></li> <!-- Ganti Warna Login Button -->
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h1>MAR - Mobil Auto Rapi</h1>
                                             <a href="#about" class="section-btn btn btn-default smoothScroll" style="background: #F96E2A; border-radius: 3px; transition: background 0.3s ease;"
                                                  onmouseover="this.style.background='#FF9933';" 
                                                  onmouseout="this.style.background='#F96E2A';">About Us</a> <!-- Ganti Warna Button About Us -->
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h1>MAR - Mobil Auto Rapi</h1>
                                             <a href="#appointment" class="section-btn btn btn-default btn-gray smoothScroll" style="background: #F96E2A; border-radius: 3px; transition: background 0.3s ease;"
                                                  onmouseover="this.style.background='#FF9933';" 
                                                  onmouseout="this.style.background='#F96E2A';">Register Now</a> <!-- Ganti Warna Button Register Now -->
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">>
                                             <h1>Kepercayaan Anda, Prioritas Kami</h1>
                                             <a href="#saran" class="section-btn btn btn-default btn-blue smoothScroll" style="background: #F96E2A; border-radius: 3px; transition: background 0.3s ease;"
                                                  onmouseover="this.style.background='#FF9933';" 
                                                  onmouseout="this.style.background='#F96E2A';">Feedback</a> <!-- Ganti Warna Button Feedback -->
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s" style="color: white;">About Us</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p style="color: white;">Kami menawarkan berbagai layanan cuci mobil yang dapat disesuaikan dengan kebutuhan Anda. Mulai dari cuci mobil standar hingga perawatan detail seperti pemolesan cat, pembersihan interior, hingga detailing mesin.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3 style="color: white;">Kualitas Terjamin</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3 style="color: white;">Ramah Lingkungan</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3 style="color: white;">Dijamin Cepat dan Efisien</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3 style="color: white;">Dijamin Puas</h3>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>

<?php
date_default_timezone_set('Asia/Jakarta');
$tgl_pendaftaran = date("Y-m-d");
$queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$tgl_pendaftaran'");
$htg = mysql_num_rows($queryy);

$next = $htg + 1;

$no_antrian = $tgl_pendaftaran . '/' . $next;

$hitung = mysql_query("SELECT max(id_customer) as id_terakhir from customer");
$cari = mysql_fetch_array($hitung);
$id_lanjut = $cari['id_terakhir'] + 1;

?>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">



                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="pages/proses_pendaftaran.php">
                              <input type="hidden" class="form-control" id="nama" name="id_customer" value="<?=$id_lanjut;?>">
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Register Form</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">No. Handphone</label>
                                        <input type="number" class="form-control" id="email" name="no_hp" placeholder="No. Handphone Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Alamat</label>
                                        <input type="text" class="form-control" id="email" name="alamat" placeholder="Alamat Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">No. Plat</label>
                                        <input type="text" class="form-control" id="email" name="nomor_plat" placeholder="No. Plat Kendaraan Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Type Mobil</label>
                                        <?php
$result2 = mysql_query("select * from type_mobil");
echo '<select name="type_mobil" class="form-control-rounded form-control" required>';
echo '<option>Pilih Type Mobil</option>';
while ($row2 = mysql_fetch_array($result2)) {
    echo '<option value="' . $row2['type_mobil'] . '">' . $row2['type_mobil'] . '</option>';
}
echo '</select>';
?>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">No. Antrian</label>
                                        <input type="text" class="form-control-rounded form-control" value="<?php echo $next; ?>" required="" readonly name="next">
                                            <input type="hidden" name="no_antrian" class="form-control-rounded form-control" value="<?php echo $no_antrian; ?>" required="" readonly>
                                   </div>


                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Jenis Cucian</label>
                                        <?php
$result = mysql_query("SELECT * FROM jenis_cucian");
$jsArray = "var prdName = new Array();\n";
echo '<select class="form-control" name="id_jenis_cucian" onchange="document.getElementById(\'txt2\').value = prdName[this.value]">';
echo '<option>Pilih Jenis Cucian</option>';
while ($row = mysql_fetch_array($result)) {
    echo '<option value="' . $row['id_jenis_cucian'] . '">' . $row['jenis_cucian'] . '</option>';
    $jsArray .= "prdName['" . $row['id_jenis_cucian'] . "'] = '" . addslashes($row['biaya']) . "';\n";
}
echo '</select>';

?>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Tanggal Pendaftaran</label>
                                        <input type="date" class="form-control" id="email" name="tgl_pendaftaran" value="<?=$tgl_pendaftaran;?>" readonly>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Jam Pendaftaran</label>
                                        <input type="time" class="form-control" id="email" name="jam_pendaftaran" min="08:00:00" max="18:00:00" required="">
                                   </div>

                                   <input type="hidden" name="total_biaya" id="txt2" class="form-control" readonly="" onkeyup="sum();" />
                                   <script type="text/javascript">
                                   <?php echo $jsArray; ?>
                                   </script>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Register Now</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>



      <!-- ABOUT -->
     <section id="saran">
          <div class="container">
               <div class="row">



                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="saran-form" role="form" method="post" action="pages/proses_saran.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Feedback & Response</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Pesan</label>
                                        <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Isi Pesan Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Kebersihan</label>
                                        <input type="number" class="form-control" id="email" name="kebersihan" placeholder="Nilai Point Kebersihan" maxlength="3" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Keramahan</label>
                                        <input type="number" class="form-control" id="email" name="keramahan" placeholder="Nilai Point Keramahan" maxlength="3" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Ketelitian</label>
                                        <input type="number" class="form-control" id="email" name="ketelitian" placeholder="Nilai Point Ketelitian" maxlength="3" required="">
                                   </div>

                                   <br><br><br><br><br>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Send Feedback</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>



     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informasi Lanjut</h4>
                              <p>Untuk mengetahui informasi lebih lanjut, silahkan hubungi kontak berikut.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> +62 821-1234-4531</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">marioachmad123@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         &nbsp;
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Waktu Operasional</h4>
                                   <p>Senin - Minggu <span>08.00 - 18.00</span></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-6 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2024<b> Mario Achmad Rasyidin</b></a> | 4IA18</a>
                                   </p>
                              </div>
                         </div>

                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>