Buka aplikasi manajemen MySQL (XAMPP), lalu buka terminal (Command Prompt), lalu ketik 'mysql -u root'. Setelah itu, buat database baru atau pilih database yang sudah ada. 
Jika ingin membuat database baru, ketik 'create nama_database'; lalu ketik 'use nama_database', setelah itu jalankan queery sql membuat tabel berikut : 
CREATE TABLE IF NOT EXISTS FormData ( id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, umur INT NOT NULL, hobi VARCHAR(10) NOT NULL, jenis_kelamin VARCHAR(10) NOT NULL )
