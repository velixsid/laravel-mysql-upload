<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPLOAD</title>
</head>
<body>
    @if(session('success'))
        <div style="color: green">{{session('success')}}</div>
    @endif

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="gambar" placeholder="upload">
        <button type="submit">submit</button>
    </form>

    <div style="padding: 10px">
        {{-- tampilkan semua gambar --}}
        @foreach ($images as $image)
            {{-- jika bingung gambar() darimana, coba buka model Gambar --}}
            <div>
                <img src="{{ $image->gambar() }}" style="height: 100px; padding: 3px" alt>
                <a href="{{ $image->gambar()  }}" target="_blank">Lihat</a>
                <a href="{{ route('hapus', $image->id)  }}">Hapus</a>
            </div>
        @endforeach
    </div>
</body>
</html>
