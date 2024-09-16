@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width:40%">
        <h5><div class="card-header">
            Tambah Buku Tamu
        </div></h5>
        <div class="card-body">
            <form action="{{route('admin-simpan-data')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama"  id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat"  id="alamat" aria-describedby="alamat">
                    </div>
               
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

    </div>
</div>
@endsection