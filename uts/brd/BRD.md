# Business Requirements Document (BRD)  
**Nama Proyek**: Aplikasi Manajemen Stok Barang

## 1. Tujuan Proyek  
Mengembangkan aplikasi yang memungkinkan pengelolaan stok barang dengan dua role: **Admin** yang memiliki akses untuk mengelola data produk (nama, jumlah, harga), dan **Customer** yang hanya bisa melihat informasi stok barang tanpa bisa melakukan perubahan.

## 2. Latar Belakang  
Perusahaan membutuhkan sistem yang memudahkan pengelolaan dan pemantauan stok barang secara efektif, dengan memberikan akses berbeda untuk Admin dan Customer. Admin memiliki kendali penuh untuk mengelola data produk, sementara Customer hanya dapat melihat stok yang ada.

## 3. Ruang Lingkup    
- Fitur untuk Admin: Mengelola data produk (nama produk, jumlah, harga).  
- Fitur untuk Customer: Melihat daftar produk, nama produk, jumlah stok, dan harga.

## 4. Stakeholders  
**Pengguna**:  
- **Admin**: Bertanggung jawab untuk mengelola data produk, termasuk menambah, mengedit, dan menghapus produk.  
- **Customer**: Dapat melihat informasi produk seperti nama, jumlah stok, dan harga tanpa dapat mengubahnya.

## 5. Kebutuhan Bisnis  
- Mempermudah Admin dalam mengelola stok barang dengan antarmuka yang sederhana.  
- Memberikan Customer akses untuk melihat informasi produk secara mudah tanpa risiko perubahan data.

## 6. Persyaratan Fungsional  
- **F1**: Admin dapat menambah, mengedit, dan menghapus produk (termasuk nama produk, jumlah stok, dan harga).  
- **F2**: Admin dapat melihat daftar semua produk yang tersedia di sistem.  
- **F3**: Customer hanya dapat melihat daftar produk, termasuk nama, jumlah stok, dan harga, tanpa kemampuan untuk mengedit atau menghapus data.  
- **F4**: Aplikasi harus memberikan otentikasi untuk membedakan antara role Admin dan Customer (login dengan username dan password).

## 7. Kebutuhan Non-Fungsional  
- **Keamanan**: Aplikasi harus memastikan bahwa hanya Admin yang dapat mengakses fitur untuk mengedit atau menghapus data produk.  
- **Kinerja**: Aplikasi harus dapat menangani jumlah produk yang cukup besar tanpa penurunan performa yang signifikan.  
- **Kompatibilitas**: Aplikasi harus dapat berjalan di perangkat desktop dan mobile.

## 8. Analisis Use Case
**Admin**
- Login
- Menambahkan barang
- Mengedit barang
- Menghapus barang
- Melihat daftar barang
**Customer**
- Login
- Melihat daftar barang

## 9. Risiko & Tantangan  
- Potensi kesalahan dalam input atau pengeditan data produk oleh Admin.  
- Perlu memastikan aplikasi aman dari akses yang tidak sah, terutama untuk Admin.