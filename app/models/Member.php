<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent ;

/**
 * Description of Member
 *
 * @author Lana
 */
class Member extends Eloquent {
    
    protected $table = 'member';
    public  $timestamps= false ;
    

    public function penyewaan() {
        return $this->hasOne("App\\Models\\penyewaan");
        
    }
}
