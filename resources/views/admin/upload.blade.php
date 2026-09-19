<!DOCTYPE html>
<html>
<head>
    <title>Admin Upload Nail</title>
</head>
<body>

<h2>Upload Nail Art</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form action="/admin/upload" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Judul:</label><br>
    <input type="text" name="title"><br><br>

    <label>Harga:</label><br>
    <input type="text" name="price"><br><br>

    <label>Gambar:</label><br>
    <input type="file" name="image"><br><br>

    <button type="submit">Upload</button>


    
</form>
```html
<hr>

<h2>Daftar Nail Art</h2>

@php
    $nails = \App\Models\Nail::latest()->get();
@endphp

@foreach($nails as $nail)

    <div style="margin-bottom: 30px;">

        <h3>{{ $nail->title }}</h3>

        <p>Harga: Rp{{ number_format((float) $nail->price, 0, ',', '.') }}</p>

        @if($nail->image)
            <img src="{{ asset('storage/' . $nail->image) }}" width="150">
        @endif

        <br><br>

        <a href="/admin/nail/{{ $nail->id }}/edit">
            <button type="button">Edit</button>
        </a>

        <form action="/admin/nail/{{ $nail->id }}"
              method="POST"
              style="display:inline;"
              onsubmit="return confirm('Yakin ingin menghapus nail ini?')">

            @csrf
            @method('DELETE')

            <button type="submit">Hapus</button>

        </form>

    </div>

@endforeach
```

</body>
</html>
