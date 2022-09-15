  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if ($profile->photo != null) { ?>
            <img src="<?php echo my_media($profile->photo) ?>" class="img-circle" alt="User Image" style="width: 215px; height: 215px; max-height: 45px;">
          <?php } else { ?>
            <img src="<?php echo base_url('assets/') ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $profile->user_name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if ($this->uri->segment(3) == "") {
          echo 'class="active"';
        } ?>>
          <a href="<?php echo bantuan_url('admin') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pesan Masuk</a></li>
            <li><a href="<?php echo bantuan_url('admin/links') ?>"><i class="fa fa-circle-o"></i> Tautan</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Halaman</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Post</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Semua Post</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Post</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Kategori</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Komentar</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Tags</a></li>
                </ul>
              </a>
            </li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Kutipan</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Sambutan Kepala Sekolah</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Subscriber</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Data Induk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Kebutuhan Khusus</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pendidikan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-book-o"></i>
            <span>Akademik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Data Induk</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Alumni</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Jurusan</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Kelas</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Moda Transportasi</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Penghasilan Bulanan</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Status Peserta Didik</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Tahun Pelajaran</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Tempat Tinggal</a></li>
                </ul>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Grafik</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Kelas</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Status Peserta Didik</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Tahun Lulus</a></li>
                </ul>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Import</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Import Alumni</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Import Peserta Didik</a></li>
                </ul>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Pengaturan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Rombongan Belajar</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Wali Kelas</a></li>
                </ul>
              </a>
            </li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Peserta Didik</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Rombongan Belajar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>GTK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Data Induk</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Jenis GTK</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Keahlian Laboratorium</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Lembaga Pengangkat</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pangkat/Golongan</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pekerjaan</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Status Kepegawaian</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Sumber Gaji</a></li>
                </ul>
              </a>
            </li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Semua GTK</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Import GTK</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sign-in"></i>
            <span>PPDB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pengaturan</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Calon Peserta Didik</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Gelombang Pendaftaran</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Kuota Penerimaan</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Jalur Pendaftaran</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Proses Seleksi</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pendaftar Diterima</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pendaftar Tidak Diterima</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i>
            <span>PlUGINS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Iklan</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i> <span>Jejak Pendapat</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Pertanyaan</a></li>
                  <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Jawaban</a></li>
                </ul>
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-upload"></i>
            <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> File</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Kategori File</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Album Foto</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Video</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-paint-brush"></i>
            <span>Tampilan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Lihat Situs</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Menu</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Thema</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-md"></i>
            <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Administrator</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Peserta Didik</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> GTK</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Daftar Modul</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Group Pengguna</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Hak Akses</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Diskusi</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Email Server</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Jejaring Sosial</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Media</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Menulis</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Profil Sekolah</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-circle-o"></i> Umum</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-medkit"></i>
            <span>Pemeliharaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-database"></i> Backup Database</a></li>
            <li><a href="<?php echo bantuan_url('admin/') ?>"><i class="fa fa-download"></i> Backup Aplikasi</a></li>
          </ul>
        </li>
        <li class="header">Bantuan</li>
        <li><a href="#"><i class="fa fa-globe text-aqua"></i> <span>Situs Resmi</span></a></li>
        <li><a href="#"><i class="fa fa-comments-o text-yellow"></i> <span>Forum Diskusi</span></a></li>
        <li><a href="<?php echo bantuan_url('admin/') ?>about"><i class="fa fa-info text-red"></i> <span>Tentang</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->