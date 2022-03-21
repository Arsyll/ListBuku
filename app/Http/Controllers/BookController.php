<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Book::all();
        return view("buku.index", compact ('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Book;
        return view('buku.tambah', compact ('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Book;
        $model->judul = $request->judul;
        $model->author = $request->author;
        $model->synopsis = $request->synopsis;
        $model->penerbit = $request->penerbit;
        $model->save();

        return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Book::find($id);
        $books = Book::all();
        return view('buku.detail', compact ('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Book::find($id);
        return view('buku.edit', compact ('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Book::find($id);
        $model->judul = $request->judul;
        $model->author = $request->author;
        $model->synopsis = $request->synopsis;
        $model->penerbit = $request->penerbit;
        $model->save();

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Book::find($id);
        $model->delete();
        return redirect('buku');
    }
}
