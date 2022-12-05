<body>

    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="header-demo-bg bg-primary shadow-sm">
      <div class="container">
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
          <div class="logo-wrapper"><a href="<?= $base_url?>"><img src="<?= $base_url?>assets/img/core-img/header-logo.svg" alt=""></a></div>
          <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
        </div>
      </div>
    </div>
    <?php require_once "menu.php";?>