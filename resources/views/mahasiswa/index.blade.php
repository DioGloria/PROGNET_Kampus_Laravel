<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
  <div class="container">
    <h1>Daftar Mahasiswa</h1>

    @if(session('success'))
      <p class="success">{{ session('success') }}</p>
    @endif

    <div class="top-bar">
      <a href="{{ route('mahasiswa.create') }}" class="button tambah-btn">+ Tambah Mahasiswa</a>
    </div>

    <table>
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th colspan="2">Aksi</th>
      </tr>
      @foreach($mahasiswa as $m)
        <tr>
          <td>{{ $m['id'] }}</td>
          <td>{{ $m['nim'] }}</td>
          <td>{{ $m['nama'] }}</td>
          <td>{{ $m['prodi'] }}</td>
          <td><a href="/mahasiswa/{{ $m['id'] }}/edit" class="button">Edit</a></td>
          <td>
            <form action="{{ route('mahasiswa.delete', $m['id']) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="button delete-btn" onclick="return confirm('Yakin ingin menghapus mahasiswa ini?')">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
  <img src="{{ asset('images/Evernight.gif') }}" alt="Decoration" class="corner-gif">
</body>
</html>
