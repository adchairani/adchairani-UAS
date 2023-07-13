<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnalumum_model extends Model
{
    use HasFactory;
    protected $table ="jurnal_umum_adchairani";
    protected $primaryKey ="id";

    public function tampil_Jurnalumum(){
        $query = \DB::table('jurnal_umum_adchairani')->get();
        return $query;
    }
}
