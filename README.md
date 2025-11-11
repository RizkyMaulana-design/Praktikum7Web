# 💻 Proyek Form Input Data – Rizky Maulana

## 📘 Deskripsi Proyek
Proyek ini merupakan aplikasi web sederhana berbasis **HTML**, **CSS**, dan **PHP** yang digunakan untuk menginput data pribadi, menghitung **umur otomatis**, serta menampilkan **gaji sesuai pekerjaan** yang dipilih.

Didesain dengan tampilan **modern bergaya glassmorphism**, proyek ini cocok digunakan sebagai contoh tugas mata kuliah **Pemrograman Web Dasar**.

---

## 🧩 Fitur Utama
- 📝 Form input data (Nama, Tanggal Lahir, dan Pekerjaan)
- 🧮 Perhitungan otomatis umur berdasarkan tanggal lahir
- 💰 Penentuan gaji berdasarkan jenis pekerjaan
- 🎨 Tampilan modern dengan efek transparan dan gradasi
- ⚡ Responsif dan ringan dijalankan

---

## ⚙️ Cara Menjalankan Program
1. Pastikan kamu sudah menginstal **XAMPP** atau **Laragon**.  
2. Simpan file `index.php` ke dalam folder berikut:
   ```
   C:\xampp\htdocs\form-rizky-maulana\
   ```
3. Jalankan **Apache** melalui XAMPP Control Panel.  
4. Buka browser dan ketik URL berikut:
   ```
   http://localhost/form-rizky-maulana/
   ```

---

## 📂 Struktur Folder
```
📁 form-rizky-maulana
│
├── index.php      # File utama berisi form dan logika PHP
├── README.md      # Dokumentasi proyek (file ini)
```

---

## 🧱 Penjelasan Kode

### 1️⃣ HTML – Struktur Form
Bagian ini membuat form untuk input:
- Nama
- Tanggal Lahir
- Pekerjaan (dropdown)

Form menggunakan metode `POST` agar data tidak tampil di URL.

### 2️⃣ CSS – Tampilan
Bagian CSS memberikan efek **modern dan transparan** dengan:
- Gradasi biru ke abu gelap
- Sudut membulat dan bayangan lembut
- Efek hover pada tombol kirim
- Font *Poppins* untuk tampilan profesional

### 3️⃣ PHP – Logika Program
Bagian PHP memproses data dari form:
- Mengecek apakah form dikirim (`if ($_SERVER["REQUEST_METHOD"] == "POST")`)
- Mengambil data menggunakan `$_POST`
- Menghitung umur menggunakan objek `DateTime`
- Menentukan gaji berdasarkan pekerjaan menggunakan `switch-case`
- Menampilkan hasil langsung di halaman

---

## 💰 Rincian Gaji Berdasarkan Pekerjaan

| Pekerjaan   | Gaji (Rp)   |
|--------------|-------------|
| Programmer   | 7.000.000   |
| Desainer     | 5.000.000   |
| Manager      | 12.000.000  |
| Operator     | 4.000.000   |

---

## 🧮 Contoh Kasus dan Hasil Output

### 📥 Input Data
| Kolom | Isi |
|:------|:----|
| Nama | Rizky Maulana |
| Tanggal Lahir | 27 Februari 2005 |
| Pekerjaan | Programmer |

### ⚙️ Proses PHP
```php
$nama = "Rizky Maulana";
$tgl = "2005-02-27";
$pekerjaan = "Programmer";

$lahir = new DateTime($tgl);
$sekarang = new DateTime();
$umur = $sekarang->diff($lahir)->y;

switch ($pekerjaan) {
    case "Programmer": $gaji = 7000000; break;
    case "Desainer":   $gaji = 5000000; break;
    case "Manager":    $gaji = 12000000; break;
    case "Operator":   $gaji = 4000000; break;
}
```

### 📊 Hasil Output (Tahun 2025)
```
Nama: Rizky Maulana
Tanggal Lahir: 2005-02-27
Umur: 20 tahun
Pekerjaan: Programmer
Gaji: Rp 7.000.000
```

### 💬 Penjelasan
- Umur dihitung berdasarkan selisih tahun antara **tanggal sekarang (2025)** dan **tanggal lahir (2005)**, hasilnya **20 tahun**.  
- Karena pekerjaan dipilih sebagai **Programmer**, maka gaji otomatis ditentukan sebesar **Rp 7.000.000**.

---

## 💡 Teknologi yang Digunakan
- **HTML5** → Struktur halaman web  
- **CSS3** → Desain dan tampilan modern  
- **PHP 7+** → Pemrosesan data dan logika server  

---

## 👨‍💻 Identitas Pembuat
**Nama:** Rizky Maulana  
**NIM:** 312410430  
**Kelas:** TI.24.A.4  
**Mata Kuliah:** Pemrograman Web  

---

## 🪪 Lisensi
Proyek ini bersifat **open-source**, bebas digunakan untuk keperluan pembelajaran, praktikum, atau pengembangan pribadi.
