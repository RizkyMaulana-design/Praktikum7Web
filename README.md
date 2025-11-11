Siap ✅ berikut ini versi **README.md lengkap** hasil gabungan antara penjelasan program sebelumnya + contoh kasus kamu (lahir 27 Februari 2005).
File ini bisa langsung kamu pakai untuk upload ke GitHub tanpa perlu edit apa pun 👇

---

# 💻 File Input Data – Rizky Maulana

Proyek ini merupakan aplikasi web sederhana berbasis **HTML**, **CSS**, dan **PHP** yang digunakan untuk **menginput data pribadi**, menghitung **umur otomatis**, serta menampilkan **gaji sesuai pekerjaan** yang dipilih.

---

## 🧩 Fitur Utama

✅ Form input data (Nama, Tanggal Lahir, dan Pekerjaan)
✅ Perhitungan otomatis umur berdasarkan tanggal lahir
✅ Penentuan gaji sesuai jenis pekerjaan
✅ Tampilan modern dengan efek **glassmorphism**
✅ Desain responsif dengan **gradasi warna elegan**

---

## 🧱 Struktur File

```
📁 proyek-rizky-maulana
│
├── index.php          # File utama berisi form input dan logika PHP
├── README.md          # Dokumentasi proyek
```

---

## ⚙️ Cara Menjalankan Program

1. Pastikan kamu sudah menginstal **XAMPP** atau **Laragon**.
2. Simpan file ini di folder:

   ```
   C:\xampp\htdocs\nama_foldermu\
   ```
3. Jalankan **Apache** di XAMPP Control Panel.
4. Buka browser dan akses:

   ```
   http://localhost/nama_foldermu/
   ```

---

## 🧠 Penjelasan Program

### 🔹 Bagian 1 – HTML

Membuat struktur form dengan input:

* **Nama**
* **Tanggal Lahir**
* **Pekerjaan** (dropdown)

Form dikirim menggunakan metode `POST`.

---

### 🎨 Bagian 2 – CSS

Membuat tampilan **modern dan transparan** menggunakan efek:

* **Gradasi biru gelap**
* **Transparansi dan blur (glassmorphism)**
* Efek **hover** pada tombol

---

### ⚙️ Bagian 3 – PHP

1. Mengecek apakah form dikirim (`if ($_SERVER["REQUEST_METHOD"] == "POST")`)
2. Mengambil data input dari `$_POST`
3. Menghitung **umur** berdasarkan `DateTime()`
4. Menentukan **gaji** sesuai pekerjaan dengan `switch-case`
5. Menampilkan hasil secara langsung di halaman

---

## 🧮 Rincian Gaji Berdasarkan Pekerjaan

| Pekerjaan  | Gaji (Rp)  |
| ---------- | ---------- |
| Programmer | 7.000.000  |
| Desainer   | 5.000.000  |
| Manager    | 12.000.000 |
| Operator   | 4.000.000  |

---

## 📊 Contoh Kasus dan Output

### 🧍‍♂️ **Input Contoh**

| Kolom         | Isi              |
| :------------ | :--------------- |
| Nama          | Rizky Maulana    |
| Tanggal Lahir | 27 Februari 2005 |
| Pekerjaan     | Programmer       |

---

### ⚙️ **Proses di PHP**

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

echo "Nama: $nama<br>";
echo "Tanggal Lahir: $tgl<br>";
echo "Umur: $umur tahun<br>";
echo "Pekerjaan: $pekerjaan<br>";
echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
```

---

### 📋 **Hasil Output (Tahun 2025)**

```
Nama: Rizky Maulana
Tanggal Lahir: 2005-02-27
Umur: 20 tahun
Pekerjaan: Programmer
Gaji: Rp 7.000.000
```

---

### 💡 Penjelasan Hasil

* Dari tanggal lahir **27 Februari 2005**, maka pada **November 2025**, umur = **20 tahun**.
* Karena pekerjaan **Programmer**, maka otomatis gaji ditentukan sebesar **Rp 7.000.000**.

---

## 💡 Teknologi yang Digunakan

* **HTML5** – Struktur halaman
* **CSS3** – Desain dan animasi
* **PHP 7+** – Pemrosesan data dan perhitungan

---

## 👨‍💻 Tentang Pembuat

**Nama:** Rizky Maulana
**NIM:** 312410430
**Kelas:** TI.24.A.4
**Mata Kuliah:** Pemrograman Web

---

## 🪪 Lisensi

Proyek ini bersifat **open-source**, bebas digunakan untuk keperluan belajar dan pengembangan pribadi.

---

Apakah kamu mau saya buatkan file `.md`-nya langsung (README lengkap versi ini) biar bisa kamu upload ke GitHub?
