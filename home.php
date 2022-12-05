<?php
if (!isset($_SESSION['pkn_mobile_app'])) {
  session_start();
}

if (empty($_SESSION['pkn_mobile_app'])) {

  header('Location: dashboard');
}
include_once "config/DbConnection.php";
include_once "config/inc_config.php";
include_once "lib/tanggal.php";
include_once "lib/setting.php";
//include "controller/function/auth_login.php";
$title_post = "";
include "layout/head.php";
include "layout/header.php";

?>
<script type="text/javascript">

</script>
<div class="page-content-wrapper">
  <!-- Tiny Slider One Wrapper -->
  <?php require_once "construct/section_slider.php"; ?>
  <div class="pt-3"></div>

  <div class="container">
    <div class="card bg-primary mb-3 bg-img" style="background-image: url('<?= $base_url ?>assets/img/core-img/1.png')">
      <div class="card-body direction-rtl p-5">
        <h3 class="text-white">Selamat Datang</h3>
        <p class="mb-4 text-white">Halo <?= $login_session ?></p>
        <a class="btn btn-warning" href="<?= $base_url ?>profil">Lihat Profil</a>

      </div>
    </div>
  </div>
  <div class="container direction-rtl">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <img src="assets/img/icons/donate.svg" alt="" width="180px">
            </div>
          </div>
          <div class="col-8">
            <div class="feature-card mx-auto text-left">
              <h4>DONASI GOTONG ROYONG</h4>
              <h6>Ayo jadilah bagian dari Perjuangan Kebangkitan Nusantara</h6>
              <a class="btn btn-success" href="<?= $base_url ?>donasi">Donasi</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="pb-3"></div>
</div>
<?php
include "layout/bottom_nav.php";
include "layout/footer.php";
?>