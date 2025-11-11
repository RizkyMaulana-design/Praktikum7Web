Siap banget 🔥
Berarti kamu mau README-nya **kayak laporan tugas kuliah yang lengkap dan rapi**, berisi:
✅ Identitas mahasiswa di atas,
✅ Penjelasan program per bagian,
✅ Codingan langsung disertai penjelasannya,
✅ Contoh hasil output,
✅ Tertata rapi seperti laporan resmi tapi tetap cocok buat GitHub.

Berikut versi **final dan lengkapnya** 👇

---

# 💻 **Laporan Tugas Pemrograman Web Dasar**

## 🧾 **Form Input Data – Rizky Maulana**

---

## 👨‍🎓 **Identitas Mahasiswa**

| Keterangan               | Data                                                |
| ------------------------ | --------------------------------------------------- |
| **Nama**                 | Rizky Maulana                                       |
| **NIM**                  | 312410430                                           |
| **Kelas**                | TI.24.A.4                                           |
| **Mata Kuliah**          | Pemrograman Web Dasar                               |
| **Dosen Pengampu**       | -                                                   |
| **Nama File**            | `latihan_dasar.php`                                 |
| **Lokasi Folder**        | `C:\xampp\htdocs\lab7_php_dasar\`                   |
| **URL Akses di Browser** | `http://localhost/lab7_php_dasar/latihan_dasar.php` |

---

## 📘 **Deskripsi Singkat**

Program ini dibuat menggunakan **HTML**, **CSS**, dan **PHP** untuk menampilkan form input data pengguna yang berisi:

* Nama
* Tanggal Lahir
* Pekerjaan

Setelah pengguna mengisi dan mengirimkan data, program akan:

1. Menghitung umur otomatis dari tanggal lahir.
2. Menentukan gaji berdasarkan pekerjaan.
3. Menampilkan hasil data secara langsung di halaman web.

Tampilan program menggunakan desain **modern (glassmorphism)** agar terlihat menarik dan profesional.

---

## 🧱 **Kode Program Lengkap dengan Penjelasan**

### 🔹 Bagian 1 – Struktur Dasar HTML dan Desain CSS

```html
<!DOCTYPE html>
<html>
<head>
    <title>File Rizky Maulana</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #141e30, #243b55);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 40px;
        }
```

💬 **Penjelasan:**

* `font-family: 'Poppins'` → Menggunakan font modern.
* `background: linear-gradient()` → Memberi efek gradasi biru gelap.
* `display: flex` → Menata elemen agar terpusat di layar.

---

```html
        form {
            background: rgba(255,255,255,0.08);
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            width: 320px;
            backdrop-filter: blur(6px);
        }

        input[type="submit"] {
            background-color: #00c6ff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            transition: all 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0094cc;
            transform: scale(1.03);
        }
    </style>
</head>
<body>
    <h2>Form Input Data</h2>
```

💬 **Penjelasan:**

* Form dibuat transparan dengan efek blur.
* Tombol `Submit` memiliki animasi hover dan warna biru cerah.

---

### 🔹 Bagian 2 – Form Input Data

```html
    <form method="post">
        Nama: <br>
        <input type="text" name="nama" required><br>

        Tanggal Lahir: <br>
        <input type="date" name="tgl" required><br>

        Pekerjaan: <br>
        <select name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Manager">Manager</option>
            <option value="Operator">Operator</option>
        </select><br>

        <input type="submit" value="Tampilkan">
    </form>
```

💬 **Penjelasan:**

* Menggunakan metode `POST` agar data dikirim secara tersembunyi.
* Field input:

  * `nama` untuk nama lengkap.
  * `tgl` untuk tanggal lahir.
  * `pekerjaan` sebagai dropdown.

---

### 🔹 Bagian 3 – Logika PHP untuk Pemrosesan Data

```php
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $tgl = $_POST['tgl'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $lahir = new DateTime($tgl);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($lahir)->y;
```

💬 **Penjelasan:**

* `$_SERVER["REQUEST_METHOD"] == "POST"` memastikan kode berjalan hanya saat form dikirim.
* `DateTime` digunakan untuk menghitung umur otomatis dari tanggal lahir.

---

### 🔹 Bagian 4 – Logika Penentuan Gaji

```php
        // Tentukan gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case "Programmer": $gaji = 7000000; break;
            case "Desainer":   $gaji = 5000000; break;
            case "Manager":    $gaji = 12000000; break;
            case "Operator":   $gaji = 4000000; break;
            default: $gaji = 0;
        }
```

💬 **Penjelasan:**

* Menggunakan `switch-case` agar setiap pekerjaan memiliki gaji tetap.

---

### 🔹 Bagian 5 – Menampilkan Hasil Output

```php
        echo '<div class="output">';
        echo "<h3>Hasil Output:</h3>";
        echo "Nama: <span>$nama</span><br>";
        echo "Tanggal Lahir: <span>$tgl</span><br>";
        echo "Umur: <span>$umur tahun</span><br>";
        echo "Pekerjaan: <span>$pekerjaan</span><br>";
        echo "Gaji: <span>Rp " . number_format($gaji, 0, ',', '.') . "</span>";
        echo '</div>';
    }
    ?>
</body>
</html>
```

💬 **Penjelasan:**

* Menampilkan hasil dalam kotak `div` dengan efek transparan.
* `number_format()` digunakan agar gaji tampil rapi (contoh: `Rp 7.000.000`).

---

## 💰 **Tabel Gaji Berdasarkan Pekerjaan**

| Pekerjaan  | Gaji (Rp)  |
| ---------- | ---------- |
| Programmer | 7.000.000  |
| Desainer   | 5.000.000  |
| Manager    | 12.000.000 |
| Operator   | 4.000.000  |

---

## 🧮 **Contoh Kasus**

### 📥 Input

| Kolom         | Isi              |
| :------------ | :--------------- |
| Nama          | Rizky Maulana    |
| Tanggal Lahir | 27 Februari 2005 |
| Pekerjaan     | Programmer       |

### ⚙️ Proses PHP

```php
$lahir = new DateTime("2005-02-27");
$sekarang = new DateTime();
$umur = $sekarang->diff($lahir)->y; // hasilnya 20 tahun (2025)

$pekerjaan = "Programmer";
$gaji = 7000000;
```

### 📊 Hasil Output di Browser

```
Nama: Rizky Maulana
Tanggal Lahir: 2005-02-27
Umur: 20 tahun
Pekerjaan: Programmer
Gaji: Rp 7.000.000
```

---

## 💡 **Kesimpulan**

* Program ini berhasil menampilkan data pengguna dengan **umur dan gaji otomatis**.
* Menggunakan kombinasi **HTML (struktur)**, **CSS (tampilan)**, dan **PHP (logika server)**.
* Hasilnya interaktif dan berjalan langsung di **localhost (XAMPP)**.

---

## 🧠 **Teknologi yang Digunakan**

* **HTML5** → Struktur halaman web
* **CSS3** → Tampilan dan efek modern
* **PHP 7+** → Pemrosesan data dan perhitungan

---

## 🪪 **Lisensi**

Proyek ini bersifat **open-source**, dapat digunakan untuk keperluan pembelajaran dan pengembangan pribadi.

---

Apakah kamu mau saya buatkan **file .md siap unduh** versi rapi ini (seperti di atas) biar bisa langsung kamu upload atau print untuk dikumpulkan?
