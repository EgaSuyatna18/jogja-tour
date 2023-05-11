<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.artikel.index', [
            'title' => 'Artikel',
            'artikels' => Artikel::where('user_id', auth()->user()->id)->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.artikel.create', ['title' => 'Tambah Artikel']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:5120|dimensions:max_width=1920,max_height=1440',
            'title' => 'required',
            'body' => 'required'
        ]);

        $validated['photo'] = $request->file('photo')->store('article-photo');
        $validated['user_id'] = auth()->user()->id;

        Artikel::create($validated);

        return redirect('/artikel')->with('notify', 'Berhasil Menambah Artikel.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        $artikel->with('user.rating');
        return view('landing_page.artikel_show', [
            'title' => $artikel->title,
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        $artikel->with('user');
        return view('dashboard.artikel.edit', [
            'title' => 'Tambah Artikel',
            'artikel' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required'
        ];

        if($request->file('photo')) {
            $rules['photo'] = 'required|image|mimes:jpeg,png,jpg|max:5120|dimensions:max_width=1920,max_height=1440';
        }

        $validated = $request->validate($rules);

        if($request->file('photo')) {
            Storage::delete($artikel->photo);
            $validated['photo'] = $request->file('photo')->store('article-photo');
        }

        $artikel->update($validated);

        return redirect('/artikel')->with('notify', 'Berhasil Mengubah Artikel.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        Storage::delete($artikel->photo);
        $artikel->delete();

        return redirect('/artikel')->with('notify', 'Berhasil Menghapus Artikel.');
    }

    function homeArtikel() {
        return view('landing_page.artikel', [
            'title' => 'Artikel',
            'artikels' => Artikel::paginate(8)
        ]);
    }
}