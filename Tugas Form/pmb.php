<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>PMB UPJ</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>        
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
              
          </div>
      </nav>
      <div class="row">
      <div class="col-sm-4">
      <img src="logo-11.png" width="150" height="150"  style="margin-left: 30%">    
    </div>
    <div class="row">
      <div class="col-sm-4">
      <img src="bg-upj.png" width="980" height="250"  style="margin-left: 30%">    
</div>

      <div class="container">
      <h2> Pendaftaran Online</h2>
      <form method="post" action="konfirmasipmb.php">
          <div class="row">
              <div class="col-sm-12"> 
                  <p>Jalur Penerimaan Mahasiswa Baru
                  <p><select name="jalur">
                    <option value="Jalur Reguler">Jalur Reguler</option>
                    <option value="Jalur Bidik Misi(Kuota Telah Penuh)">Jalur Bidik Misi (Kuota Telah Penuh)</option>
                    <option value="Jalur Beasiswa Peringkat Rapot">Jalur Beasiswa Peringkat Rapot</option>
                    <option value="Jalur Beasiswa Ujian Saringan Masuk (USM)">Jalur Beasiswa Ujian Saringan Masuk (USM)</option>
                    <option value="Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah)">Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah)</option>
                    <option value="Jalur Beasiswa Lulusan Terbaik Sekolah">Jalur Beasiswa Lulusan Terbaik Sekolah</option>
                    <option value="Jalur Beasiswa Akademik dan Non Akademik">Jalur Beasiswa Akademik dan non Akademik</option>
                  </select>
                    </p>
                  </p>
              </div>
              <div class="p-3 col-sm-6">
              <p>Nama Calon Mahasiswa</p>
                    <input type="text" name="nama"><br>
              </div>
              <div class="p-1 col-sm-4">
              <p>Tempat Tanggal Lahir</p>
                  <input type="text" name="tanggal"><br>
              </div>
              <div class="p-3 col-sm-4">
              <p>Jenis Kelamin</p>
                  <p><select name="gender">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-4">
              <p>Agama</p>
                    <p><select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-4">
              <p>Status</p>
                  <p><select name="status">
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-12">
                  <p>Alamat</p>
                  <input type="text" name="alamat"><br>
              </div>
              <div class="p-3 col-sm-4 ">
              <p>Kode Pos </p>
                  <p><input type="text" name="kodepos"></p>
              </div>
              <div class="p-3 col-sm-4">
              <p>No. Handphone</p>
                  <p><input type="text" name="nomor"></p>
              </div>
              <div class="p-3 col-sm-2 ">
              <p>Email</p>
                  <p><input type="text" name="email"></p>
              </div>
              <div class="pb-1 col-sm-12">
              <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
              </div>
              <div class="p3 col-sm-12">
                  <p>Asal Sekolah</p>
                  <input type="text" name="asal"><br>
              </div>
              <div class="p-3 col-sm-8">
                  <p>Tahun Lulus</p>
                  <input type="text" name="lulus"><br>
              </div>
              <div class="p-3 col-sm-8">
              <h2><p>DATA ORANG TUA CALON MAHASISWA</h2></p>
              </div>
              <div class="p-3 col-sm-6">
                  <p>Nama Ayah</p>
                  <input type="text" name="namaayah"><br>
              </div>
              <div class="p-3 col-sm-6">
                  <p>Nama Ibu</p>
                  <input type="text" name="namaibu"><br>
              </div>
              <div class="p-3 col-sm-12">
                  <p>Alamat</p>
                  <input type="text" name="alamat2"><br>
              </div>
              <div class="p-3 col-sm-6">
              <p>Kode Pos</p>
                  <p><input type="text" name="kodepos2"></p>
              </div>
              <div class="p-3 col-sm-6">
              <p>No. Handphone</p>
                  <p><input type="text" name="nomor2"></p>
              </div>
              <div class="p-3 col-sm-6">
              <p>Pendidkan Terakhir Ayah</p>
                  <p><select name="pendidikanayah">
                    <option value="Tidak Tamat SD">A - Tidak Tamat SD</option>
                    <option value="SD">B - Tamat SD</option>
                    <option value="SMP">C - Tamat SMP</option>
                    <option value="SMA">D - Tamat SMA</option>
                    <option value="Diploma (D1-D2)">E - Diploma (D1/D2)</option>
                    <option value="Sarjana (D3)">F - Sarjana (D3)</option>
                    <option value="Sarjana (S1)">G - Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">H - PascaSarjana (S2)</option>
                    <option value="Doctor (S3)">I - Doctor (S3)</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-6">
              <p>Pendidkan Terakhir Ibu</p>
                  <p><select name="pendidikanibu">
                    <option value="Tidak Tamat SD">A - Tidak Tamat SD</option>
                    <option value="SD">B - Tamat SD</option>
                    <option value="SMP">C - Tamat SMP</option>
                    <option value="SMA">D - Tamat SMA</option>
                    <option value="Diploma (D1-D2)">E - Diploma (D1/D2)</option>
                    <option value="Sarjana (D3)">F - Sarjana (D3)</option>
                    <option value="Sarjana (S1)">G - Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">H - PascaSarjana (S2)</option>
                    <option value="Doctor (S3)">I - Doctor (S3)</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-6">
              <p>Status Ayah</p>
                  <p><select name="statusayah" >
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-6">
              <p>Status Ibu</p>
                  <p><select name="statusibu">
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-6">
                  <p>Pekerjaan Ayah</p>
                  <input type="text" name="pekerjaanayah"><br>
              </div>
              <div class="col-sm-6">
                  <p>Pekerjaan Ibu</p>
                  <input type="text" name="pekerjaanibu"><br>
              </div>
              <h2>PEMINATAN PROGRAM STUDI</h2>
              <div class="p-3 col-sm-4">
                  <p></p>
              </div>
              <div class="p-3 col-sm-6">
              <p>Pilihan Program Studi 1</p>
                  <p><select name="programstudi1">
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-6">
              <p>Pilihan Program Studi 2</p>
                  <p><select name="programstudi2">
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                    </select>
                    </p>
              </div>
              <div class="p-3 col-sm-12">
              <p>Ujian Saringan Masuk</p>
                  <p><select name="ujianmasuk">
                    <option value="Gelombang 1">Gelombang 1</option>
                    <option value="Gelombang 2">Gelombang 2</option>
                    <option value="Gelombang 3">Gelombang 4</option>
                    <option value="Gelombang 4">Gelombang 4</option>
                    </select>
                    </p>
              </div>
              <input type="submit" value="Submit" name="tombol" style="margin-left: 35%" >
        </form>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>