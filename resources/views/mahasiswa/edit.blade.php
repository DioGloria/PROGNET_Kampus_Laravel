<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Edit Mahasiswa</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
  <div class="container">
    <h1>Edit Mahasiswa</h1>

    <form method="post" action="/mahasiswa/{{ $m['id'] }}" class="form-card">
      @csrf

      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" value="{{ $m['nim'] }}">
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="{{ $m['nama'] }}">
      </div>

      <div class="form-group">
        <label for="prodi">Prodi</label>
        <input type="text" id="prodi" name="prodi" value="{{ $m['prodi'] }}">
      </div>

      <div class="form-actions">
        <button type="submit" class="button">Update</button>
        <a href="/mahasiswa" class="button tambah-btn">Kembali</a>
      </div>
    </form>
  </div>
  <img src="{{ asset('images/Evernight.gif') }}" alt="Decoration" class="corner-gif">
</body>
</html>
