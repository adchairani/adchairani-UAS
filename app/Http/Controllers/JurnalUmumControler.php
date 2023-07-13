<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnalumum_model;

class JurnalUmumControler extends Controller
{
    //
    public function index(){
        $myjurnalumum = new Jurnalumum_model();
        $jurnalumum = $myjurnalumum->tampil_Jurnalumum();
        
        $data = array('jurnalumum' => $jurnalumum);
        return view('jurnalumum/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('jurnalumum/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('jurnal_umum_adchairani')
         ->insert([
             'nomor_jurnal'  =>  $request->nomor_jurnal,
             'kode_jurnal'  =>  $request->kode_jurnal,
             'keterangan'  =>  $request->keterangan,
         ]);
         return redirect('jurnalumum');
     }
 
     public function edit($id){
         // return ('Testing');
         $jurnalumum = \DB::table('jurnal_umum_adchairani')->where('id', $id)->first();
         //dd($akun);
         $data = array('jurnalumum' => $jurnalumum);
         return view('jurnalumum/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('jurnal_umum_adchairani')->where('id',$request->id)
         ->update([
            'nomor_jurnal'  =>  $request->nomor_jurnal,
            'kode_jurnal'  =>  $request->kode_jurnal,
            'keterangan'  =>  $request->keterangan,
         ]);
         return redirect('jurnalumum');
     }
 
     public function delete ($id){
         $query = \DB::table('jurnal_umum_adchairani')->where('id',$id)->delete();
         return redirect('jurnalumum');
     }
 }
 

