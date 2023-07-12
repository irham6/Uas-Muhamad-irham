<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumum_model;

class JumumController extends Controller
{
    public function index(){
        $myjumum = new Jumum_model();
        $jumum = $myjumum->tampil_jumum();
        
        $data = array('jumum' => $jumum);
        return view('jumum/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('jumum/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('jumum')
         ->insert([
             'nomor_jurnal'  =>  $request->nomor_jurnal,
             'kode_jurnal'  =>  $request->kode_jurnal,
             'keterangan'  =>  $request->keterangan
             
         ]);
         return redirect('jumum');
     }
 
     public function edit($id){
         // return ('Testing');
         $jumum = \DB::table('jumum')->where('id', $id)->first();
         //dd($akun);
         $data = array('jumum' => $jumum);
         return view('jumum/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('jumum')->where('id',$request->id)
         ->update([
            'nomor_jurnal'  =>  $request->nomor_jurnal,
            'kode_jurnal'  =>  $request->kode_jurnal,
            'keterangan'  =>  $request->keterangan,
           
            
         ]);
         return redirect('jumum');
     }
 
     public function delete ($id){
         $query = \DB::table('jumum')->where('id',$id)->delete();
         return redirect('jumum');
     }
}
