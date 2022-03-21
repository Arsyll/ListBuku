@extends('layouts.main')
@section('container')
<form method="POST" action="{{url('buku')}}">
    @csrf
    Judul Buku <input type="text" name="judul">
    Author <input type="text" name="author">
    Synopsis <input type="text" name="synopsis">
    Penerbit <input type="text" name="penerbit">
    <button type="submit">SIMPAN</button>
</form>
@endsection