<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Models\Penyewaan;

/**
 * Description of PenyewaanController
 *
 * @author Real
 */
class PenyewaanController extends BaseController{
    public function view (){
        $t = Penyewaan::paginate(3);
        $data = array(
            'penyewaan' => $t,
        );
        return View::make('penyewaan.view', $data) ;
    }
    public function add() {
        return View::make('penyewaan.add');   
    }
    
    public function addProses() {
        $inp = Input::all();
        $t = new Penyewaan();
        $t->id_member = $inp['id_member'];
        $t->kode = $inp['kode'];
        $t->jenis = $inp['jenis'];
        $t->judul = $inp['judul'];
        $t->harga_sewa = $inp['harga_sewa'];
        $t->tanggal_pinjam = $inp['tanggal_pinjam'];
        $t->tanggal_kembali = $inp['tanggal_kembali'];
        $t->save();
        
        return Redirect::to('/penyewaan');
    }
    
    public function edit($id) {
        $t = Penyewaan::find($id);
        $data = array(
            'penyewaan' => $t,
        );
        return View::make('penyewaan.edit', $data);
    }
    
    public function editProses() {
        $inp = Input::all();
        $t = Penyewaan::find($inp['id']);
        $t->id_member = $inp['id_member'];
        $t->kode = $inp['kode'];
        $t->jenis = $inp['jenis'];
        $t->judul = $inp['judul'];
        $t->harga_sewa = $inp['harga_sewa'];
        $t->tanggal_pinjam = $inp['tanggal_pinjam'];
        $t->tanggal_kembali = $inp['tanggal_kembali'];
        $t->update();
        
        return Redirect::to('/penyewaan');
        
    }
    public function delete($id) {
        $t = Penyewaan::find($id);
        $t->delete();
        
        return Redirect::to('/penyewaan');
        
    }
}
