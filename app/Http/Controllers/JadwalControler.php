<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\jadwal;

class JadwalControler extends Controller
{
    public function index(){
      return jadwal::all();
    }

    #Menyimpan Semua
    public function store(request $request){
      $jadwal = new jadwal;
      $jadwal ->theater_id = $request->theater_id;
      $jadwal ->ruangan_id = $request->ruangan_id;
      $jadwal ->movie_id = $request->movie_id;
      $jadwal ->start_date = $request->start_date;
      $jadwal ->end_date = $request->end_date;
      $jadwal->save();
      return "Data Berhasil Ditambahkan";
    }
    #Update
    public function update(request $request, $theater_id){
      $nama = $request->nama;

      $jadwal = jadwal::find($theater_id);
      $jadwal -> theater_id = $theater_id;
      $jadwal -> ruangan_id = $ruangan_id;
      $jadwal -> movie_id = $movie_id;
      $jadwal -> start_date = $start_date;
      $jadwal -> end_date = $end_date;
      $jadwal->save();

      return "Data Berhasil Di Update";
    }

    #Delete
    public function delete(request $request, $theater_id){
      $jadwal = jadwal::find($theater_id);
      $jadwal->delete();

      return "Data Berhasil Di Hapus";
    }
}
