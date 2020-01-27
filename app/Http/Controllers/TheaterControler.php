<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Theater;

class TheaterControler extends Controller
{
    //Menampilkan
    public function index(){
      return theater::all();
    }

    #Menyimpan Semua
    public function store(request $request){
      $theater = new theater;
      $theater ->nama = $request->nama;
      $theater->save();
      return "Data Berhasil Ditambahkan";
    }
    #Update
    public function update(request $request, $id){
      $nama = $request->nama;

      $theater = theater::find($id);
      $theater -> nama = $nama;
      $theater->save();

      return "Data Berhasil Di Update";
    }

    #Delete
    public function delete(request $request, $id){
      $theater = theater::find($id);
      $theater->delete();

      return "Data Berhasil Di Hapus";
    }
}
