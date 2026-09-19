
<!DOCTYPE html>
<html>
<head>
    <title>Edit Nail Art</title>
</head>
<body>

<h2>Edit Nail Art</h2>

<form action="/admin/nail/{{ $nail->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Judul:</label><br>
    <input type="text" name="title" value="{{ $nail->title }}"><br><br>

    <label>Harga:</label><br>
    <input type="text" name="price" value="{{ $nail->price }}"><br><br>

    <label>Gambar Saat Ini:</label><br>

    @if($nail->image)
        <img src="{{ asset('storage/' . $nail->image) }}" width="200"><br><br>
    @endif

    <label>Ganti Gambar:</label><br>
    <input type="file" name="image"><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>

<br>

<a href="/admin/upload">Kembali</a>

</body>
</html>

