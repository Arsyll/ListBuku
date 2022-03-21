@extends('layouts.main')
@section('container')

    <table class="table-bordered table">
        <tr>
            <th>
                Judul Buku
            </th>
            <th>
                Author
            </th>
            <th>
                Penerbit
            </th>
            <th>
                Synopsis
            </th>
        </tr>
        <tr>
            <td>
                {{ $model->judul}}
            </td>
            <td>
                {{ $model->author}}
            </td>
            <td>
                {{ $model->penerbit}}
            </td>
            <td>
                {{ $model->synopsis}}
            </td>
        </tr>
    </table>

@endsection