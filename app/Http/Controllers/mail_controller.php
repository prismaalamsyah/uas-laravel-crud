<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class mail_controller extends Controller
{
//    public function getAll(){
//        $data = mahasiswa::all();
//        return view('index',[
//            'data' => $data,
//            "title" => "Home"
//        ]);
//    }
     public function getAll(){
         return mahasiswa::all();
     }

     public function save(Request $req){
        $data = new mahasiswa;
        $data->merek_laptop = $req->input('merek_laptop');
        $data->seri_laptop = $req->input('seri_laptop');
        $data->tahun = $req->input('tahun');
        $data->save();
        return "Ok";

     }

     public function update($id){
         return mahasiswa::where('id',$id)->first();
     }
     public function updated(Request $req){
        $data = mahasiswa::where('id',$req->id)->first();
        $data->merek_laptop = $req->input('merek_laptop');
        $data->seri_laptop = $req->input('seri_laptop');
        $data->tahun = $req->input('tahun');
        $data->save();
        return "Ok";
     }

     public function delete($id){
         $data = mahasiswa::where('id',$id)->first();
         $data->delete();
         return "Ok";
     }




}
