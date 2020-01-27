<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\ruangan;

class RuanganControler extends Controller
{
    //Menampilkan
    public function index(){
      return ruangan::all();
    }

    #Menyimpan Semua
    public function store(request $request){
      $ruangan = new ruangan;
      $ruangan ->nama = $request->nama;
      $ruangan ->seat = $request->seat;
      $ruangan->save();
      return "Data Berhasil Ditambahkan";
    }
    #Update
    public function update(request $request, $id){
      $nama = $request->nama;

      $ruangan = ruangan::find($id);
      $ruangan -> nama = $nama;
      $ruangan -> seat = $seat;
      $ruangan->save();

      return "Data Berhasil Di Update";
    }

    #Delete
    public function delete(request $request, $id){
      $ruangan = ruangan::find($id);
      $ruangan->delete();

      return "Data Berhasil Di Hapus";
    }
}
