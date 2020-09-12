<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Album;
use App\Cover;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Recupero tutti gli album
      $albums = Album::all();
      // Ritorno la view con la variabile albums
      return view('album.home', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data_request = $request->all();

      // Creazione e salvataggio del nuovo album
      $new_album = New Album();
      // Compilo l'album nuovo con i dati sottomessi dal form
      $new_album->fill($data_request);

      // Salvo il nuovo album
      $saved = $new_album->save();

      if ($saved) {
        return redirect()->route('album.index');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
      // $album_song= $album->songs;
      // dd($album_song);
      // Ritorno la view con la variabile album
      return view('album.details', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {

      //
      $album->covers()->detach();
      //


      $album->delete();

      return redirect()->route('album.home');
    }
}
