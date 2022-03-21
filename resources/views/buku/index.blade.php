@extends('layouts.main')

<a class="btn btn-info" href="{{ route('buku.create') }}">Tambah</a>
@section('container')
<table class="table-bordered table">
    <tr>
        <th>
            Judul
        </th>
        <th colspan="3">
            Aksi
        </th>
    </tr>
    @foreach ($datas as $key=>$value)
        <tr>
            <td>
                {{ $value->judul}}
            </td>
            <td>
                <a class="btn btn-info" href="{{ url('buku/' .$value->id. '/edit') }}">Update</a>
            </td>
            <td>
                <form action="{{route('buku.destroy',$value->id)}}" method="POST">
                @csrf
                @method('delete')
                
                <button class="btn btn-danger" type="submit">DELETE</button></form>
            </td>
            <td>
                <a class="btn btn-warning" href="{{ route('buku.show',$value->id)}}">Detail</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection