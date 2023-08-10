                  ---LOGIN---

-- membuat username dan password
select user, host, password from mysql.user;
CREATE USER 'ADM11'@'localhost' IDENTIFIED BY 'ADM123'
select user, host, password from mysql.user;

-- GRANT
 GRANT select, insert, update ON latihan.barang TO 'ADM11'@'localhost';

-- REVOKE
 REVOKE update ON latihan.barang FROM 'ADM11'@'localhost';

                  ---BARANG---

-- digunakan untuk menampilkan barang dengan harga lebih besar dari 3000
SELECT FROM * barang WHERE harga_barang>3000;

-- digunakan untuk menampilkan id barang dan harga barang pada from barang
SELECT id_barang,harga_barang FROM (barang);

-- digunakan untuj menaambahkan id barang, nama barang,harga barang dan stok
INSERT INTO barang VALUES ('134','Snack'.'1000','10');
INSERT INTO barang VALUES ('1010','Indomilk'.'4500','8');
INSERT INTO barang VALUES ('1122','Ultramilk'.'6000','9');
INSERT INTO barang VALUES ('1155','Tepung Terigu'.'3000','6');
INSERT INTO barang VALUES ('1890','Sabun'.'3500','10');

-- digunakan untuk mengubah nama barang dengan cara menambahkan id barang
UPDATE `barang` SET `nama_barang` = 'Fanta' WHERE `barang`.`id_barang` = 1890;

-- digunakan untuk menghapus tabel sabun pada from barang
DELETE FROM `barang` WHERE 'Sabun';

-- INNER JOIN
SELECT barang.kode_barang,pembeli.id_pembeli FROM PEMBELI INNER JOIN barang ON barang.stok = pembeli.no_telp;

-- LEFT JOIN
SELECT barang.stok,pembeli.nama_pembeli FROM PEMBELI LEFT JOIN barang ON barang.nama_barang = pembeli.nama_pembeli;

-- RIGHT JOIN
SELECT barang.nama_barang,pembeli.alamat FROM PEMBELI RIGHT JOIN barang ON barang.harga_barang= pembeli.id_pembeli;

                            ---PEMBELI---

-- digunakan untuk menampilkan semua from yang ada di pembeli
SELECT * FROM pembeli;

-- digunakan untuk menampikan from id_pembeli dan nama_pembeli
SELECT id_pembeli,nama_pembeli FROM (pembeli);

-- digunakan untuk menambah id pembei,nama pembeli, no telp dan alamat
INSERT INTO pembeli(id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('111','Naura','Bandulan','08769');
INSERT INTO pembeli(id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('222','Bella','Madyopuro','087651');
INSERT INTO pembeli(id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('3344','Dian Wigati','Sawojajar','08778899');
INSERT INTO pembeli(id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('8906','Chika Melisa','Lesanpuro','08810264');

-- digunakan untuk mengubah nama pembeli dengan cara menambahkan id pembeli
UPDATE pembeli SET nama_pembeli = 'Nana' WHERE pembeli.id_pembeli = '222';

-- digunakan untuk menghapus from pembeli yang ingin di hapus
DELETE FROM pembeli WHERE id_pembeli = '8906';

-- INNER JOIN
SELECT pembeli.id_pembeli,barang.nama_barang FROM barang INNER JOIN pembeli ON pembeli.nama_pembeli = barang.harga_barang;

-- LEFT JOIN
SELECT pembeli.nama_pembeli,barang.id_barang FROM barang LEFT JOIN pembeli ON pembeli.alamat = barang.stok;

-- RIGHT JOIN
SELECT pembeli.alamat,barang.id_barang FROM barang RIGHT JOIN pembeli ON pembeli.no_telp = barang.id_barang;