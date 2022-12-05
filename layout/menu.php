<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= $base_url ?>" class="brand-link">
    <img src="<?= $base_url ?>assets/dist/img/logo.png" alt="SIAP" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SIAP</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= $base_url ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $login_session ?></a>
      </div>
    </div>

    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open"><a href="<?= $base_url ?>" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dasbor</p>
          </a></li>
        <?php if ($previllage == 1 and $superadmin == 1) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-users"></i>
              <p>Pengguna<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="<?= $base_url ?>user-new" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pengguna</p>
                </a></li>
              <li class="nav-item"><a href="<?= $base_url ?>user" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>

            </ul>
          </li>

        <?php } ?>
        <?php if ($previllage == 1) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-users"></i>
              <p>Referal<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="<?= $base_url ?>referal" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Data Referal</p>
                </a>
              </li>
              <li class="nav-item"><a href="<?= $base_url ?>referal-dpd" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Data Referal DPD</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i>
              <p>Statistik<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="<?= $base_url ?>statistik/kependudukan/!#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Statistik Kependudukan</p>
                </a></li>
              <li class="nav-item"><a href="<?= $base_url ?>statistik/wilayah/!#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Statistik Wilayah</p>
                </a></li>
            </ul>
          </li>
        <?php } ?>
        <li class="nav-item menu-open"><a href="<?= $base_url ?>agenda" class="nav-link"><i class="nav-icon fas fa-calendar-alt"></i>
            <p>Agenda</p>
          </a></li>
        <?php if ($finance == 1) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-money-bill"></i>
              <p>Keuangan<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="<?= $base_url ?>#" class="nav-link"><i class="far fa-file-alt nav-icon"></i>
                  <p>Mutasi Bank</p>
                </a>
              </li>
              <li class="nav-item"><a href="<?= $base_url ?>donasi" class="nav-link"><i class="far fa-money-bill-alt nav-icon"></i>
                  <p>Data Donasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-th"></i>
              <p>Struktur<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <?php if ($previllage == 1) { ?><li class="nav-item"><a href="<?= $base_url ?>pimnas/!#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Pimnas</p>
                  </a></li><?php } ?>
              <?php if ($previllage == 1 or $previllage == 2) { ?><li class="nav-item"><a href="<?= $base_url ?>pimda" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Pimda</p>
                  </a></li><?php } ?>
              <?php if ($previllage == 1 or $previllage == 2 or $previllage == 3) { ?><li class="nav-item"><a href="<?= $base_url ?>pimcab" class="nav-link"><i class="far fa-circle nav-icon"></i>
                    <p>Pimcab</p>
                  </a></li><?php } ?>
              <li class="nav-item"><a href="<?= $base_url ?>pac" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Pimcam</p>
                </a></li>
            </ul>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="#" class="nav-link"><i class="nav-icon fas fa-th"></i>
            <p>Anggota<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="<?= $base_url ?>member/add/!#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Pendaftaran</p>
              </a></li>
            <li class="nav-item"><a href="<?= $base_url ?>member" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Data Anggota</p>
              </a></li>
            <?php if ($previllage == 1) { ?><li class="nav-item"><a href="<?= $base_url ?>member/import/!#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Impor Anggota</p>
                </a></li><?php } ?>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"><i class="nav-icon fas fa-tools"></i>
            <p>Check IN<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="<?= $base_url ?>location_point" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Data Lokasi</p>
              </a></li>
            <li class="nav-item"><a href="<?= $base_url ?>data-checkin" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Data Check IN</p>
              </a></li>

          </ul>
        </li>
        <!--<li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-newspaper"></i><p>Berita<i class="fas fa-angle-left right"></i></p></a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="<?= $base_url ?>artikel-new" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tambah Blog</p></a></li>
              <li class="nav-item"><a href="<?= $base_url ?>artikel" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Daftar Blog</p></a>
              </li>
              
            </ul>
          </li>-->
        <?php if ($previllage == 1) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-tools"></i>
              <p>Pengaturan<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="<?= $base_url ?>config-site" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Situs</p>
                </a></li>
              <li class="nav-item"><a href="<?= $base_url ?>config-mail-server" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Mail Server</p>
                </a></li>
              <li class="nav-item"><a href="<?= $base_url ?>zona" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Zona Wilayah</p>
                </a></li>
              <li class="nav-item"><a href="<?= $base_url ?>kota" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>Jumlah Penduduk</p>
                </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-chart"></i>
              <p>Report<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="<?= $base_url ?>report" class="nav-link"><i class="far fa-user-check nav-icon"></i>
                  <p>Input Harian</p>
                </a></li>
              <li class="nav-item"><a href="<?= $base_url ?>report_statistik" class="nav-link"><i class="far fa-chart-line nav-icon"></i>
                  <p>Provinsi/Kabupaten</p>
                </a></li>
              <!-- <li class="nav-item"><a href="<?= $base_url ?>report_kta_bulk" class="nav-link"><i class="far fa-user-check nav-icon"></i>
                  <p>Print KTA BULK</p>
                </a></li> -->
            </ul>
          </li>

        <?php } ?>
        <li class="nav-item"><a href="#" data-toggle="modal" data-target="#modal-default" data-backdrop='static' class="nav-link"><i class="nav-icon fas fa-external-link-alt"></i>
            <p>Logout</p>
          </a></li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>