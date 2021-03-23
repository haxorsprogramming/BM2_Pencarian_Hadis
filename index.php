<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1", shrink-to-fit="no">
  <title>Aplikasi Pencarian Hadist</title>
  <!-- base:css -->
  <link rel="stylesheet" href="ladun/login/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="ladun/login/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!-- inject:css -->

  <link rel="stylesheet" href="ladun/login/css/style.css">
  <!-- endinject -->
</head>
<body>
  <div class="container-scroller" id='divUtama'>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo" style='text-align:center;'>
                  <img src="ladun/login/images/logo_uin.png" alt="logo" style='width:100px;'>
                </div>
                <div style='text-align:center;'>
                <h3><strong>Aplikasi Pencarian Terjemahan Hadist Shahih, Hasan, Dha'if, dan Maudhu </strong></h3>
                <h4>Menggunakan metode BM25</h4>
                <div style="margin-top:20px;">
                  <div id='frm_login'>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-lg" id="txtUsername" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-lg" id="txtPassword" placeholder="Password">
                        </div>
                        <div id='capNotifLogin'></div>
                        <div class="mt-3">
                          <a id='btnMasuk' v-on:click='masukAtc' class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#!">
                            <i class='fas fa-sign-in-alt'></i> Masuk
                          </a>
                          <div style="margin-top: 20px;">
                            <a href='#!' v-on:click='daftarAtc'><h5>Registrasi User</h5></a>
                          </div>
                        </div>
                  </div>
                  <div class="mt-2">
                      <div style='padding-top:22px;'>
                        
                          <div class="badges">
                            <small>Status koneksi </small><a href="#!" id='capCekServer' class="badge">-</a>
                          </div>
                          <h6 class="font-weight-light">Develop by : {{pengembang}}</h6>
                          <span>Program Studi Ilmu Komputer<br/> Fakultas Sains dan Teknologi<br/> Universitas Islam Negeri Sumatera Utara</span>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="ladun/login/vendors/base/vendor.bundle.base.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- inject:js -->
<script src="ladun/login/js/template.js"></script>
<script>
  var server = "http://localhost/apps_rizka/";
</script>
<script src="ladun/login/js/login.js"></script>
<!-- endinject -->
</body>

</html>