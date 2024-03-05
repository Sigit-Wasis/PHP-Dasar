## Analisa Database SimpanPinjam

1. Tabel Nasabah
   Id Nasabah -> Primary key
   Nama
   Alamat
   Tanggal lahir
   Sex
   No Telepon
   E-mail
   Password

2. Tabel Karyawan
   Id Karyawan -> Primary Key
   Nama
   Alamat
   Tanggal Lahir
   Sex
   No Telepon
   E-mail
   Password

3. Tabel Admin
   Id Admin -> Primary Key
   Nama
   Alamat
   Tanggal Lahir
   Sex
   No Telepon
   E-mail
   Password

4. Tabel Transaksi
   Id Transaksi -> Primary Key
   Id Nasabah -> Foreign Key
   Id Karyawan -> Foreign Key
   Nominal Transaksi
   Tanggal Transaksi
   Jenis Transaksi
   Waktu Transaksi
   Keterangan

5. Tabel simpanan
   Id Simpanan -> Primary Key
   Id Nasabah -> Foreign Key
   Id Karyawan -> Foreign Key
   Nominal Simpanan
   Tanggal Simpanan
   Waktu Simpanan
   Keterangan

6. Tabel Pinjaman
   Id Pinjaman -> Primary Key
   Id Nasabah -> Foreign Key
   Id Karyawan -> Foreign Key
   Nominal Pinjaman
   Tanggal Pinjaman
   Waktu Pinjaman
   Keterangan

7. Tabel Riwayat Transaksi
   Id Riwayat Transaksi -> Primary Key
   Id Transaksi -> Foreign Key
   Keterangan
