@extends('layout.master')
@section('content')
<div class="row">
    <div class="col">
<form action="create" methode="post">
    <table>
    <td>Judul Produk</td>
    <td>:</td>
    <input type="text" name="judul_produk" placeholder="Masukan Judul Produk">
    <td>Deskripsi Produk</td>
    <td>:</td>
    <input type="text" name="deskripsi" placeholder="Masukan Deskripsi">
    <td>Harga</td>
    <td>:</td>
    <input type="text" name="harga" placeholder="Masukan Harga">
    <button></button>
    </table>
</form>
</div>
</div>

@endsection