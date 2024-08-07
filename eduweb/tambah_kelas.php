<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Kelas Eduweb</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Program Kelas</h1>
      <center>
      <form method="POST" action="proses_tambah_kelas.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Durasi Kursus</label>
          <input type="number" name="durasi_kursus" autofocus="" required="" />
        </div>
        <div>
          <label>Level Kursus</label>
          <input type="text" name="level_kursus" autofocus="" required="" />
        </div>
        <div>
          <label>Judul Kursus</label>
          <input type="text" name="judul_kursus" autofocus="" required="" />
        </div>
        <div>
          <label>Rating Kursus</label>
          <input type="number" name="rating_kursus" autofocus="" required="" />
        </div>
        <div>
          <label>Harga Kursus</label>
          <input type="number" name="harga_kursus" autofocus="" required="" />
        </div>
        <div>
          <label>Jumlah Pelajaran</label>
          <input type="number" name="jumlah_pelajaran" autofocus="" required="" />
        </div>
        <div>
          <label>Kuota Siswa</label>
          <input type="number" name="kuota_siswa" autofocus="" required="" />
        </div>
        <div>
          <label>Gambar Program Kursus</label>
         <input type="file" name="gambar_kursus" required="" />
        </div>
        <div>
         <button type="submit">Simpan Program Kelas</button>
        </div>
        </section>
      </form>
  </body>
</html>