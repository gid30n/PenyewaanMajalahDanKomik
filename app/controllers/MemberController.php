<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use View;
use Illuminate\Support\Facades\Redirect;
use Input ;
use App\Models\Member;

/**
 * Description of MemberController
 *
 * @author Lana
 */
class MemberController extends BaseController{
    public function view (){
        $t = Member::paginate(3);
        $data = array(
            'member' => $t,
        );
        return View::make('member.view', $data) ;
    }
    public function add() {
        return View::make('member.add');   
    }
    public function addProses() {
        $inp = Input::all();
        $t = new Member();
        $t->id_member = $inp['id_member'];
        $t->nama = $inp['nama'];
        $t->alamat =$inp['alamat'];
        $t->jenis_kelamin = $inp['jenis_kelamin'];
        $t->no_hp = $inp['no_hp'];
        $t->save();

        return Redirect::to('/member');
}
public function edit($id) {
        $t = Member::find($id);
        $data = array(
            'member' => $t,
        );
        return View::make('member.edit', $data);
    }
    
    public function editProses() {
        $inp = Input::all();
        $t = Member::find($inp['id']);
        $t->id = $inp['id'];
        $t->id_member = $inp['id_member'];
        $t->nama = $inp['nama'];
        $t->alamat = $inp['alamat'];
        $t->jenis_kelamin = $inp['jenis_kelamin'];
        $t->no_hp = $inp['no_hp'];
        $t->update();
        
        return Redirect::to('/member'); 
    }
    public function delete($id) {
        $t = Member::find($id);
        $t->delete();
        return Redirect::to('/member');
    }

}
