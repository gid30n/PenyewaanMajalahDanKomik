<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * Description of Entry
 *
 * @author fidia
 */
class Entry extends Eloquent {
    protected $table = 'entry';
    
    public $timestamps = false; 
    
    public function penyewaan() {
    return $this->belongsTo("App\\Models\\penyewaan");
        
    }
    
}
