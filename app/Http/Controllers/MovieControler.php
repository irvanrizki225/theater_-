<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\movie;

class MovieControler extends Controller
{
    //Menampilkan
    public function index(){
      return movie::all();
    }

    #Menyimpan Semua
    public function store(request $request){
      $movie = new movie;
      $movie ->nama = $request->nama;
      $movie ->minutes = $request->minutes;
      $movie->save();
      return "Data Berhasil Ditambahkan";
    }
    #Update
    public function update(request $request, $id){
      $nama = $request->nama;

      $movie = movie::find($id);
      $movie -> nama = $nama;
      $movie -> minutes = $minutes;
      $movie->save();

      return "Data Berhasil Di Update";
    }

    #Delete
    public function delete(request $request, $id){
      $movie = movie::find($id);
      $movie->delete();

      return "Data Berhasil Di Hapus";
    }
}
