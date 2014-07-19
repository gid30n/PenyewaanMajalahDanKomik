<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Penyewaan
 *
 * @author Real
 */
class Penyewaan extends Eloquent {
    protected $table = 'penyewaan';
    
    public $timestamps  = false;
   
    public function Member() {
       return $this->hasOne("App\\Models\Member"); 
    }
    
    public function Entry() {
       return $this->hasMany("App\\Models\Entry"); 
    }
}

