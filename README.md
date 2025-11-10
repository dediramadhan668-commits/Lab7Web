# Lab7Web
# Nama: Dedi Ramadhan
# Nim: 312410171
# Kelas: TI.24.A.1


**Praktikum 7: PHP Dasar**

## Tujuan
1. Memahami konsep dasar *Server Side Scripting*.
2. Mengenal dasar pemrograman PHP.
3. Memahami variabel, tipe data, struktur kondisi, dan perulangan.
4. Membuat program PHP sederhana menggunakan form input.

---

## 1. PHP Dasar
File: `php_dasar.php`  
Menampilkan teks “Hello World” sebagai uji awal PHP berjalan dengan benar.

<img width="144" height="153" alt="image" src="https://github.com/user-attachments/assets/88838d01-76aa-4c5b-884e-69bdb475b9f6" />


---

## 2. Form Input
File: `latihan2.php`  
Membuat form input sederhana untuk menerima data dari pengguna melalui metode POST.

### Tampilan Form
<img width="300" height="173" alt="image" src="https://github.com/user-attachments/assets/42f2cac7-dd50-481d-924d-355f6b9a7fb6" />

---

## 3. Program Tugas Akhir
File: `tugas_praktikum7.php`  
Program ini menampilkan data diri berdasarkan input pengguna.  
Data yang ditampilkan: nama, tanggal lahir, umur (hasil perhitungan otomatis), pekerjaan, dan gaji sesuai pilihan.

<img width="524" height="348" alt="image" src="https://github.com/user-attachments/assets/e8e6bd66-d0d0-4c5a-82c6-52fb53d04889" />

---

## Penjelasan Program
- Input data dikirim menggunakan metode **POST**.
- Umur dihitung otomatis dengan fungsi `DateTime()` dan `diff()`.
- Gaji ditentukan berdasarkan pilihan pekerjaan menggunakan `switch case`.
- Output ditampilkan dalam format teks rapi dengan fungsi `echo`.

---

## Struktur Folder
lab7_php_dasar/
├── php_dasar.php
├── latihan2.php
└── tugas_praktikum7.php



---

## Kesimpulan
Melalui praktikum ini, dipelajari bagaimana PHP digunakan untuk membuat halaman dinamis, mengelola input dari pengguna, serta memproses logika sederhana seperti perhitungan dan kondisi.
