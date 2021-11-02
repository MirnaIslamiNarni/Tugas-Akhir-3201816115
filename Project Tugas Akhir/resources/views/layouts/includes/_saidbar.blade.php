<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						
						@if(auth()->user()->tipe=='admin')
						<li><a href=""><span>Admin</span></a></li>
						<li><a href="/Admin/dataUserBaru"><i class="lnr lnr-home"></i> <span>Data Akun Baru</span></a></li>
						<li><a href="/Admin/dataUser"><i class="lnr lnr-home"></i> <span>Data Pemilik</span></a></li>
						<li><a href="/Admin/dataUser2"><i class="lnr lnr-home"></i> <span>Data Pelanggan</span></a></li>
						@endif
						@if(auth()->user()->tipe=='1')
						<li><a href="/"><span>Pemilik Kost/Kontrakkan</span></a></li>
						<li><a href="/Pemilik/tambahData"><i class="lnr lnr-home"></i> <span>Tambah Kost/Kontrakan</span></a></li>
						<li><a href="/Pemilik/dataKost" class=""><i class="lnr lnr-user"></i> <span>Data Kost</span></a></li>
						<li><a href="/Pemilik/dataPesanan" class=""><i class="lnr lnr-pencil"></i> <span>Pemesanan</span></a></li>
						<li><a href="/Customer/uploadData" class=""><i class="lnr lnr-pencil"></i> <span>Upload Data</span></a></li>
						<li><a href="/Pemilik/dataTransaksi" class=""><i class="lnr lnr-user"></i> <span>Transaksi</span></a></li>
						@endif
						@if(auth()->user()->tipe=='2')
						<li><a href=""><span>Pelanggan</span></a></li>
						<li><a href="/Customer/daftarKosts"><i class="lnr lnr-home"></i> <span>Cari Kost</span></a></li>
						<li><a href="/Customer/daftarPesanan" class=""><i class="lnr lnr-user"></i> <span>Pemesanan</span></a></li>
						<li><a href="/Customer/uploadData" class=""><i class="lnr lnr-pencil"></i> <span>Upload Data</span></a></li>
						<li><a href="/Customer/dataTransaksi" class=""><i class="lnr lnr-pencil"></i> <span>Transaksi</span></a></li>
						@endif
						<li><a href="/" class=""><i class="lnr lnr-user"></i> <span>Halaman Utama</span></a></li>
						<li><a href="/" class=""><i class="lnr lnr-user"></i> <span>Log Out</span></a></li>
					</ul>
				</nav>
			</div>
		</div>