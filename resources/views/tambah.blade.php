@extends('layout.master')
@section('content')
<br>
<br>
<br>
<br>
<br>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <div class="container atas">
        <div class="card bg-body-tertiary" style="width: 18rem; margin-left: 480px;  ">
            <div class="card-body">
    <form action="/simpan" method="post" enctype="multipart/form-data">
    @csrf
        <td>judul produk</td>
        <div class="mb-3">
            <input type="text" name="judulProduk" style="width: 250px; border-radius: 5px;"><br>
        </div>
        <div class="mb-3">
            <td>deskripsi produk</td>
            <input type="text" name="deskripsi" style="width: 250px; border-radius: 5px;"><br>
        </div>
        <div class="mb-3">
            <td>harga produk</td>
            <input type="text" name="harga" style="width: 250px; border-radius: 5px;"><br>
        </div>
        <div class="mb-3">
            upload gambar
            <input type="file" name="gambar" style="width: 250px; border-radius: 5px;">
        </div>
        <div class="mb-3">
            <button type="submit" style="margin-left: 180px; border-radius: 5px;">simpan</button>
        </div>
    </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
@endsection