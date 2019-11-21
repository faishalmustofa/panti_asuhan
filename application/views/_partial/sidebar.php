  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url();?>" class="brand-link">
      <i class="nav-icon fas fa-hand-holding-heart"></i>
      <span class="brand-text font-weight-light"> Shafiqa Nurrohman</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview user-panel <?=($this->uri->segment(2) == 'profile' || $this->uri->segment(2) == 'settings') ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?=($this->uri->segment(2) == 'profile' || $this->uri->segment(2) == 'settings') ? 'active' : ''; ?>">
              <img src="<?=base_url();?>assets/dist/img/avatar5.png" class="nav-icon img-circle elevation-2" alt="User Image">
              <p>
                <?=$this->session->userdata('dash_keu_nama')?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('pages/profile');?>" class="nav-link <?=($this->uri->segment(2) == 'profile') ? 'active' : ''; ?>">
                  <i class="far fa fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('pages/settings')?>" class="nav-link <?=($this->uri->segment(2) == 'settings' || $this->uri->segment(2) == 'settings') ? 'active' : ''; ?>">
                  <i class="far fa fa-gavel nav-icon"></i>
                  <p>Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" onclink="return false;" class="nav-link logout">
                  <i class="far fa fa-power-off nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url();?>" class="nav-link <?=($this->uri->segment(2) == FALSE || $this->uri->segment(2) == 'index') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?=($this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart') ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?=($this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-child"></i>
              <p>
                Data Anak
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?=($this->uri->segment(2) == 'pemasukan' || $this->uri->segment(2) == 'pengeluaran' || $this->uri->segment(2) == 'rekapitulasi') ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?=($this->uri->segment(2) == 'pemasukan' || $this->uri->segment(2) == 'pengeluaran' || $this->uri->segment(2) == 'rekapitulasi') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Keuangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('pages/pemasukan')?>" class="nav-link <?=($this->uri->segment(2) == 'pemasukan') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('pages/pengeluaran')?>" class="nav-link <?=($this->uri->segment(2) == 'pengeluaran') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('pages/rekapitulasi')?>" class="nav-link <?=($this->uri->segment(2) == 'rekapitulasi') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekapitulasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?=($this->uri->segment(2) == 'lap_harian' || $this->uri->segment(2) == 'lap_mingguan' || $this->uri->segment(2) == 'lap_bulanan' || $this->uri->segment(2) == 'lap_tahunan') ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?=($this->uri->segment(2) == 'lap_harian' || $this->uri->segment(2) == 'lap_mingguan' || $this->uri->segment(2) == 'lap_bulanan' || $this->uri->segment(2) == 'lap_tahunan') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('pages/lap_harian')?>" class="nav-link <?=($this->uri->segment(2) == 'lap_harian') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Harian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('pages/lap_mingguan')?>" class="nav-link <?=($this->uri->segment(2) == 'lap_mingguan') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Mingguan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('pages/lap_bulanan')?>" class="nav-link <?=($this->uri->segment(2) == 'lap_bulanan') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Bulanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('pages/lap_tahunan')?>" class="nav-link <?=($this->uri->segment(2) == 'lap_tahunan') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Tahunan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?=($this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart') ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?=($this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart') ? 'active' : ''; ?>">
             <i class="nav-icon fas fa-landmark"></i>
              <p>
                Fasilitas
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?=($this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart') ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?=($this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart' || $this->uri->segment(2) == 'chart') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                About
              </p>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>