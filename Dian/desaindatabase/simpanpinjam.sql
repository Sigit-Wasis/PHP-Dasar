CREATE TABLE Nasabah (
  Id_nasabah INT PRIMARY KEY AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Tanggal_Lahir DATE NOT NULL,
  Jenis_Kelamin VARCHAR(1) NOT NULL,
  NoTelepon VARCHAR(20) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Password VARCHAR(255) NOT NULL
);

CREATE TABLE Admin (
  Id_admin INT PRIMARY KEY AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Tanggal_Lahir DATE NOT NULL,
  Jenis_Kelamin VARCHAR(1) NOT NULL,
  NoTelepon VARCHAR(20) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Password VARCHAR(255) NOT NULL
);

CREATE TABLE Karyawan (
  Id_karyawan INT PRIMARY KEY AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Tanggal_Lahir DATE NOT NULL,
  Jenis_Kelamin VARCHAR(1) NOT NULL,
  NoTelepon VARCHAR(20) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Password VARCHAR(255) NOT NULL
);

CREATE TABLE Pinjaman (
  Id_pinjaman INT PRIMARY KEY AUTO_INCREMENT,
  Nominal_Pinjaman DECIMAL(18,2) NOT NULL,
  Tanggal_Pinjaman DATE NOT NULL,
  Waktu_Pinjaman TIME NOT NULL,
  Keterangan VARCHAR(255) NULL,
  Id_nasabah INT NOT NULL,
  Id_karyawan INT NOT NULL,
  FOREIGN KEY (Id_nasabah) REFERENCES Nasabah(Id_nasabah ),
  FOREIGN KEY (Id_karyawan) REFERENCES Karyawan(Id_karyawan)
);

CREATE TABLE Transaksi (
  Id_Transaksi INT PRIMARY KEY AUTO_INCREMENT,
  Nominal_Transaksi DECIMAL(18,2) NOT NULL,
  Tanggal_Transaksi DATE NOT NULL,
  Jenis_Transaksi VARCHAR(20) NOT NULL,
  Waktu_Transaksi TIME NOT NULL,
  Keterangan VARCHAR(255) NULL,
  Id_nasabah INT NOT NULL,
  Id_karyawan INT NOT NULL,
  FOREIGN KEY (Id_nasabah) REFERENCES Nasabah(Id_nasabah),
  FOREIGN KEY (Id_karyawan) REFERENCES Karyawan(Id_karyawan)
);

CREATE TABLE Simpanan (
  Id_simpanan INT PRIMARY KEY AUTO_INCREMENT,
  Nominal_Simpanan DECIMAL(18,2) NOT NULL,
  Tanggal_Simpanan DATE NOT NULL,
  Waktu_Simpanan TIME NOT NULL,
  Keterangan VARCHAR(255) NULL,
  Id_nasabah INT NOT NULL,
  Id_karyawan INT NOT NULL,
  FOREIGN KEY (Id_nasabah) REFERENCES Nasabah(Id_nasabah),
  FOREIGN KEY (Id_karyawan) REFERENCES Karyawan(Id_karyawan)
);

CREATE TABLE RiwayatTransaksi (
  Id_RiwayatTransaksi INT PRIMARY KEY AUTO_INCREMENT,
  Keterangan VARCHAR(255) NOT NULL,
  Id_Transaksi INT NOT NULL,
  Id_admin int not null,
  FOREIGN KEY (Id_Transaksi) REFERENCES Transaksi(IdTransaksi),
  FOREIGN KEY (Id_admin) REFERENCES Admin(Id_admin)
);