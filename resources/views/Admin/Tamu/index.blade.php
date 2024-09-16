@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <h5><class="card-header">
            Data Buku Tamu <a href="{{route('admin-form-tambah')}}" class="btn btn-success">Tambah Data</a></h5>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" style="width:15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                <tr>
                    <th scope="row">{{$key+ 1}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->alamat}}</td>

                    <td>
                        <div class="row">
                            <div class="col-2">
                                <a href="{{route('admin-form-edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col-2">
                                <form action="{{route('admin-hapus-data')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

@section('script')
<script>
    let table = new DataTable('#myTable');
</script>
@endsection