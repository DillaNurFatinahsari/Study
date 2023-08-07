-- nama database mysql
CREATE DATABASE latihan;

-- membuat user dan password 
 CREATE USER 'dila'@'localhost' IDENTIFIED BY '123';

 -- GRANT
  GRANT ALL PRIVILEGES ON *.* TO 'dila'@'localhost';

 -- REVOKE
 REVOKE ALL PRIVILEGES ON *.* FROM 'dila'@'localhost';

-- digunakan untuk menampilkan barang dengan harga lebih besar dari 3000
SELECT * FROM barang WHERE harga_barang>3000;

-- digunakan untuk menampilkan kode barang dan harga barang pada from barang
SELECT kode_barang,harga_barang FROM (barang);

    -- digunakan untuk menambahkan kode barang,stok barang, dan alamat
    INSERT INTO barang VALUES ('BRG123', 'Ultramilk','7','6000');
    INSERT INTO barang VALUES ('BRG124', 'Tepung Terigu','9','3000');
    INSERT INTO barang VALUES ('BRG125', 'Snack','15','500');
    INSERT INTO barang VALUES ('BRG126', 'Sabun','8','3500');
    INSERT INTO barang VALUES ('BRG127', 'Sampo','20','1000');
     INSERT INTO barang VALUES ('BRG128', 'Indomilk','11','4500');

    -- digunakan untuk mengubah nama barang dengan cara menambhakan kode barang
     UPDATE 'barang' SET 'nama barang' = 'Teh Botol'  WHERE 'barang','kode barang' = 'BRG123';

    -- digunakan untuk menghapusbtabel teh botol pada from barang
     DELETE FROM 'barang' WHERE 'Teh Botol';

    -- INNER JOIN
     SELECT barang.kode_barang,pembeli.id_pembeli FROM pembeli INNER JOIN barang ON barang.stok_barang = pembeli.no_telp;

    -- LEFT JOIN
     SELECT barang.stok_barang,pembeli.no_telp FROM pembeli LEFT JOIN barang ON barang.nama_barang = pembeli.nama_pembeli;
  
    -- RIGHT JOIN
     SELECT barang.nama_barang,pembeli.nama_pembeli FROM pembeli RIGHT JOIN barang ON barang.harga_barang = pembeli.alamat;

SELECT * FROM pembeli;


    -- digunakan untuk menampilkan id_pembeli dan nama_pembeli
SELECT id_pembeli,nama_pembeli FROM (pembeli);

    -- digunakan untuk menampilkan id_pembeli,nama_pembeli,no_telp dan alamat
    INSERT INTO pembeli (id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('122', 'Naura','0817755','Bandulan');
    INSERT INTO pembeli (id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('1356', 'Dian Wigati','087766','Sawojajar');
    INSERT INTO pembeli (id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('1768', 'Diana','081026','Bumiayu');
    INSERT INTO pembeli  (id_pembeli,nama_pembeli,no_telp,alamat)VALUES ('455', 'Chika Melisa','0812233','Lesanpuro');
    INSERT INTO pembeli (id_pembeli,nama_pembeli,no_telp,alamat) VALUES ('98079', 'Bella','087651','Madyopuro');
    
    -- digunakan untuk mengubah nama_pembeli dengan cara menambahkan id_pembeli
     UPDATE pembeli SET nama_pembeli = 'Dinda'  WHERE pembeli.id_pembeli = 'BRG123';

    -- digunakan untuk menghapus from pembeli yang ingin dihapus
     DELETE FROM pembeli WHERE alamat = 'Bandulan';

    -- INNER JOIN
     SELECT pembeli.id_pembeli,barang.nama_barang FROM barang INNER JOIN pembeli ON pembeli.nama_pembeli = barang.harga_barang;

    -- LEFT JOIN
      SELECT pembeli.no_telp,barang.stok_barang FROM barang LEFT JOIN pembeli ON pembeli.id_pembeli = barang.kode_barang;

    -- RIGHT JOIN
       SELECT pembeli.nama_pembeli,barang.stok_barang FROM barang RIGHT JOIN pembeli ON pembeli.alamat = barang.nama_barang;


    