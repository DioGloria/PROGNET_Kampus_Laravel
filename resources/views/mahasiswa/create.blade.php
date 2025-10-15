<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tambah Mahasiswa</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
  <div class="container">
    <h1>Tambah Mahasiswa</h1>

    <form method="post" action="/mahasiswa" class="form-card">
      @csrf

      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" placeholder="Masukkan NIM">
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
      </div>

      <div class="form-group">
        <label for="prodi">Prodi</label>
        <input type="text" id="prodi" name="prodi" placeholder="Masukkan Program Studi">
      </div>

      <div class="form-actions">
        <button type="submit" class="button">Simpan</button>
        <a href="/mahasiswa" class="button tambah-btn">Kembali</a>
      </div>
    </form>
  </div>
  <img src="{{ asset('images/Evernight.gif') }}" alt="Decoration" class="corner-gif">
</body>
</html>
