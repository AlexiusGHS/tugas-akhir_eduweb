<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $durasi_kursus      = $_POST['durasi_kursus'];
  $level_kursus       = $_POST['level_kursus'];
  $judul_kursus       = $_POST['judul_kursus'];
  $rating_kursus      = $_POST['rating_kursus'];
  $harga_kursus       = $_POST['harga_kursus'];
  $jumlah_pelajaran   = $_POST['jumlah_pelajaran'];
  $kuota_siswa        = $_POST['kuota_siswa'];
  $gambar_kursus      = $_FILES['gambar_kursus']['name'];

//cek dulu jika ada gambar produk jalankan coding ini
if($gambar_kursus != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_kursus); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_kursus']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_kursus; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO kursus (durasi_kursus, level_kursus, judul_kursus, 
                  rating_kursus, harga_kursus, jumlah_pelajaran, kuota_siswa, gambar_kursus)
                  VALUES ('$durasi_kursus', '$level_kursus', '$judul_kursus', '$rating_kursus', '$harga_kursus', 
                  '$jumlah_pelajaran', '$kuota_siswa', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='tambah_kelas.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_kelas.php';</script>";
            }
} else {
   $query = "INSERT INTO kursus (durasi_kursus, level_kursus, judul_kursus, 
                  rating_kursus, harga_kursus, jumlah_pelajaran, kuota_siswa, gambar_kursus) VALUES ('$durasi_kursus', '$level_kursus', '$judul_kursus', '$rating_kursus', '$harga_kursus', 
                  '$jumlah_pelajaran', '$kuota_siswa', '$gambar_kursus')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='tambah_kelas.php';</script>";
                  }
}
