@extends('dashboard.layout.main')
@section('container')
<br/>
<style>
    .rata{

        justify-content: space-between;
    }
    .content{
        display: flex;
        justify-content: space-between;
    }
</style>
<center><h1>Data Kota</h1></center>
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
 {{session('pesan')}}
</div>

@endif
<a href="/kota-dashboard/create" class="btn btn-primary">Tambah Data</a>

<table class="table mt-3">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th  scope="col"></th>
        <th  scope="col"></th>
        <th  scope="col"></th>
        <th  scope="col"></th>
        <th  scope="col"></th>
        <th  scope="col"></th>
        <th  scope="col"></th>
        <th scope="col">Nama</th>
        <th scope="col"></th>
    </tr>
</thead>
    @foreach ($kotas as $kota)
    <tbody>
    <tr>
        <td scope="row">{{ $loop->iteration }}</td>
        <td scope="row"></td>
        <td scope="row"></td>
        <td scope="row"></td>
        <td scope="row"></td>
        <td scope="row"></td>
        <td scope="row"></td>
        <td scope="row"></td>
        <td>{{ $kota->nama }}</td>
        <td>
            <div class="d-flex justify-content-end">
            <div class="rata">
            <a href="/kota-dashboard/{{ $kota->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="/kota-dashboard/{{ $kota->id }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit" onclick="return confirm
                ('Yakin akan menghapus data ?')">Delete</button>
</form>      
</div>
</div>

        </td>
       </tr>
    @endforeach
</tbody>
</table>
{{ $kotas->links()}}
@endsection
