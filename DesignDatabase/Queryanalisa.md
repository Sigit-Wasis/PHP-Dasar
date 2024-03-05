-- Active: 1709613084079@@127.0.0.1@3306
CREATE DATABASE simpanpinjam
DEFAULT CHARACTER SET = 'utf8mb4';

-- Memakai Database yang baru dibuat --
USE simpanpinjam

--Membuat table Nasabah --
CREATE TABLE Nasabah (
Id_Nasabah INT AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(255),
Alamat VARCHAR(255),
Tanggal_Lahir DATE,
Sex ENUM('L', 'P'),
No_Telepon VARCHAR(20),
Email VARCHAR(255),
Password VARCHAR(255)
);

--Membuat Table Karyawan --
CREATE TABLE Karyawan (
Id_Karyawan INT AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(255),
Alamat VARCHAR(255),
Tanggal_Lahir DATE,
Sex ENUM('L', 'P'),
No_Telepon VARCHAR(20),
Email VARCHAR(255),
Password VARCHAR(255)
);

-- Membuat Table ADMIN --
CREATE TABLE Admin (
Id_Admin INT AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(255),
Alamat VARCHAR(255),
Tanggal_Lahir DATE,
Sex ENUM('L', 'P'),
No_Telepon VARCHAR(20),
Email VARCHAR(255),
Password VARCHAR(255)
);

CREATE TABLE Transaksi (
Id_Transaksi INT AUTO_INCREMENT PRIMARY KEY,
Id_Nasabah INT,
Id_Karyawan INT,
Nominal_Transaksi DECIMAL(10, 2),
Tanggal_Transaksi DATE,
Jenis_Transaksi VARCHAR(50),
Waktu_Transaksi TIME,
Keterangan TEXT,
FOREIGN KEY (Id_Nasabah) REFERENCES Nasabah(Id_Nasabah),
FOREIGN KEY (Id_Karyawan) REFERENCES Karyawan(Id_Karyawan)
);

-- Membuat Table Simpanan --
CREATE TABLE Simpanan (
Id_Simpanan INT AUTO_INCREMENT PRIMARY KEY,
Id_Nasabah INT,
Id_Karyawan INT,
Nominal_Simpanan DECIMAL(10, 2),
Tanggal_Simpanan DATE,
Waktu_Simpanan TIME,
Keterangan TEXT,
FOREIGN KEY (Id_Nasabah) REFERENCES Nasabah(Id_Nasabah),
FOREIGN KEY (Id_Karyawan) REFERENCES Karyawan(Id_Karyawan)
);

-- Membuat Table Pinjaman --
CREATE TABLE Pinjaman (
Id_Pinjaman INT AUTO_INCREMENT PRIMARY KEY,
Id_Nasabah INT,
Id_Karyawan INT,
Nominal_Pinjaman DECIMAL(10, 2),
Tanggal_Pinjaman DATE,
Waktu_Pinjaman TIME,
Keterangan TEXT,
FOREIGN KEY (Id_Nasabah) REFERENCES Nasabah(Id_Nasabah),
FOREIGN KEY (Id_Karyawan) REFERENCES Karyawan(Id_Karyawan)
);

-- Membuat Table Riwayat Transaksi --
CREATE TABLE Riwayat_Transaksi (
Id_Riwayat_Transaksi INT AUTO_INCREMENT PRIMARY KEY,
Id_Transaksi INT,
Keterangan TEXT,
FOREIGN KEY (Id_Transaksi) REFERENCES Transaksi(Id_Transaksi)
);
