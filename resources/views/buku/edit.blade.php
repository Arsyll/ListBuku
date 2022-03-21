@extends('layouts.main')
@section('container')
<form method="POST" action="{{url('buku/'.$model->id)}}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    Judul Buku <input type="text" name="judul" value="{{ $model->judul}}">
    Author <input type="text" name="author" value="{{ $model->author}}">
    Synopsis <input type="text" name="synopsis" value="{{ $model->synopsis}}">
    Penerbit <input type="text" name="penerbit" value="{{ $model->penerbit}}">
    <button type="submit">SIMPAN</button>
</form>
@endsection