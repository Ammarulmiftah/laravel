@extends('layout.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container" style="position: relative; left: 150px;">
    <div class="row">
        <div class="col-md-10">
            <table class="table">
          <thead>
            <tr>
                <a href="/tambah"  class="btn btn-primary" style=" margin-top:5px;" >Tambah Produk</a>
              <th>idProduk</th>
              <th>judul produk</th>
              <th>deskripsi produk</th>
              <th>harga</th>
              <th>gambar</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody class="table-secondary">
                    @foreach ($data as $index => $d)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $d->judulProduk }}</td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>{{ $d->harga }}</td>
                        <td><img src="{{ asset('foto/'.$d->gambar) }}" alt="" width="100px" height="100px"></td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <a href="/edit/{{$d->id}}" method="post" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-success mb-3">Edit</a>
        
                            <form action="/delete/{{$d->id}}" method="post">
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
</table>
        </div>
    </div>
</div>
    @if (session()->has('successDelete'))
    <script type="text/javascript">
        window.onload = function(){
            swal("Success","{{session ('successDelete') }}", "success");
        }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
@endif
@endsection