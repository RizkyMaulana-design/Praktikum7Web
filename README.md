# Praktikum 7 - PHP Dasar
**Nama:** Rizky Maulana  
**Kelas:** TI.24.A.3  
**NIM:** 312410412  
**Mata Kuliah:** Pemrograman Web  
**Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom  
**Universitas Pelita Bangsa**

---

## 🧩 Langkah-langkah Praktikum

### Memulai PHP

Membuat folder ```lab7_php_dasar``` pada root directory web server **(C:\xampp\htdocs)**

Kemudian akeses directory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

![WhatsApp Image 2025-11-11 at 23 04 30](https://github.com/user-attachments/assets/3eca0d02-caf6-4739-8bf1-53704e34dd6b)

### PHP Dasar

Buat file baru dengan nama **```php_dasar.php```** pada directory tersebut.

**Code:**

<img width="772" height="786" alt="vscode1" src="https://github.com/user-attachments/assets/cc82c46c-3b26-4882-88b6-bb4db548f0a1" />

**Outputnya:** 

![output vs code 1](https://github.com/user-attachments/assets/24ca8951-d678-4c90-ba35-f028a5613806)

### Variable PHP

Menambahkan variable pada program

**Code:**

<img width="818" height="558" alt="vscode2" src="https://github.com/user-attachments/assets/86946205-29ef-41f9-b244-c02b7d625c76" />

**Outputnya:**

![output vs code 2](https://github.com/user-attachments/assets/bec6401e-c94c-4845-a564-b53fb7a4a1dd)

### Predevine Variable ```$_GET```

**Code:**

<img width="958" height="444" alt="vscode3" src="https://github.com/user-attachments/assets/2e5cc6c1-b7ce-41ed-a686-b0f5549834d9" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 00 20 28](https://github.com/user-attachments/assets/4c152392-5696-4641-b2f6-4987cd542f81)

### Membuat Form Input

**Code:**

<img width="972" height="634" alt="vscode4" src="https://github.com/user-attachments/assets/d96dce31-28a5-46be-9ac8-1dc02e43cc5f" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 00 56 04](https://github.com/user-attachments/assets/2d6558f6-ca85-4d3d-b2e2-dcdd789fae66)

### Operator

**Code:**

<img width="1018" height="596" alt="vscode5" src="https://github.com/user-attachments/assets/172d3222-0bae-4a5f-aa31-9c2841d94aed" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 01 03 21](https://github.com/user-attachments/assets/2f0f0a4b-fad4-4d13-a8c7-3907a7d1e645)

### Kondisi IF

**Code:**

<img width="848" height="710" alt="vscode6" src="https://github.com/user-attachments/assets/ed432fcb-11a4-4b6a-8a46-350f01c7198a" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 01 08 14](https://github.com/user-attachments/assets/6f321ae1-8d44-41f7-8dcb-604af72732c4)

### Kondisi Switch

**Code:**

<img width="664" height="938" alt="vscode7" src="https://github.com/user-attachments/assets/712d8aa3-4a13-4eed-a62c-81586dc7c2c1" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 01 14 28](https://github.com/user-attachments/assets/6523a15c-e469-4b27-83f0-451e36c9ff30)

### perulangan for 

**Code:**

<img width="1018" height="710" alt="vscode8" src="https://github.com/user-attachments/assets/1b19a419-ef9c-4a83-9699-921c657207f7" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 01 20 43](https://github.com/user-attachments/assets/f8a8b112-8079-4ebb-a87f-655c19aa1402)


### perulangan while 

**Code:**

<img width="896" height="634" alt="vscode9" src="https://github.com/user-attachments/assets/ba53ba4a-bbaf-4fae-ba4f-7f7afa5cbaf7" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 01 22 53](https://github.com/user-attachments/assets/038fb096-2d95-4ecc-a473-9afc13e09ea6)


### perulangan dowhile

**Code:**

<img width="896" height="634" alt="vscode10" src="https://github.com/user-attachments/assets/8cdab49e-f3a3-4d50-8c8e-9a8dffb2d86f" />

**Outputnya:**

![WhatsApp Image 2025-11-12 at 01 25 09](https://github.com/user-attachments/assets/99a6f4b3-fd16-4bd7-8130-281f7c47d176)

# TUGAS
---

````markdown
# 💻 **Laporan Tugas Pemrograman Web Dasar**

## 🧾 **Form Input Data – Rizky Maulana**

---

## 👨‍🎓 **Identitas Mahasiswa**

| Keterangan               | Data                                                |
| ------------------------ | --------------------------------------------------- |
| **Nama**                 | Rizky Maulana                                       |
| **NIM**                  | 312410430                                           |
| **Kelas**                | TI.24.A.3                                           |
| **Mata Kuliah**          | Pemrograman Web Dasar                               |
| **Dosen Pengampu**       | -                                                   |
| **Nama File**            | `tugas.php`                                         |
| **Lokasi Folder**        | `C:\xampp\htdocs\lab7_php_dasar\`                   |
| **URL Akses di Browser** | `http://localhost/lab7_php_dasar/tugas.php`         |

---

## 📘 **Deskripsi Singkat**

Program ini dibuat menggunakan **HTML**, **CSS**, dan **PHP** untuk menampilkan form input data pengguna yang berisi:

* Nama  
* Tanggal Lahir  
* Pekerjaan  

Setelah pengguna mengisi dan mengirimkan data, program akan:

1. Menghitung **umur otomatis** dari tanggal lahir.  
2. Menentukan **gaji berdasarkan pekerjaan**.  
3. Menampilkan **hasil data langsung di halaman web**.

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
````

💬 **Penjelasan:**

* Mengatur tampilan dasar halaman web.
* `linear-gradient()` memberi efek warna biru gelap ke biru muda.
* `display: flex` dan `align-items: center` digunakan agar konten berada di tengah halaman.

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

* Form diberi efek transparan (`rgba`) dengan blur lembut.
* Tombol `Submit` memiliki efek hover agar lebih interaktif.

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

* Form berisi tiga input utama: **nama**, **tanggal lahir**, dan **pekerjaan**.
* `method="post"` digunakan agar data dikirim tanpa muncul di URL.
* Dropdown pekerjaan berisi empat pilihan utama.

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

* Mengecek apakah form sudah dikirim (`POST`).
* Data dari form disimpan ke variabel `$nama`, `$tgl`, dan `$pekerjaan`.
* Menggunakan `DateTime()` untuk menghitung **umur otomatis**.

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

* Struktur `switch-case` digunakan agar setiap pekerjaan memiliki gaji yang berbeda.
* Jika tidak ada kecocokan, nilai default `0` digunakan.

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

* Menampilkan hasil input dan perhitungan di halaman yang sama.
* Fungsi `number_format()` membuat tampilan gaji menjadi rapi (contoh: `Rp 7.000.000`).

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
$umur = $sekarang->diff($lahir)->y; // hasil: 20 tahun

$pekerjaan = "Programmer";
$gaji = 7000000;
```

### 📊 Output di Browser

```
Nama: Rizky Maulana
Tanggal Lahir: 2005-02-27
Umur: 20 tahun
Pekerjaan: Programmer
Gaji: Rp 7.000.000
```

---

## 💡 **Kesimpulan**

* Program berhasil menampilkan **data, umur, dan gaji otomatis** berdasarkan input.
* Menggunakan **HTML (struktur)**, **CSS (tampilan)**, dan **PHP (logika server)**.
* Dapat dijalankan langsung di **XAMPP menggunakan URL localhost**.

---

## 🧠 **Teknologi yang Digunakan**

* **HTML5** → Struktur halaman web
* **CSS3** → Desain modern dan responsif
* **PHP 7+** → Pemrosesan data dan logika server

---

## 🪪 **Lisensi**

Proyek ini bersifat **open-source** dan boleh digunakan untuk pembelajaran atau pengembangan pribadi.

---

##  **Hasil output nya :**

