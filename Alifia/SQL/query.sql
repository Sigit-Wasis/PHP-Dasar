-- Active: 1698343899136@@localhost@3306@data_karyawan
--Tampilkan semua data dari tabel Karyawan.--
select * from karyawan

--Tampilkan nama dan gaji karyawan yang berjabatan Programmer.
SELECT nama, gaji
FROM karyawan
WHERE jabatan = 'Programmer';

--Tampilkan nama karyawan yang memiliki gaji lebih dari Rp 8.000.000.
SELECT nama
FROM karyawan
WHERE gaji > 8000000;

--Hitung total gaji seluruh karyawan.
SELECT SUM(gaji) AS total_gaji
FROM karyawan;

--Temukan karyawan dengan gaji tertinggi.
SELECT nama, gaji
FROM karyawan
ORDER BY gaji DESC
LIMIT 1;

--Urutkan data karyawan berdasarkan nama (ascending).
SELECT * FROM karyawan
ORDER BY nama ASC;

--Tambahkan data karyawan baru bernama "Eko" dengan jabatan "Sales" dan gaji Rp 9.000.000.
INSERT INTO karyawan (nama, jabatan, gaji)
VALUES ('Eko', 'Sales', 9000000);

INSERT INTO karyawan (nama, jabatan, gaji)
VALUES ('Dedi2', 'Sales', 9000000);

--Hapus data karyawan dengan nama "Dedi"
DELETE FROM karyawan
WHERE nama = 'Dedi';

