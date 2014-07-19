<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use View;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Models\Entry;

/**
 * Description of EntryController
 *
 * @author fidia
 */
class EntryController extends BaseController{  
    public function view () {
        $t = entry::paginate(3);
        $data = array(
            'entry' => $t,
        );
        return View::make('entry.view', $data);
   
    }
    
     public function add() {
       return View::make('entry.add');
    }

    public function addProses() {
        $inp = Input::all();
        $t = new Entry();
        $t->kode = $inp['kode'];
        $t->jenis = $inp['jenis'];
        $t->judul = $inp['judul'];
        $t->tanggal_terbit = date($inp['tanggal_terbit']);
        $t->penerbit = $inp['penerbit'];
        $t->harga_sewa = $inp['harga_sewa'];
        $t->save();

        return Redirect::to('/entry');
    } 
     public function edit($id) {
        $t = Entry::find($id);
        $data = array(
            'entry' => $t,
        );
        return View::make('entry.edit', $data);
    }

    public function editProses() {
        $inp = Input::all();
        $t = Entry::find($inp['id']);
        $t->kode = $inp['kode'];
        $t->jenis = $inp['jenis'];
        $t->judul = $inp['judul'];
        $t->tanggal_terbit = date($inp['tanggal_terbit']);
        $t->penerbit = $inp['penerbit'];
        $t->harga_sewa = $inp['harga_sewa'];
        $t->update();
        
        return Redirect::to('/entry'); 
    }

    public function delete($id) {
        $t = Entry::find($id);
        $t->delete();
        return Redirect::to('/entry');
    }

}
