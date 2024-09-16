@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width:40%">
        <h5><div class="card-header">
            Edit Buku Tamu
        </div></h5>
        <div class="card-body">
            <form action="{{url('admin/update-data')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama"  id="nama" aria-describedby="nama" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat"  id="alamat" aria-describedby="alamat" value="{{$data->alamat}}">
                    </div>
                    <input type="hidden" value="{{$data->id}}" name="id">
               
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

    </div>
</div>
@endsection