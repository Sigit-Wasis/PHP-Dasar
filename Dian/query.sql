-- Active: 1693885017651@@127.0.0.1@3306@latihansql
-- SQL
-- Tampilkan semua data dari tabel Karyawan
SELECT * FROM table_karyawan;

-- Tampilkan nama dan gaji karyawan yang berjabatan Programmer.
SELECT nama , gaji FROM table_karyawan WHERE jabatan = "programmer";

--Tampilkan nama karyawan yang memiliki gaji lebih dari Rp 8.000.000.
SELECT nama FROM table_karyawan WHERE gaji > 8000000;

--Hitung total gaji seluruh karyawan.
SELECT SUM (gaji) AS Total_gaji FROM table_karyawan;

--Temukan karyawan dengan gaji tertinggi.
SELECT MAX(gaji) FROM table_karyawan;

--Urutkan data karyawan berdasarkan nama (ascending)
SELECT * FROM table_karyawan ORDER BY nama ASC;

--Tambahkan data karyawan baru bernama "Eko" dengan jabatan "Sales" dan gaji Rp 9.000.000
insert into table_karyawan(id, nama, jabatan, gaji) VALUES ("" , "eko", "sales", "9000000")

--Hapus data karyawan dengan nama "Dedi"
DELETE from table_karyawan WHERE nama = 'dedi';