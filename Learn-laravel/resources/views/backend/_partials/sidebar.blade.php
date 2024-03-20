<!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Frada</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100"><a href="{{ route('users.index') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Akun Pengguna</a>

                 <a href="{{ route('nasabah.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Data Nasabah</a>

                  <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>data Karyawan</a>
               
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Aktivitas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('simpanan.index') }}" class="dropdown-item">Simpanan</a>
                            <a href="typography.html" class="dropdown-item active">Pinjaman</a>
                            <a href="Users" class="dropdown-item">Transaksi</a>
                        </div>
                    </div>
                   
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Riwayat Transaksi</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
