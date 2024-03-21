<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\KategoriBukuRelasi;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dash(){
        
        return view("Admin.DashAdmin");
    }
    //logout
    public function logout(){
        session()->flush();
        return redirect('logina');
    }
    //end logout
    public function login(){
        return view("Admin.LoginA");
    }
    public function cekloginA(Request $request){
        $cek = new Admin();
        $cek = $cek->where('Username', $request->input('Username'))->where('Password', $request->input('Password'));
        if ($cek->exists()) {
            session([
                'admin'=> $cek->first()
            ]);
            return redirect('dashboard');
            // (return response()->json(session('datapetugas')->id_petugas))
        }
    }  
    //data tabel buku
    public function databukua(){
        $ambil = new Buku();
        return view ('Admin.Databuku',['bukus'=>$ambil->paginate(6)]);
    }
    //end data buku
    // tambah buku
    public function tambahbukua(){
        return view("Admin.Addbuku");
    }
    public function tambahinbukua(Request $request){
        $c = new Buku();
        // $cek = $request->validate([
        //     'Judul' => 'required'
        // ]);
        $c->create($request->all());
       
    
        return redirect('databuku')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambahbuku
    //update data buku
    public function editbuku($id){
        $buku = new Buku();
        return view('Admin.Editbuku',['editbuku'=>$buku->find($id)]);
    }
    public function editbukua(Request $request,$id){
        $validasi = $request->validate([
            'Judul' => 'required'
            
        ]);
        
        $buku = new Buku();
        $buku = $buku->find($id)->update($request->all());;
       
        return redirect('databuku')->with('pesan','Update Data Berhasil');;
    }
    //end update data
    //hapus data buku
    public function hapusbuku($BukuID){
        $buku = new Buku();
        $buku = $buku->find($BukuID);
        $buku->delete();
        return back();
    }
    //end hapus data






    public function datakategoria(){
        $ambil = new KategoriBuku();
        return view ('Admin.Datakategoribuku',['kate'=>$ambil->paginate(6)]);
    }
    //end data kategori
    // tambah kategori
    public function tambahkategoria(){
        return view("Admin.Addkategori");
    }
    public function tambahinkategoria(Request $request){
        $c = new KategoriBuku();
        $cek = $request->validate([
            'NamaKategori' => 'required'
        ]);
        $c->create($request->all());
       
    
        return redirect('datakategori')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambahkategori
    //update data kategori
    public function editkategori($id){
        $kategori = new KategoriBuku();
        return view('Admin.Editkategori',['editkategori'=>$kategori->find($id)]);
    }
    public function editkategoria(Request $request,$id){
        $validasi = $request->validate([
            'NamaKategori' => 'required'
            
        ]);
        
        $kategori = new KategoriBuku();
        $kategori = $kategori->find($id)->update($request->all());;
       
        return redirect('datakategori')->with('pesan','Update Data Berhasil');;
    }
    //end update data
    //hapus data kategori
    public function hapuskategori($KategoriID){
        $kategori = new KategoriBuku();
        $kategori = $kategori->find($KategoriID);
        $kategori->delete();
        return back();
    }
    //end hapus data


    



    //relasi
    public function datarelasia(){
        $ambil = new KategoriBukuRelasi();
        return view ('Admin.Datakategorirelasi',['rela'=>$ambil->paginate(6)]);
    }
    //end data kategori relasi
    // tambah kategori relasi
    public function tambahrelasia(){
        $nyuri = new KategoriBukuRelasi();
        $nyokot = new KategoriBuku();
        $ambil = new Buku();
        return view("Admin.Addrelasi",['datak'=>$nyokot->all(),'datab'=>$ambil->all()]);
    }
    public function tambahinrelasia(Request $request){
        $c = new KategoriBukuRelasi();
        $c->create($request->all());
        return redirect('datarelasi')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambahkategorirelasi
    //update data kategori relasi
    public function editrelasi($id){
        $nyuri = new KategoriBuku();
        $nyokot = new Buku();
        $relasi = new KategoriBukuRelasi();
        return view('Admin.Editrelasi',['editrelasi'=>$relasi->find($id),'datak'=>$nyuri->all(),'datab'=>$nyokot->all()]);
    }
    public function editrelasia(Request $request,$id){
        // $validasi = $request->validate([
        //     'NamaKategori' => 'required'
            
        // ]);
        $relasi = new KategoriBukuRelasi();
        $relasi = $relasi->find($id)->update($request->all());;
       
        return redirect('datarelasi')->with('pesan','Update Data Berhasil');;
    }
    //end update data
    //hapus data relasi
    public function hapusrelasi($KategoriBukuID){
        $relasi = new KategoriBukuRelasi();
        $relasi = $relasi->find($KategoriBukuID);
        $relasi->delete();
        return back();
    }
    //end hapus data





    //data admin
    public function dataadmina(){
        $ambil = new Admin();
        return view ('Admin.Dataadmin',['admins'=>$ambil->paginate(6)]);
    }
    //end data 
    // tambah admin
    public function tambahadmina(){
        $ambil = new Admin();
        return view("Admin.Addadmin");
    }
    public function tambahinadmina(Request $request){
        $c = new Admin();
        $c->create($request->all());
        return redirect('dataadmin')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambah admin
    //update data admin
    public function editadmin($id){
        $admin = new Admin();
        return view('Admin.Editadmin',['editadmin'=>$admin->find($id)]);
    }
    public function editadmina(Request $request,$id){
        // $validasi = $request->validate([
        //     'NamaKategori' => 'required'
            
        // ]);
        $admin = new Admin();
        $admin = $admin->find($id)->update($request->all());;
       
        return redirect('dataadmin')->with('pesan','Update Data Berhasil');;
    }
    //end update data
    //hapus data admin
    public function hapusadmin($PetugasID){
        $admin = new Admin();
        $admin = $admin->find($PetugasID);
        $admin->delete();
        return back();
    }
    //end hapus data
}
